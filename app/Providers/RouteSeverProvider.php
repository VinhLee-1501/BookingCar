<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteSeverProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->configureRoutes();
    }

    /**
     * Configure the routes for the application.
     */
    protected function configureRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // Nạp các route từ tệp auth.php
        Route::middleware('web')
            ->group(base_path('routes/auth.php'));

    }

}
