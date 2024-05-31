<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->as('pages:')->group(static function (): void {
        Route::middleware(['auth'])->group(static function (): void {
            Route::view('/', 'pages.index')->name('home');
        });

        Route::prefix('auth')->as('auth:')->group(static function (): void {
            Route::view('register', 'pages.auth.register')->name('register');
        });
    });
}
