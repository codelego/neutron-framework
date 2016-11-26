<?php

namespace Phpfox\Kernel\JobQueues;

/**
 * Class Worker
 *
 * @package Phpfox\Kernel\JobQueues
 */
class JobWorker implements JobWorkerInterface
{
    /**
     * @var string
     */
    protected $queueName;

    /**
     * @var int
     */
    protected $maxNumberOfJobs = 5;

    /**
     * Worker constructor.
     *
     * @param $queueName
     */
    public function __construct($queueName)
    {
        $this->queueName = $queueName;
    }

    public function run()
    {

    }
}