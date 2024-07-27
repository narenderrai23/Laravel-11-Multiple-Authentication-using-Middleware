<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('dashboard');


Auth::routes();

require __DIR__ . '/auth.php';
require __DIR__ . '/adminauth.php';