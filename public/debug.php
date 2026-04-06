<?php
// Temporary diagnostic - bypasses Laravel entirely
// DELETE THIS FILE after fixing the issue

header('Content-Type: application/json');

$basePath = dirname(__DIR__);

$checks = [
    'php_version' => PHP_VERSION,
    'env_exists' => file_exists($basePath . '/.env') ? 'YES' : 'NO - THIS IS THE PROBLEM',
    'env_example_exists' => file_exists($basePath . '/.env.example') ? 'yes' : 'no',
    'vendor_exists' => is_dir($basePath . '/vendor') ? 'yes' : 'no',
    'vendor_autoload' => file_exists($basePath . '/vendor/autoload.php') ? 'yes' : 'NO - composer install not run',
    'artisan_exists' => file_exists($basePath . '/artisan') ? 'yes' : 'no',
    'storage_dir' => is_dir($basePath . '/storage') ? 'yes' : 'no',
    'storage_writable' => is_writable($basePath . '/storage') ? 'yes' : 'NO - permissions issue',
    'storage_framework_views' => is_dir($basePath . '/storage/framework/views') ? 'yes' : 'no',
    'storage_logs' => is_dir($basePath . '/storage/logs') ? 'yes' : 'no',
    'manifest_exists' => file_exists(__DIR__ . '/build/manifest.json') ? 'yes' : 'no',
    'bootstrap_cache_writable' => is_writable($basePath . '/bootstrap/cache') ? 'yes' : 'NO',
];

// Try to read .env APP_KEY if exists
if (file_exists($basePath . '/.env')) {
    $env = file_get_contents($basePath . '/.env');
    $checks['app_key_set'] = (strpos($env, 'APP_KEY=base64:') !== false) ? 'yes' : 'NO - APP_KEY missing';
    $checks['app_debug'] = (strpos($env, 'APP_DEBUG=true') !== false) ? 'true' : 'false';
} else {
    $checks['app_key_set'] = 'N/A - no .env file';
}

// Try to boot Laravel and capture the actual error
try {
    require $basePath . '/vendor/autoload.php';
    $app = require_once $basePath . '/bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $checks['laravel_boots'] = 'yes';
} catch (Throwable $e) {
    $checks['laravel_boots'] = 'NO';
    $checks['boot_error'] = $e->getMessage();
    $checks['boot_error_file'] = $e->getFile() . ':' . $e->getLine();
}

echo json_encode($checks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
