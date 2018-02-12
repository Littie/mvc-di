<?php

declare(strict_types = 1);

$app = new Components\Core\Application();

$app->register('kernel', \Components\Core\Kernel::class)
    ->addArgument(new \Components\Core\DI\Reference\Reference('router'));

return $app;
