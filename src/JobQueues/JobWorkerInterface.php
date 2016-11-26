<?php
namespace Phpfox\Kernel\JobQueues;

interface JobWorkerInterface
{
    public function run();
}