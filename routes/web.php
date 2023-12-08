<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
// use App\Http\Controllers\ProductController::wish;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('puser.welcome');
// });

Route::get('/', [ProductController::class, "Listproduct1"]);

Route::get('index', [ProductController::class, 'index'])->name('index');
Route::get('products', [ProductController::class, 'products'])->name('products');
Route::get('produks', [ProductController::class, 'rproduk']);
Route::get('Listproduct', [ProductController::class, 'Listproduct'])->name('Listproduct');
Route::get('produk', [ProductController::class, 'produk'])->name('produk');
// Route::get('like', [ProductController::class, 'like']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');;
Route::get('index/create', [ProductController::class, 'create']);
Route::post('product/store', [ProductController::class, 'store']);
Route::get('product/{id}/edit', [ProductController::class, 'edit']);
Route::get('AdminDashboard', [ProductController::class, 'AdminDashboard']);
Route::get('sellerdashboard', [ProductController::class, 'sellerdashboard'])->name('sellerdashboard');
Route::get('buyerdashboard', [ProductController::class, 'buyerdashboard'])->name('buyerdashboard');

Route::put('product/{id}/update', [ProductController::class, 'update'])->name('update');

Route::delete('product/{id}/delete', [ProductController::class, 'destroy']);

Route::get('product/{id}/show', [ProductController::class, 'show']);
Route::get('product/{id}/detail', [ProductController::class, 'detail']);
Route::get('product/{id}/pdetail', [ProductController::class, 'pdetail']);

Route::get('/jenis', [ProductController::class, 'jenis'])->name('jenis');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/pencarian', [ProductController::class, 'pencarian'])->name('pencarian');
Route::Post('/wish', [WishlistController::class, 'wish'])->middleware('auth');

Route::get('buyer', function() {
    return view('buyer.home', [
        'products'=> Product::inRandomOrder()->get()
    ]);
});

Route::get('user', function() {
    return view('user.home', [
        'products'=> Product::inRandomOrder()->get()
    ]);
});

Route::get('puser', function() {
    return view('puser.welcome', [
        'products'=> Product::inRandomOrder()->get()
    ]);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin', function () {
        return view('admin.AdminDashboard');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
