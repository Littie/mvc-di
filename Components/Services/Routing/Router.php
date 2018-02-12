<?php

declare(strict_types = 1);

namespace Components\Services\Routing;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class Router.
 */
class Router
{
    /**
     * Router constructor.
     */
    public function __construct()
    {
        echo 'Hello from router';
    }

    public function resolveRequest(Request $request)
    {
        return $request->getRequestUri();
    }

//    private $routes;
//
//    public function __construct()
//    {
//        $pathToRoutes = ROOT . '/config/routes.php';
//
//        $this->routes = include($pathToRoutes);
//    }
//
//    public function run()
//    {
//        $uri = $this->getURI();
//
//        if (array_key_exists($uri, $this->routes)) {
//            $pattern = $this->routes[$uri];
//
//            $segments = explode('@', $pattern);
//
//            $controller = $segments[0];
//            $action = $segments[1];
//
//            $controllerFile = ROOT . "/controllers/{$controller}.php";
//
//            if (file_exists($controllerFile)) {
//                require_once $controllerFile;
//
//                $object = new $controller();
//
//                return $object->$action();
//            }
//        }
//    }
//
//    private function getURI()
//    {
//        return trim($_SERVER['REQUEST_URI'], '/');
//    }
}
