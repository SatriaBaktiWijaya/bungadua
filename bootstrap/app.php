<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// 1. Buat instance aplikasi terlebih dahulu
$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

// 2. Gunakan 'if' biasa untuk memeriksa environment variable
if (env('APP_STORAGE')) {
    $app->useStoragePath(env('APP_STORAGE'));
}

// 3. Kembalikan instance aplikasi yang sudah dikonfigurasi
return $app;