<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $categories = Category::all();
        $products = Product::all();

        return view('layouts.web', [
            'banners' => $banners,
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function category($id)
    {
        $banners = Banner::all();
        $category = Category::find($id);
        $categories = $categories = Category::all();
        $products = Product::where('category_id', $id)->get();

        return view('layouts.web', [
            'banners' => $banners,
            'category' => $category,
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function detail($id)
    {
        $product = Product::find($id);

        return view('layouts.web', [
            'product' => $product
        ]);
    }
}
