<?php

// public/index.php, api/index.php, or similar
// This is the new entry point for Vercel at `api/index.php`

define('LARAVEL_START', microtime(true));

// Ensure the paths are correct relative to this file in the `api` directory.
// We are going one level up to the project root.

// Register the Composer auto loader.
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response); 