<?php

namespace Phpfox\Kernel\JobQueues;

class LocalJobQueues implements JobQueuesInterface
{

    /**
     * @var string
     */
    protected $name = 'phpfox';

    public function __construct()
    {
    }

    public function addMessage(
        $message,
        $timeout = 0,
        $expiresAfter = 0,
        $delayIn = 0
    ) {
    }

    public function deleteMessage($reservationId)
    {
    }

    public function getMessages($limit = 5)
    {
    }

    public function getMessage()
    {

        return [
            'queueName'     => $this->getName(),
            'messageId'     => $item['message_id'],
            'messageBody'   => $item['message_data'],
            'reservationId' => $item['message_id'],
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function bury()
    {
        // TODO: Implement bury() method.
    }

    /**
     * {@inheritdoc}
     */
    public function kick()
    {
        // TODO: Implement kick() method.
    }


    public function release()
    {
        // try to close database connection example.
    }
}