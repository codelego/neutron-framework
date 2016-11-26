<?php

namespace Phpfox\Framework\JobQueues;


class SampleJobHandler implements JobHandlerInterface
{
    use JobHandlerTrait;

    /**
     * do nothing
     */
    public function handle()
    {
        // logic code here
        $this->dequeue();
    }
}