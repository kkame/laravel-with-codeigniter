<?php

## load autoload
require_once __DIR__.'/../vendor/autoload.php';

## load laravel
require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

## load codeigniter
require_once __DIR__ . '/ci.php';