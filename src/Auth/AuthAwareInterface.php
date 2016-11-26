<?php

namespace Phpfox\Kernel\Auth;

interface AuthAwareInterface
{

    public function read();


    public function write($id, $token);
}