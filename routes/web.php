<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $admin = User::select()->where('is_admin', 1)->get();
    // dd($admin);
    return view('welcome');
});


Route::group([], function () {
    Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // dashboard
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    // user
    Route::get('user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('user', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('user/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('user/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

    // admin
    Route::get('admin', [AdminController::class, 'index'])->name('admin.admin.index');
    Route::get('admin/create', [AdminController::class, 'create'])->name('admin.admin.create');
    Route::post('admin', [AdminController::class, 'store'])->name('admin.admin.store');
    Route::get('admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.admin.edit');
    Route::put('admin/{id}', [AdminController::class, 'update'])->name('admin.admin.update');
    Route::delete('admin/{id}', [AdminController::class, 'destroy'])->name('admin.admin.delete');

    // banner
    Route::get('banner', [BannerController::class, 'index'])->name('admin.banner.index');
    Route::get('banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
    Route::post('banner', [BannerController::class, 'store'])->name('admin.banner.store');
    Route::get('banner/{id}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit');
    Route::put('banner/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
    Route::delete('banner/{id}', [BannerController::class, 'destroy'])->name('admin.banner.delete');

    // category
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

    // product
    Route::get('product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('product', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');

    // product image
    Route::get('product-image/{id}', [ProductImageController::class, 'index'])->name('admin.product-image.index');
    Route::get('product-image/{id}/create', [ProductImageController::class, 'create'])->name('admin.product-image.create');
    Route::post('product-image/{id}', [ProductImageController::class, 'store'])->name('admin.product-image.store');
    Route::delete('product-image/{id}', [ProductImageController::class, 'destroy'])->name('admin.product-image.delete');
});
