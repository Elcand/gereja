<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChurchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

// Route::get('/about', [AboutController::class, 'about']);

Route::get('/maps', [MapsController::class, 'maps']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard/home', [HeroController::class, 'hero'])->name('dashboard.home');

Route::resource('/article', ArticleController::class);

// Route::resource('/about', AboutController::class);

Route::resource('/church', ChurchController::class);
