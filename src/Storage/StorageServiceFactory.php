<?php

namespace Phpfox\Framework\Storage;


class StorageServiceFactory
{
    public function factory($options)
    {
        $driver = config('storage.drivers', $options['driver']);
        return new $driver($options);
    }
}