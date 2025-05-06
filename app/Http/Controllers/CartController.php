<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->product_id;
        $product_name = $request->product_name;
        $product_price = $request->product_price;
        $product_image = $request->product_image;
        $quantity = $request->quantity ?? 1;

        // Get existing cart from session
        $cart = session()->get('cart', []);

        // Check if product already exists in the cart
        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] += $quantity;
        } else {
            $cart[$product_id] = [
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price,
                'image' => $product_image,
                'quantity' => $quantity,
            ];
        }

        // Save updated cart to session
        session()->put('cart', $cart);

        return response()->json(['message' => 'Product added to cart successfully', 'cart' => $cart]);
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Update cart item quantity
    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true, 'cart' => $cart]);
    }

    public function removeFromCart($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return response()->json(['success' => true, 'message' => 'Product removed from cart']);
}


    public function clearCart()
    {
        session()->forget('cart');
        return response()->json(['message' => 'Cart cleared successfully']);
    }
}
