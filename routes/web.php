<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Auth::routes();

require __DIR__ . '/auth.php';
require __DIR__ . '/adminauth.php';