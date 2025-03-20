<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
    // return view('welcome');
// });


Route::controller(HomeController::Class) -> group(function() {
    Route::get('/', 'index');
});

Route::get('/signup', [SignupController::class, 'create']) -> name('signup');

Route::get('/login', [LoginController::class, 'create']) -> name('login');