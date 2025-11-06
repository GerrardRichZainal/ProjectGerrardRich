<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Bagikan semua kategori ke semua view untuk digunakan di navbar
        try {
            $categories = Category::orderBy('name')->get();
        } catch (\Exception $e) {
            // Jika belum ada tabel atau terjadi error saat migrate, jangan crash aplikasi
            $categories = collect();
        }

        View::share('allCategories', $categories);
    }
}
