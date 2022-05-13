<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\ConnectWalletController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\VerifyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('testimonial', function () {
    return view('testimonial');
});

// login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('wallet/logout', [LogoutController::class, 'logout']);

// signup
Route::get('signup', [SignupController::class, 'index']);
Route::post('signup', [SignupController::class, 'store']);

// newsletter 
Route::post('subscribe', [ConnectWalletController::class, 'subscribe']);

// verification route
Route::get('/verify/{vkey}', [VerifyController::class, 'index']);

Route::get('/wallet/connect', [ConnectWalletController::class, 'index'])->name('connect_wallet');
Route::post('/wallet/connect', [ConnectWalletController::class, 'connect']);

// // Admin Route
Route::get('admin/login', [AdminLoginController::class, 'index']);
Route::post('admin/login', [AdminLoginController::class, 'login']);


