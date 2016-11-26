<?php
namespace Phpfox\Framework\Controller;

interface ControllerInterface
{
    /**
     * @param string $action
     *
     * @return mixed
     */
    public function resolve($action);
}