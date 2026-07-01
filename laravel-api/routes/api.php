<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthController;


//user api
Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('/login', [AuthController::class, 'login']);

//tokens used
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/profile', [AuthController::class, 'profile']);

    Route::put('/profile', [AuthController::class, 'updateProfile']);

});




//Product api
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', [ProductController::class, 'hello']);

Route::get('/user/{id}', function ($id) {
    return response()->json([
        'user_id' => $id
    ]);
});

Route::get('/student/{name}', function ($name) {
    return response()->json([
        'student_name' => $name
    ]);
});

Route::get('/products', [ProductController::class, 'index']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::put('/products/{product}', [ProductController::class, 'update']);

Route::delete('/products/{product}', [ProductController::class, 'destroy']);