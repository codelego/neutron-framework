<?php
namespace Phpfox\Kernel\Controller;

interface ControllerInterface
{
    /**
     * @param string $action
     *
     * @return mixed
     */
    public function resolve($action);
}