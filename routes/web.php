<?php

use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comments/{msg}', [GreetingController::class, 'greeting']);


Route::get('/comments/freeword/{msg}', function ($msg) {
    return view('comments.freeword', ['msg' => $msg]);
});
