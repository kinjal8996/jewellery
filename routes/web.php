<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('frontend.index');
});

// Login Details
Route::get('/Login',[LoginController::class,'loginview']);
Route::get('/register',[LoginController::class,'registerview']);
Route::post('/Signup2', [LoginController::class, 'signupdata']);
Route::post('/Login2',[LoginController::class, 'logindata']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/checkoutpage',[CheckoutController::class,'checkout']);
Route::get('/cart',[CartController::class,'cart']);
