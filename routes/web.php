<?php

use App\Http\Livewire\Account;
use App\Http\Livewire\ArchiveProduct;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Contactus;
use App\Http\Livewire\Home;
use App\Http\Livewire\SingleProduct;
use App\Http\Livewire\Wishlist;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get("/", Home::class)->name("home");
Route::get("/cart", Cart::class)->name("cart");
Route::get("/account", Account::class)->name("account");
Route::get("/wishlist", Wishlist::class)->name("wishlist");
Route::get("/single-product", SingleProduct::class)->name("singleProduct");
Route::get("/archive-product", ArchiveProduct::class)->name("archiveProduct");
Route::get("/checkout", Checkout::class)->name("checkout");
Route::get("/contactus", Contactus::class)->name("contactus");
