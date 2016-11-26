<?php
namespace Phpfox\Framework\Auth;

interface AuthServiceInterface
{
    /**
     * @return AuthResult
     */
    public function authenticate();
}