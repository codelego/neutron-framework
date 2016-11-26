<?php

namespace Phpfox\Kernel\Messaging;


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