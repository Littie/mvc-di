<?php

declare(strict_types = 1);


namespace Components\Core;


abstract class ServiceProvider
{
    /**
     * @var Application $app
     */
    protected $app;

    /**
     * ServiceProvider constructor.
     *
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Register services.
     *
     * @return mixed
     */
    abstract public function register();
}
