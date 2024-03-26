<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = Admin::count();
        $user = User::count();
        $product = Product::where('active', 1)->count();
        $order = Order::count();
        $weeklySale = Order::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('total_price');
        $monthlySale = Order::whereYear('created_at', now()->year)->whereMonth('created_at', now()->month)->sum('total_price');
        $yearlySale = Order::whereYear('created_at', now()->year)->sum('total_price');

        return view('admin.home', [
            'admin' => $admin,
            'user' => $user,
            'product' => $product,
            'order' => $order,
            'weeklySale' => $weeklySale,
            'monthlySale' => $monthlySale,
            'yearlySale' => $yearlySale,
        ]);
    }
}
