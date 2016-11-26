<?php

namespace Phpfox\Kernel\Auth;

interface AuthStateInterface
{
    public function read();

    public function write();
}