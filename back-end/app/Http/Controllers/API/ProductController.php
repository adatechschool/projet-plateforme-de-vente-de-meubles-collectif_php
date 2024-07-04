<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller

{
      // Méthode pour récupérer tous les produits
      public function index()
      {
          $products = Product::all();
          return response()->json($products);
      }
  
    
    public function addImagesToProducts()
    {
        $client = new Client(); // Crée une instance de Guzzle HTTP client
        $products = Product::all(); // Récupère tous les produits

        foreach ($products as $product) {
            try {
                // Effectue une requête GET à l'API de Unsplash
                $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
                    'headers' => [
                        'Authorization' => 'Client-ID ' . env('UNSPLASH_ACCESS_KEY') // Utilise la clé d'accès Unsplash depuis le fichier .env
                    ],
                    'query' => [
                        'query' => 'furniture', // Cherche des images de meubles
                        'per_page' => 1 // Limite les résultats à 1 image par requête
                    ]
                ]);

                $data = json_decode($response->getBody(), true); // Décode la réponse JSON
                Log::info('Unsplash API response: ', $data);
                if (!empty($data['results'])) {
                    $imageUrl = $data['results'][0]['urls']['regular']; // Récupère l'URL de l'image
                    $product->update(['image' => $imageUrl]); // Met à jour le produit avec l'URL de l'image
                    Log::info('Product updated: ', $product->toArray());
                } else {
                    Log::info('No images found for product: ', $product->toArray());
                }
            
            } catch (RequestException $e) {
                // Enregistre un message d'erreur dans les logs avec les détails de l'exception
                Log::error('RequestException: ' . $e->getMessage());
                // Retourne une réponse JSON avec un message d'erreur et un code d'état HTTP 500 (Erreur interne du serveur)
                return response()->json(['message' => 'Erreur lors de la récupération des images : ' . $e->getMessage()], 500);
            } catch (\Exception $e) {
                // Enregistre un message d'erreur dans les logs pour toute autre exception
                Log::error('Exception: ' . $e->getMessage());
                // Retourne une réponse JSON avec un message d'erreur et un code d'état HTTP 500 (Erreur interne du serveur)
                return response()->json(['message' => 'Erreur interne du serveur : ' . $e->getMessage()], 500);
            }
        }

        // Retourne une réponse JSON confirmant que les images ont été ajoutées aux produits
        return response()->json(['message' => 'Images ajoutées aux produits']);
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
