<?php
namespace Phpfox\Kernel\Storage;

interface StorageServiceFactoryInterface
{
    /**
     * @param array $options
     *
     * @throws StorageServiceException
     */
    public function factory($options);
}