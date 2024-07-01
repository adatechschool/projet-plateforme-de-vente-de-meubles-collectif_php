<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

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

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }
        return response()->json($product);
    }

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
            // Supprimer l'ancienne image si elle existe
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        // Supprimer l'image associée si elle existe
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json(['message' => 'Produit supprimé avec succès']);
    }
}
