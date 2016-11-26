<?php

namespace Phpfox\Kernel\Router;

/**
 * Class NullAwareFilter
 *
 * @package Phpfox\Kernel\Router
 */
class NullAwareFilter implements FilterInterface
{
    public function filter(RouteResult $result)
    {
        return true;
    }

}