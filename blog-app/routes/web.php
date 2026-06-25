<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about',[HomeController::class, 'about']);

Route::get('/student',[StudentController::class,'student'])->name('student.home');

Route::get('/product',[ProductController::class, 'product']);


Route::get('/student/add', [StudentController::class, 'create'])->name('student.create');

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
