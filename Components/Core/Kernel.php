<?php

declare(strict_types = 1);

namespace Components\Core;

use Components\Services\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Kernel.
 *
 * @package Components\Core
 */
class Kernel
{
    /**
     * @var Router $router
     */
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Handle request and return response.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request): Response
    {
        return new Response($this->router->resolveRequest($request));
    }
}
