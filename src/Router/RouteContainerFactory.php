<?php

namespace Phpfox\Kernel\Router;

class RouteContainerFactory
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