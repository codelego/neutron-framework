<?php

namespace Phpfox\Kernel\Storage;


class StorageManagerFactory
{
    function factory()
    {
        return new StorageManager([
            'default' => 1,
            'factory' => new StorageServiceFactory(),
            'map'     => [
                1 => [
                    'driver'   => LocalStorageService::class,
                    'basePath' => null,
                    'baseUrl'  => null,
                ],
            ],
        ]);
    }
}