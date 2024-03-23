<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function addProductToCart($id)
    {
        $product = Product::findOrFail($id);
        $product->quantity_choose = 1;

        $cart = session()->get('cart', []);
        $cart[] = $product;
        session(['cart' => $cart]);

        return redirect()->route('web.home')->with('success', 'Thêm sản phẩm vào cart thành công');
    }

    public function showProduct()
    {
        $cart = session()->get('cart', []);
        $cartTotal = [];

        foreach ($cart as $item) {
            $id = $item->id;
            $price = $item->price_sale;
            $quantity_choose = $item->quantity_choose;

            // Check if the product ID exists in $cartTotal
            if (isset($cartTotal[$id])) {
                // If exists, update quantity and calculate total price
                $cartTotal[$id]['quantity_choose'] += $quantity_choose;
                $cartTotal[$id]['price_total'] += ($price * $quantity_choose);
            } else {
                // If not exists, add new entry
                $cartTotal[$id] = [
                    'id' => $id,
                    'quantity_choose' => $quantity_choose,
                    'price' => $price,
                    'price_total' => $price * $quantity_choose,
                ];
            }
        }

        // Convert $cartTotal array to indexed array
        $cartTotal = array_values($cartTotal);

        $productDetails = [];

        foreach ($cartTotal as $item) {
            $productId = $item['id'];
            $product = Product::findOrFail($productId);

            // Add product details to $productDetails array
            $productDetails[] = [
                'id' => $product->id,
                'category_id' => $product->category_id,
                'name' => $product->name,
                'description' => $product->description,
                'image' => $product->image,
                'price' => $product->price,
                'price_sale' => $product->price_sale,
                'quantity' => $product->quantity,
                'quantity_choose' => $item['quantity_choose'],
                'price_total' => $item['price_total'],
            ];
        }

        return view('layouts.web', [
            'productDetails' => $productDetails,
        ]);
    }
}
