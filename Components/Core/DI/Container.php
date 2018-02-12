<?php

declare(strict_types = 1);

namespace Components\Core\DI;

use App\Exceptions\ServiceNotFoundException;
use Components\Core\DI\Reference\Reference;
use Psr\Container\ContainerInterface;

/**
 * Class Container.
 *
 * @package Core\DI
 */
class Container implements ContainerInterface
{
    /**
     * Application services.
     *
     * @var array $services
     */
    protected $services = [];

    /**
     * @var array $loaded
     */
    protected $loaded = [];

    /**
     * @var array $arguments
     */
    protected $arguments = [];

    /**
     * {@inheritdoc}
     */
    public function get($name)
    {
        if (!$this->has($name)) {
            throw new ServiceNotFoundException("Service '{$name}' not found");
        }

        if (!isset($this->loaded[$name])) {
            $this->loaded[$name] = $this->createService($name);
        }

        return $this->loaded[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function has($name): bool
    {
        return array_key_exists($name, $this->services);
    }

    /**
     * Register service.
     *
     * @param $name
     * @param $class
     *
     * @return Service
     */
    public function register($name, $class): Service
    {
        return $this->setService($name, new Service($class));
    }

    /**
     * Create service class.
     *
     * @param $name
     *
     * @return mixed
     * @throws \ReflectionException
     */
    private function createService($name)
    {
        /** @var Service $entry */
        $entry = $this->services[$name];

        $arguments = $entry->hasArguments() ? $this->resolveArguments($entry->getArguments()) : [];

        $reflector = new \ReflectionClass($entry->getClass());

        $service = $reflector->newInstanceArgs($arguments);

        return $service;
    }

    /**
     * Resolve arguments.
     *
     * @param array $definitions
     *
     * @return array
     */
    private function resolveArguments(array $definitions): array
    {
        $arguments = [];

        foreach ($definitions as $definition) {
            if ($definition instanceof Reference) {
                $serviceName = $definition->getName();

                try {
                    $arguments[] = $this->get($serviceName);
                } catch (ServiceNotFoundException $e) {
                    //todo: Do thms
                    echo $e->getMessage();
                }
            } else {
                $arguments[] = $definition;
            }
        }

        return $arguments;
    }

    /**
     * Set service.
     *
     * @param $name
     * @param Service $service
     *
     * @return Service
     */
    private function setService($name, Service $service): Service
    {
        return $this->services[$name] = $service;
    }
}
