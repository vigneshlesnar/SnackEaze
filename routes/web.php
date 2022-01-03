<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/order-online', function () {
    return view('products');
});
Route::get('/pizza','App\Http\Controllers\ProductController@pizza');
Route::get('/desset','App\Http\Controllers\ProductController@dessert');
Route::get('/hotsips','App\Http\Controllers\ProductController@hotsip');
Route::get('/sandwich','App\Http\Controllers\ProductController@sandwich');
Route::get('/juice','App\Http\Controllers\ProductController@juice');
Route::get('/munchies','App\Http\Controllers\ProductController@munchie');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

