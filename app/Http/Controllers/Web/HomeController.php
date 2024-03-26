<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductHot;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $productsHots = ProductHot::where('quantity_sale', '>=', 5)->with('product')->get();
        $productNews = Product::whereDate('created_at', '>=', Carbon::now()->subDays(7))->get();

        return view('layouts.web', [
            'banners' => $banners,
            'categories' => $categories,
            'products' => $products,
            'productHots' => $productsHots,
            'productNews' => $productNews
        ]);
    }

    public function contact()
    {
        return view('layouts.web');
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

    public function search(Request $request)
    {
        $banners = Banner::all();
        $categories = Category::all();

        $query = Product::query();

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('search_product')) {
            $query->where('name', 'like', '%' . $request->search_product . '%');
        }

        $products = $query->get();

        return view('layouts.web', [
            'banners' => $banners,
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
