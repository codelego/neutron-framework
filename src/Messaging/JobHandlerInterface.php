<?php

namespace Phpfox\Kernel\Messaging;

interface JobHandlerInterface
{
    /**
     * Handle job
     */
    public function handle();
}