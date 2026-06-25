<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsController;

Route::get('/', [HomeController::class, 'login'])->name('login');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/forgot-password', [HomeController::class, 'forgotPassword'])->name('forgot-password');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard',
        [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/users',
        [UserController::class, 'users'])
        ->name('users.index');

    Route::get('/users/create',
        [UserController::class, 'create'])
        ->name('users.create');

    Route::get('/users/{id}',
        [UserController::class, 'userDetails'])
        ->name('users.user-details');


    Route::get('/profile',
        [ProfileController::class, 'profile'])
        ->name('profile');

    Route::get('/charts', 
        [DashboardController::class, 'charts'])
        ->name('charts');

    Route::get('/settings',
        [SettingsController::class, 'settings'])
        ->name('settings');
});