<?php
// api/index.php
require_once __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle the request
$response = $app->handle(
    $request = \Illuminate\Http\Request::capture()
);

// Send response
$response->send();