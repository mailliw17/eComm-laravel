<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
// use Session;
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

// load halaman login
Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('logout', function () {
    session()->forget('user');
    return redirect('login');
});

// validasi data login untuk masuk ke home
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::get('/', [ProductController::class, 'index']);
Route::get('detail/{id}', [ProductController::class, 'detail']);
Route::post('add_to_cart', [ProductController::class, 'addToCart']);
Route::get('cartlist', [ProductController::class, 'cartList']);
Route::get('removeitem/{id}', [ProductController::class, 'removeItem']);
Route::get('ordernow', [ProductController::class, 'orderNow']);
Route::post('orderplace', [ProductController::class, 'orderPlace']);
Route::get('myorders', [ProductController::class, 'myOrders']);
