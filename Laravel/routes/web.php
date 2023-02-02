<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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

Route::get('/', [AccountController::class, 'toIndex']);

Route::get('/login', [AccountController::class, 'toLogin']);
Route::post('/login', [AccountController::class, 'login']);

Route::post('/logout', [AccountController::class, 'logout']);

Route::get('/register', [AccountController::class, 'toRegister']);
Route::post('/register', [AccountController::class, 'register']);

Route::get('/home', [function () {
    return view('home.home');
}]);

Route::get('/detail', function () {
    return view('home.detail');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/profile', [AccountController::class, 'toProfile']);

Route::get('/account_maintenance', [AccountController::class, 'toAccount_maintenance']);

Route::get('/account_maintenance/detail', function () {
    return view('account_maintenance.detail');
});

