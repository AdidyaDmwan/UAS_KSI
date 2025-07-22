<?php

use App\Http\Middleware\SecurityHeaders;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        api: __DIR__ . '/../routes/api.php',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Tambahkan middleware SecurityHeaders di sini
        $middleware->append(SecurityHeaders::class);
        $middleware->append(\App\Http\Middleware\RestrictRobotsTxt::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();
