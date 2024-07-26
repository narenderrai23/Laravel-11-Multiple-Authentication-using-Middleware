<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Admin\HomeController;

Route::group(['middleware' => ['user-access:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('sliders', SliderController::class);
});
