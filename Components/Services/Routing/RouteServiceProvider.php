<?php

declare(strict_types = 1);

namespace Components\Services\Routing;

use Components\Core\ServiceProvider;

/**
 * Class RouteServiceProvider.
 *
 * @package Components\Services\Routing
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return mixed|void
     */
    public function register()
    {
        $this->registerRoute();
    }

    /**
     * Register router service.
     */
    private function registerRoute()
    {
        $this->app->register('router', Router::class);
    }
}
