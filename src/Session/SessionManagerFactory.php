<?php

namespace Phpfox\Framework\Session;


class SessionManagerFactory
{
    public function factory()
    {
        return new SessionManager([
            'driver'   => 'files',
            'lifetime' => 86400,
        ]);
    }
}