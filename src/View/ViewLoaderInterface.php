<?php

namespace Phpfox\Kernel\View;


interface ViewLoaderInterface
{
    /**
     * @param string $name
     *
     * @return string|null
     */
    public function load($name);

}