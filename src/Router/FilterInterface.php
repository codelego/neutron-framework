<?php

namespace Phpfox\Kernel\Router;


interface FilterInterface
{
    public function filter(RouteResult $result);
}