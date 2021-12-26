<?php

use App\Http\Controllers\seller\Auth\RegisterController;
use App\Http\Controllers\seller\SellerDashboardController;
use App\Http\Controllers\seller\SellerOrderController;
use App\Http\Controllers\seller\SellerProfileController;
use App\Http\Controllers\seller\SellerRequestController;
use App\Http\Controllers\seller\SupportSellerController;
use Illuminate\Support\Facades\Route;


Route::prefix('seller')->name('seller.')->middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/store', [RegisterController::class, 'store'])->name('store');
});


Route::prefix('seller/dashboard')->name('seller.')->middleware(['auth', 'seller'])->group(function () {
    Route::get('/index', [sellerDashboardController::class, 'index'])->name('dashboard');
    Route::resource('profile', SellerProfileController::class);;
    Route::resource('support', SupportSellerController::class);;
    Route::get('/request/index', [SellerRequestController::class, 'index'])->name('request.index');
    Route::get('/request/show/{id}', [SellerRequestController::class, 'show'])->name('request.show');
    Route::post('/request/store', [SellerRequestController::class, 'store'])->name('request.store');
    Route::get('/request/sent', [SellerRequestController::class, 'sent'])->name('request.sent');
    Route::resource('order', SellerOrderController::class);
});


Route::redirect('/seller/dashboard', '/seller/dashboard/index');
