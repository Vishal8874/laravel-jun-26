<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'API Working Successfully'
    ]);
});


Route::get('/test-mail', function () {

    Mail::raw('Laravel Email Working!', function ($message) {
        $message->to('vishalchaurasiya8786@gmail.com')
                ->subject('Mail Test');
    });

    return response()->json([
        'message' => 'Mail Sent Successfully'
    ]);
});