<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::view('profile', 'pages.tenants.settings.profile')->name('profile');
Route::view('tenant', 'pages.tenants.settings.tenant')->name('tenant');
