<?php

use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserOrderController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\UserRequestController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login', 301);
Route::redirect('/user/dashboard', '/user/dashboard/index', 301);

Route::prefix('user/dashboard')->name('user.')->middleware(['auth', 'user'])->group(function () {
    Route::get('/index', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/received', [UserRequestController::class, 'received'])->name('request.received');
    Route::get('/received/show/{id}', [UserRequestController::class, 'receivedShow'])->name('request.receivedShow');
    Route::post('/received', [UserRequestController::class, 'receivedAccept'])->name('request.receivedAccept');
    Route::resource('request', UserRequestController::class);
    Route::resource('profile', UserProfileController::class);
    Route::get('order/onGoing', [UserOrderController::class, 'onGoing'])->name('order.onGoing');
    Route::get('order/complete', [UserOrderController::class, 'complete'])->name('order.complete');
    Route::get('order/request', [UserOrderController::class, 'request'])->name('order.request');
    Route::resource('order', UserOrderController::class);

});


require __DIR__ . '/auth.php';
require __DIR__ . '/seller.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/socialite.php';
