<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function () {
            $adminRoute = [
                'index.php',
                'categories.php',
                'car.php',
                'carriageway.php',
                'theried.php',
                'ticket.php',
                'customer.php'
            ];

            $clientRoute = [
                'index.php',
                'about.php',
                'contact.php',
                'news.php',
                'schedule.php',
                'searchTicket.php',
                'signin.php',
                'booking.php'
            ];

            foreach ($adminRoute as $route) {
                Route::middleware(['web', 'auth'])
                    ->prefix('dashboard')
                    ->name('dashboard.')
                    ->group(base_path("routes/admin/{$route}"));
            }

            foreach ($clientRoute as $route) {
                Route::middleware('web')
                    ->prefix('user')
                    ->name('user.')
                    ->group(base_path("routes/client/{$route}"));
            }

        },
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();