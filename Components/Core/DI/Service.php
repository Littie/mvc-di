<?php

declare(strict_types = 1);

namespace Components\Core\DI;

/**
 * Class Definition.
 *
 * @package Components\Core\DI
 */
class Service
{
    /**
     * @var $class
     */
    protected $class;

    /**
     * @var array $arguments
     */
    protected $arguments;

    /**
     * Service constructor.
     *
     * @param $class
     * @param array|null $arguments
     */
    public function __construct($class, array $arguments = null)
    {
        $this->class = $class;
        $this->arguments = $arguments;
    }

    /**
     * Add argument.
     *
     * @param $argument
     */
    public function addArgument($argument)
    {
        $this->arguments[] = $argument;
    }

    /**
     * Check argument.
     *
     * @return bool
     */
    public function hasArguments()
    {
        return !empty($this->arguments);
    }

    /**
     * Get arguments.
     *
     * @return array|null
     */
    public function getArguments(): ?array
    {
        return $this->arguments;
    }

    /**
     * Get class.
     *
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }
}
