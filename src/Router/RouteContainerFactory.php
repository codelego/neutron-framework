<?php

namespace Phpfox\Framework\Router;

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