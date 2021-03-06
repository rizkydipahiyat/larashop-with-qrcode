<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function() {
    Session::forget('user');
    return view('login');
});
Route::view('/register', 'register');
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::get('/search', [ProductController::class, 'search']);
Route::post('/add-to-cart', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::get('/remove/{id}', [ProductController::class, 'removeCart']);
Route::get('/order', [ProductController::class, 'order']);
Route::get('/my-orders', [ProductController::class, 'myOrders']);
Route::post('/placeorder', [ProductController::class, 'placeorder']);
Route::view('/payment-success', [ProductController::class, 'payment']);