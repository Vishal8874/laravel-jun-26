<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

//named route
Route::get('/', [HomeController::class, 'index'])->name('home');


//products route
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');//named route


//teachers route
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');//named route
Route::get('/teachers/{id}', [TeacherController::class, 'show']);






//student route
Route::get('/students', [StudentController::class, 'index'])->name('students.index'); //named route
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/create-student', [StudentController::class, 'create']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'delete'])->name('students.delete');




