<?php

namespace App\Providers;

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
        view()->composer('*', function($view) {
            $userMenu = app('App\Http\Controllers\MenuController')->getUserMenu();
            $view->with('userMenu', $userMenu);
        });
    }
}
