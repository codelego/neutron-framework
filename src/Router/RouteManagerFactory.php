<?php

namespace Phpfox\Kernel\Router;

/**
 * Class RouteManagerFactory
 *
 * @package Phpfox\Kernel\Router
 */
class RouteManagerFactory
{
    /**
     * @return RouteManager
     */
    public function factory()
    {
        return new RouteManager();
    }

    public function shouldCache()
    {
        return false;
    }
}