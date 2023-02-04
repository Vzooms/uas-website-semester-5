<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
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

Route::middleware(['GuestOnly'])->group(function () {
    Route::get('/login', [AccountController::class, 'toLogin'])->name('login');
    Route::post('/login', [AccountController::class, 'login']);

    Route::get('/register', [AccountController::class, 'toRegister']);
    Route::post('/register', [AccountController::class, 'register']);
});


Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AccountController::class, 'logout']);
    Route::get('/home', [ItemController::class, 'toHome']);

    Route::get('/detail/{id}', [ItemController::class, 'toDetail']);
    Route::post('/createOrder', [OrderController::class, 'createOrder']);
    Route::delete('/removeOrder', [OrderController::class, 'removeOrder']);
    Route::delete('/checkOut', [OrderController::class, 'checkOut']);
    Route::get('/cart', [OrderController::class, 'toOrder']);

    Route::get('/profile', [AccountController::class, 'toProfile']);
    Route::patch('/editProfile', [AccountController::class, 'editProfile']);

    Route::middleware(['AdminOnly'])->group(function () {
        Route::get('/account_maintenance', [AccountController::class, 'toAccount_maintenance']);
        Route::get('/account_maintenance/detail/{id}', [AccountController::class, 'toAccountDetail']);
        Route::patch('/editAccountMaintenance', [AccountController::class, 'editAccountMaintenance']);
        Route::delete('/deleteAccount', [AccountController::class, 'deleteAccount']);
    });
});

Route::get('/success', function () {
    return view('success');
});

