<?php

namespace Phpfox\Framework\Auth;

interface AuthStateInterface
{
    public function read();

    public function write();
}