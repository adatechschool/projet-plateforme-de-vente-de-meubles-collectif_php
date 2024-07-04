<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function index()
    {
        $cart = Cart::with('items.product')->where('user_id', Auth::id())->first();
        return response()->json($cart);
    }

    public function store(Request $request)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        $cartItem = $cart->items()->create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json($cartItem, 201);
    }

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::find($id);

        if (!$cartItem) {
            return response()->json(['message' => 'Article de panier non trouvé'], 404);
        }

        $cartItem->update(['quantity' => $request->quantity]);

        return response()->json($cartItem);
    }

    public function destroy($id)
    {
        $cartItem = CartItem::find($id);

        if (!$cartItem) {
            return response()->json(['message' => 'Article de panier non trouvé'], 404);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Article de panier supprimé avec succès']);
    }
}
