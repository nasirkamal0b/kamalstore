<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        // Share categories with all views
    View::share('categories', Category::with('subcategories')->get());

    View::composer('*', function ($view) {
        $view->with('cart', Session::get('cart', []));
    });

    }
}
