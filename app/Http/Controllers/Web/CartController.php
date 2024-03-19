<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function addProductToCart(Product $product)
    {
        $cart = session()->get('cart', []);
        $cart[] = $product;
        session(['cart' => $cart]);

        return redirect()->route('web.home')->with('success', 'Product added to cart successfully');
    }
}
