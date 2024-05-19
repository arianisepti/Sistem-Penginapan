<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Routing\Router;

use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([RedirectIfAuthenticated::class, 'guest']); // Menggunakan metode alias

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

