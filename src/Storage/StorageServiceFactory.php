<?php

namespace Phpfox\Kernel\Storage;


class StorageServiceFactory implements StorageServiceFactoryInterface
{
    public function factory($options)
    {
        $driver = config('storage.drivers', $options['driver']);
        return new $driver($options);
    }
}