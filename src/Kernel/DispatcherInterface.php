<?php

interface DispatcherInterface
{
    /**
     * @param string $action
     *
     * @return mixed
     */
    public function dispatch($action);
}