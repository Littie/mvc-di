<?php

declare(strict_types = 1);

namespace App\Exceptions;

use Psr\Container\NotFoundExceptionInterface;

/**
 * Class ServiceNotFoundException.
 *
 * @package App\Exceptions
 */
class ServiceNotFoundException extends \Exception implements NotFoundExceptionInterface
{
    //
}
