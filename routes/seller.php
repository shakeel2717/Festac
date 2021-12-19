<?php

use App\Http\Controllers\seller\Auth\RegisterController;
use App\Http\Controllers\seller\SellerDashboardController;
use App\Http\Controllers\seller\SellerProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('seller')->name('seller.')->middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/store', [RegisterController::class, 'store'])->name('store');
});


Route::prefix('seller/dashboard')->name('seller.')->middleware(['auth', 'seller'])->group(function () {
    Route::get('/index', [sellerDashboardController::class, 'index'])->name('dashboard');
    Route::resource('profile', SellerProfileController::class);;
});


Route::redirect('/seller/dashboard', '/seller/dashboard/index');
