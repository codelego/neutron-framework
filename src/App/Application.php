<?php

namespace Phpfox\Framework\App;

use Phpfox\Framework\Controller\ControllerInterface;
use Phpfox\Framework\Router\RouteManagerInterface;
use Phpfox\Framework\View\ViewModel;

class Application
{
    /**
     * @var bool
     */
    protected $resolved = false;

    /**
     * @var string
     */
    protected $controller = '';

    /**
     * @var string
     */
    protected $action = 'index';

    public function setController($controller)
    {
        $this->controller = $controller;
        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function getActionName()
    {
        return preg_replace('/\W+/', '_', _deflect(str_replace('Controller', '',
            $this->controller . '.' . $this->action)));
    }

    /**
     * @param string $controller
     * @param string $action
     *
     * @return bool
     */
    public function forward($controller, $action)
    {
        $this->controller = $controller;
        $this->resolved = false;
        $this->action = $action;

        return true;
    }


    public function resolve($path, $host, $method, $protocol)
    {
        $loop = 5;
        $lastResolveContent = null;

        /** @var RouteManagerInterface $routing */
        $routing = \service('router');

        $routing->resolve($path, $host, $method, $protocol);

        $result = $routing->resolve($path, $host, $method, $protocol);

        $this->controller = $result->getControllerName();
        $this->action = $result->getActionName();

        /** @var ControllerInterface $controller */
        $controller = new $this->controller;

        $lastResolveContent = null;

        do {
            $this->resolved = true;

            /** @var ViewModel $response */
            $lastResolveContent = $controller->resolve($this->action);

        } while ($this->resolved == false and --$loop > 0);


        echo service('responder')->setContent($lastResolveContent)->response();
    }
}