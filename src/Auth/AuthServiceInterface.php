<?php
namespace Phpfox\Kernel\Auth;

interface AuthServiceInterface
{
    /**
     * @return AuthResult
     */
    public function authenticate();
}