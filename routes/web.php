<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('/admin/hero', HeroController::class);
Route::post('/hero', [HeroController::class, 'storeOrUpdate'])->name('hero.storeOrUpdate');

Route::resource('/admin/about', AboutController::class);
Route::get('/admin/about', [AboutController::class, 'index'])->name('about.index');
Route::post('/about', [AboutController::class, 'storeOrUpdate'])->name('about.storeOrUpdate');

Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard.index');
Route::get('/login', [AuthenticationController::class, 'index'])->name('login.page');
Route::post('/login', [AuthenticationController::class, 'authenticate']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('log.out');
// Route::get('/auth/login', [AuthenticationController::class, 'index'])->name('login.page');
// Route::post('/login/proccess', [AuthenticationController::class, 'process'])->name('admin.login.process');

Route::resource('/admin/article', ArticleController::class);
Route::post('/admin/article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/admin/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{slug}/more', [ArticleController::class, 'more'])->name('article.more');

// Route::controller('CategoryController::class')->group(function () {
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/admin/category/show/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::post('/admin/category', [CategoryController::class, 'store'])->name('category.store');
Route::put('/admin/category/', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/admin/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// });

Route::resource('/admin/church', ChurchController::class);
Route::get('/church/show/{id}', [ChurchController::class, 'show'])->name('church.show');
Route::get('/church/{slug}/more', [ChurchController::class, 'more'])->name('church.more');

Route::resource('/admin/maps', MapsController::class);
Route::get('/maps/show/{id}', [MapsController::class, 'show'])->name('maps.show');
// Route::get('/maps', [MapsController::class, 'maps']);
