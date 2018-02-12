<?php

declare(strict_types = 1);

namespace Components\Core;

use Components\Core\DI\Container;
use Components\Services\Routing\RouteServiceProvider;

/**
 * Class Application.
 *
 * @package Components\Core
 */
class Application extends Container
{
    /**
     * Application constructor.
     */
    public function __construct()
    {
        /** Load base services */
        $this->loadBaseServices();
    }

    /**
     * Load base services.
     */
    private function loadBaseServices()
    {
        $this->registerService(new RouteServiceProvider($this));
    }

    /**
     * Register service.
     *
     * @param $provider
     */
    private function registerService($provider)
    {
        $provider->register();
    }
}
