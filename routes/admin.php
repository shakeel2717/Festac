<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\UsersController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin/dashboard')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/index', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::get('users/suspend/{user}', [UsersController::class, 'suspend'])->name('users.suspend');
    Route::resource('/users', UsersController::class);
});


Route::redirect('/admin/dashboard', '/admin/dashboard/index');
