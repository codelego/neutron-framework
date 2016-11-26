<?php

namespace Phpfox\Kernel\Service;

/**
 * Interface FactoryInterface
 *
 * @package Phpfox\Kernel\Service
 */
interface ServiceFactoryInterface
{
    /**
     * Return any service type Service, Model, Table, Etc, ....
     *
     * @param ServiceManager $serviceManager
     * @param                $name
     * @param array          $options
     *
     * @return mixed
     */
    public function factory(
        ServiceManager $serviceManager,
        $name,
        $options = []
    );

    /**
     * Should cached this factory for reuse later.
     *
     * @return bool
     */
    public function shouldCache();
}