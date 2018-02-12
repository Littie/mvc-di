<?php

declare(strict_types = 1);

namespace Components\Core\DI\Reference;

/**
 * Class AbstractReference.
 *
 * @package Components\Core\DI\Reference
 */
class Reference
{
    /**
     * @var
     */
    private $name;

    /**
     * AbstractReference constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get reference name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
