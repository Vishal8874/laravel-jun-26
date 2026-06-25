<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('product.home');

Route::get('/product/add', [ProductController::class, 'create'])->name('product.create');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{id}', [ProductController::class, 'delete'])->name('product.delete');