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
    // Cette méthode ajoute des images aux produits en utilisant l'API de Pexels
    public function addImagesToProducts()
    {
         // Crée une instance de Guzzle HTTP client
         $client = new Client();
        
         // Récupère tous les produits
         $products = Product::all();
        
 
         // Boucle sur chaque produit
         foreach ($products as $product) {
             try {
                 // Effectue une requête GET à l'API de Pexels
                 $response = $client->request('GET', 'https://api.pexels.com/v1/search', [
                     'headers' => [
                         'Authorization' => 'Bearer '.env('PEXELS_API_KEY') // Utilise la clé API de Pexels
                     ],
                     'query' => [
                         'query' => 'furniture', // Cherche des images de meubles
                         'per_page' => 1 // Limite les résultats à 1 image par requête
                     ]

                 ]);
 
                 // Décode la réponse JSON
                 $data = json_decode($response->getBody(), true);
 
                 // Vérifie si des images ont été trouvées
                 if (!empty($data['photos'])) {
                    
                    Log::info('Aucun produit trouvé.');
                     // Récupère l'URL de l'image
                     $imageUrl = $data['photos'][0]['src']['medium'];
                     Log::info('Image URL: ' . $imageUrl);
 
                     // Met à jour le produit avec l'URL de l'image
                     $product->update(['image' => $imageUrl]);
                 }
             } catch (RequestException $e) {
                 // Enregistre un message d'erreur dans les logs avec les détails de l'exception
                 Log::error('RequestException: ' . $e->getMessage());
                 // Continue to process the next product
             } catch (\Exception $e) {
                 // Enregistre un message d'erreur dans les logs avec les détails de l'exception
                 Log::error('Exception: ' . $e->getMessage());
                 // Continue to process the next product
             }
         }
 
         // Retourne une réponse JSON avec un message de succès
         return response()->json(['message' => 'Images ajoutées aux produits']);
     }
 
    // Cette méthode retourne tous les produits
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
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
