<?php

namespace Phpfox\Framework\JobQueues;

/**
 * Class Worker
 *
 * @package Phpfox\Framework\JobQueues
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