<?php

use App\Http\Middleware\LogHttpRequests;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->prepend(LogHttpRequests::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
