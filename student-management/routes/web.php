<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index']);

//named route
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

Route::get('/teachers/{id}', [TeacherController::class, 'show']);

Route::get('/add-student', [StudentController::class, 'create']);

Route::post('/add-student', [StudentController::class, 'store']);