<?php

namespace Phpfox\Service;


/**
 * Class ServiceManager
 *
 * @package Phpfox\Service
 */
class ServiceManager
{
    /**
     * @var ServiceManager
     */
    private static $singleton;
    /**
     * @var array
     */
    protected $map = [];
    /**
     * @var array
     */
    protected $container = [];

    /**
     * @return ServiceManager|static
     */
    public static function instance()
    {
        if (null == self::$singleton) {
            self::$singleton = new static();
            self::$singleton->reset();
        }

        return self::$singleton;
    }

    public function reset()
    {
        $this->map = config('services');
        $this->set('services', $this);
    }

    /**
     * @param string $id
     * @param mixed  $service
     *
     * @return $this
     */
    public function set($id, $service)
    {
        $this->container[$id] = $service;

        return $this;
    }

    /**
     * Check has config
     *
     * @param string $id
     *
     * @return bool
     */
    public function has($id)
    {
        return isset($this->map[$id]);
    }

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function get($id)
    {
        return isset($this->container[$id]) ? $this->container[$id]
            : $this->container[$id] = $this->build($id);
    }

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function build($id)
    {
        if (!isset($this->map[$id])) {
            throw new \InvalidArgumentException("There are no item '{$id}'.");
        }

        $ref = $this->map[$id];

        $factory = array_shift($ref);

        if (is_string($factory)) {
            return call_user_func_array([
                new $factory(),
                'factory',
            ], $ref);
        }

        $class = array_shift($ref);

        if (empty($ref)) {
            return new $class();
        }

        return (new \ReflectionClass($class))->newInstanceArgs($ref);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function delete($id)
    {
        if (isset($this->container[$id])) {
            unset($this->container[$id]);
        }

        return $this;
    }

    /**
     * @link http://php.net/manual/en/language.oop5.magic.php#object.sleep
     * @return array
     */
    public function __sleep()
    {
        return ['map'];
    }

    /**
     * @link http://php.net/manual/en/language.oop5.magic.php#object.wakeup
     */
    public function __wakeup()
    {

    }
}