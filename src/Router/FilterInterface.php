<?php

namespace Phpfox\Framework\Router;


interface FilterInterface
{
    public function filter(RouteResult $result);
}