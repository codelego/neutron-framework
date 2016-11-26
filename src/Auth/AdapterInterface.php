<?php
namespace Phpfox\Kernel\Auth;

interface AdapterInterface
{
    /**
     * @return AuthResult
     */
    public function authenticate();
}