<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Welcome route
Route::get('/', function () {
    return view('welcome');
});

// Login route
Route::get('/login', function () {
    return view('auth.login');
});

// Register route
Route::get('/register', function () {
    return view('auth.register');
});

// Authentication routes
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);