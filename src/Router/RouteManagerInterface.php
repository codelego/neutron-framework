<?php
namespace Phpfox\Kernel\Router;

interface RouteManagerInterface
{
    /**
     * @param string $id
     *
     * @return bool
     */
    public function has($id);

    /**
     * @param string $id
     * @param array  $params
     *
     * @return $this
     */
    public function add($id, $params);

    /**
     * @param string $id
     * @param array  $params
     *
     * @return string
     */
    public function getUrl($id, $params = []);

    /**
     * @param  string $id
     *
     * @return RouteInterface
     * @throws RouteException
     */
    public function get($id);

    /**
     * @param string $path
     * @param string $host
     * @param string $method
     * @param string $protocol
     *
     * @return RouteResult
     */
    public function resolve($path, $host, $method, $protocol);
}