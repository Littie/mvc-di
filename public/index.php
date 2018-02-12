<?php

declare(strict_types = 1);

/********************
 * FRONT CONTROLLER *
 *******************/

// 1. Enable error reporting.

ini_set('display_errors', '1');
error_reporting(E_ALL);

// 2. Include autoload.

require_once '../vendor/autoload.php';

// 3. Init Service Container.

/** @var \Components\Core\DI\Container $app */
$app = require_once '../bootstrap/app.php';

// 4. Make kernel.

try {
    $kernel = $app->get('kernel');
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

// 5. Get Response.

$response = $kernel->handle(\Symfony\Component\HttpFoundation\Request::createFromGlobals());

$response->send();

// 5. Additional (Middleware, ...)
$sopt = '';

