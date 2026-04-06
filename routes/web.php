<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Temporary debug route - remove after fixing
Route::get('/health', function () {
    $checks = [];
    $checks['php'] = PHP_VERSION;
    $checks['laravel'] = app()->version();
    $checks['env_exists'] = file_exists(base_path('.env')) ? 'yes' : 'NO - .env MISSING';
    $checks['app_key'] = config('app.key') ? 'set' : 'NOT SET';
    $checks['storage_writable'] = is_writable(storage_path()) ? 'yes' : 'NO';
    $checks['views_dir'] = is_dir(storage_path('framework/views')) ? 'yes' : 'NO';
    $checks['manifest'] = file_exists(public_path('build/manifest.json')) ? 'yes' : 'NO - manifest.json MISSING';
    $checks['debug'] = config('app.debug') ? 'on' : 'off';

    return response()->json($checks);
});
