<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChurchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HeroController::class, 'index']);
Route::get('/', function () {
    $hero = \App\Models\Hero::first(); // Atau query sesuai kebutuhan
    return view('home', compact('hero'));  // Kirim data ke view
});

Route::resource('/about', AboutController::class);
Route::post('/about', [AboutController::class, 'storeOrUpdate'])->name('about.storeOrUpdate');

// Route::get('/maps', [MapsController::class, 'maps']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('/hero', HeroController::class);
Route::post('/hero', [HeroController::class, 'storeOrUpdate'])->name('hero.storeOrUpdate');


Route::resource('/article', ArticleController::class);


Route::resource('/church', ChurchController::class);
Route::get('/church/show/{id}', [ChurchController::class, 'show'])->name('church.show');

Route::resource('/maps', MapsController::class);
Route::get('/maps/show/{id}', [MapsController::class, 'show'])->name('maps.show');
