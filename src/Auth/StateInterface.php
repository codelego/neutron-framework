<?php

namespace Phpfox\Kernel\Auth;

/**
 * Interface StateInterface
 *
 * @package Phpfox\Kernel\Auth
 */
interface StateInterface
{
    public function read();

    public function write();
}