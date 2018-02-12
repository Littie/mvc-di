<?php

declare(strict_types = 1);


namespace App\Exceptions;

use Psr\Container\ContainerExceptionInterface;

/**
 * Class ContainerException.
 *
 * @package App\Exceptions
 */
class ContainerException extends \Exception implements ContainerExceptionInterface
{

}
