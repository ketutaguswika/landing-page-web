<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Models\Unit;

// Route utama sekarang diarahkan ke Controller, bukan fungsi anonim lagi
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/units/{id}', [LandingController::class, 'show'])->name('units.show');

Route::get('/about', function () {
  $units = Unit::all();
    return view('pages.about', compact('units'));
})->name('about');