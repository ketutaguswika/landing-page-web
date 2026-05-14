<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Unit;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/units/{id}', [LandingController::class, 'show'])->name('units.show');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/promo', [PageController::class, 'promo'])->name('promo');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');