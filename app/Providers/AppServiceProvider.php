<?php

namespace App\Providers;

use Illuminate\Support\Facades\View; // Pastikan import ini ada
use App\Models\Unit;               // Pastikan import ini ada
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Audit: Secara otomatis kirim data $units ke komponen footer di halaman mana pun
        View::composer('components.footer', function ($view) {
            $view->with('units', Unit::all());
        });
    }
}