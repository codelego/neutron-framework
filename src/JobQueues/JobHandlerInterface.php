<?php

namespace Phpfox\Kernel\JobQueues;

interface JobHandlerInterface
{
    /**
     * Handle job
     */
    public function handle();
}