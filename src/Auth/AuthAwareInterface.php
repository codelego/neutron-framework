<?php

namespace Phpfox\Framework\Auth;

interface AuthAwareInterface
{

    public function read();


    public function write($id, $token);
}