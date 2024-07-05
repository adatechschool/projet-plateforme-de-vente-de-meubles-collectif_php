<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
// {
//     // Méthode pour récupérer tous les produits
//     public function index()
//     {
//         $products = Product::all();
//         return response()->json($products);
//     }

//     // Ajout d'images aux produits
//     public function addImagesToProducts()
//     {
//         $client = new Client(); // Crée une instance de Guzzle HTTP client
//         $products = Product::all(); // Récupère tous les produits
//         $queries = ['furniture', 'chair', 'table', 'sofa', 'desk', 'cabinet', 'bed', 'shelf', 'stool', 'wardrobe'];

//         foreach ($products as $product) {
//         try {
//              // Sélectionne un mot-clé de recherche aléatoire
//              $query = $queries[array_rand($queries)];

//             // Effectue une requête GET à l'API de Unsplash pour récupérer plusieurs images
//             $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
//                 'headers' => [
//                     'Authorization' => 'Client-ID ' . env('UNSPLASH_ACCESS_KEY') // Utilise la clé d'accès Unsplash depuis le fichier .env
//                 ],
//                 'query' => [
//                     'query' => $query, // Cherche des images de meubles
//                     'per_page' => 1, // recupere une image par produit
//                     'page' => rand(1, 1000) // Ensure random images by selecting a random page
                    
//                 ]
//             ]);

{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function addImagesToProducts()
    {
        $client = new Client();
        $products = Product::all();
        $queries = ['furniture', 'chair', 'table', 'sofa', 'desk', 'cabinet', 'bed', 'shelf', 'stool', 'wardrobe'];

        foreach ($products as $product) {
            try {
                $query = $queries[array_rand($queries)];
                $page = rand(1, 1000);

                $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
                    'headers' => [
                        'Authorization' => 'Client-ID ' . env('UNSPLASH_ACCESS_KEY')
                    ],
                    'query' => [
                        'query' =>'furnitur',
                        'per_page' => 1,
                        'page' => $page
                    ]
                ]);

            $data = json_decode($response->getBody(), true); // Décode la réponse JSON

            if (!empty($data['results'])) {
                foreach ($products as $index => $product) {
                    if (isset($data['results'][$index])) {
                        $imageUrl = $data['results'][$index]['urls']['regular']; // Récupère l'URL de l'image
                        $product->update(['image' => $imageUrl]); // Met à jour le produit avec l'URL de l'image
                        Log::info('Product updated: ', $product->toArray());
                    }
                }
            } else {
                Log::info('No images found for products');
            }

        } catch (RequestException $e) {
            Log::error('RequestException: ' . $e->getMessage());
            return response()->json(['message' => 'Erreur lors de la récupération des images : ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            return response()->json(['message' => 'Erreur interne du serveur : ' . $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Images ajoutées aux produits']);
    }
}

    // Cette méthode crée un nouveau produit
    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required|string|max:100',
            'categoryId' => 'nullable|exists:categories,id',
            'description' => 'required',
            'price' => 'required|numeric',
            'color' => 'required|string',
            'material' => 'required|string',
            'quantity' => 'required|integer',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        $product = Product::create($data);

        return response()->json($product, 201);
    }

    // Cette méthode retourne un produit spécifique
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }
        return response()->json($product);
    }

    // Cette méthode met à jour un produit spécifique
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        $request->validate([
            'productName' => 'required|string|max:100',
            'categoryId' => 'nullable|exists:categories,id',
            'description' => 'required',
            'price' => 'required|numeric',
            'color' => 'required|string',
            'material' => 'required|string',
            'quantity' => 'required|integer',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Supprime l'ancienne image si elle existe
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

        return response()->json($product);
    }

    // Cette méthode supprime un produit spécifique
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        // Supprime l'image associée si elle existe
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json(['message' => 'Produit supprimé avec succès']);
    }
}
