<?php

namespace Phpfox\Kernel\App;

use Phpfox\Kernel\Controller\ControllerInterface;
use Phpfox\Kernel\Router\RouteManagerInterface;
use Phpfox\Kernel\View\ViewModel;

/**
 * Class Application
 *
 * @package Phpfox\Kernel\Mvc
 */
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
        $content = null;

        /** @var RouteManagerInterface $routing */
        $routing = \service('router');

        $routing->resolve($path, $host, $method, $protocol);

        $result = $routing->resolve($path, $host, $method, $protocol);

        $this->controller = $result->getControllerName();
        $this->action = $result->getActionName();

        /** @var ControllerInterface $controller */
        $controller = new $this->controller;

        /** @var ViewModel $response */
        $response = $controller->resolve($this->action);

        do {
            $this->resolved = true;
            $content = (new $this->controller())->resolve($this->action);
        } while ($this->resolved == false and --$loop > 0);

        echo service('responder')->setContent($content)->response();
    }
}