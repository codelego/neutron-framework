<?php

namespace Phpfox\Framework\JobQueues;

interface JobHandlerInterface
{
    /**
     * Handle job
     */
    public function handle();
}