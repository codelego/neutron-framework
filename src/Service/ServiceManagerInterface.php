<?php
namespace Phpfox\Framework\Service;

interface ServiceManagerInterface
{
    /**
     * @param string $id
     * @param mixed  $service
     *
     * @return $this
     */
    public function set($id, $service);

    /**
     * Check has config
     *
     * @param string $id
     *
     * @return bool
     */
    public function has($id);

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function build($id);
}