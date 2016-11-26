<?php
namespace Phpfox\Framework\JobQueues;

interface JobWorkerInterface
{
    public function run();
}