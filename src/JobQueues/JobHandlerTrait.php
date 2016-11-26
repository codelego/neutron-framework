<?php

namespace Phpfox\Framework\JobQueues;

/**
 * Class JobHandlerTrait
 *
 * @package Phpfox\Framework\JobQueues
 */
trait JobHandlerTrait
{
    /**
     * @var string
     */
    protected $queueName = 'phpfox';

    /**
     * @var string
     */
    protected $reservationId;

    /**
     * @var string
     */
    protected $messageId;

    /**
     * @var string
     */
    protected $data;

    /**
     * JobAbstract constructor.
     *
     * @param string $queueName
     * @param string $reservationId
     * @param string $messageId
     * @param array  $data
     */
    public function __construct($queueName, $reservationId, $messageId, $data)
    {
        $this->queueName = $queueName;
        $this->reservationId = $reservationId;
        $this->messageId = $messageId;
        $this->data = $data;
    }

    /**
     * default success
     *
     * @see JobQueuesInterface::deleteMessage()
     */
    public function dequeue()
    {
    }

    /**
     * turn it failure by do nothing.
     */
    public function failure()
    {

    }
}