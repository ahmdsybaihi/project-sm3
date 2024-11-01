<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk UserController
Route::get('/users', [UserController::class, 'index']);

// Route resource untuk TodoController
Route::resource('todos', TodoController::class);
