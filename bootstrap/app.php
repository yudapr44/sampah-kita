<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // DAFTARKAN SEMUA ALIAS MIDDLEWARE DI SINI
        $middleware->alias([
            'admin.auth'     => \App\Http\Middleware\AdminAuth::class,
            'admin.3r.auth'  => \App\Http\Middleware\Admin3RAuth::class,
            'track.visitors' => \App\Http\Middleware\TrackVisitors::class, // <-- Tambahkan ini (sesuaikan namespace class jika foldernya berbeda)
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();