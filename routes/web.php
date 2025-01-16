<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/maps', [MapsController::class, 'maps']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
