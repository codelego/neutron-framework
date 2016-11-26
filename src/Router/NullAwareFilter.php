<?php

namespace Phpfox\Framework\Router;

/**
 * Class NullAwareFilter
 *
 * @package Phpfox\Framework\Router
 */
class NullAwareFilter implements FilterInterface
{
    public function filter(RouteResult $result)
    {
        return true;
    }

}