<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kontak', [HomeController::class, 'showKontak']);
Route::get('produk', [HomeController::class, 'showProduk']);
Route::get('cart', [HomeController::class, 'showCart']);
Route::get('detail_produk', [HomeController::class, 'showDetailProduk']);
Route::get('blog', [HomeController::class, 'showBlog']);
Route::get('wishlist', [HomeController::class, 'showWishlist']);
Route::get('login', [HomeController::class, 'showLogin']);
Route::get('checkout', [HomeController::class, 'showCheckout']);
Route::get('about', [HomeController::class, 'showAbout']);
