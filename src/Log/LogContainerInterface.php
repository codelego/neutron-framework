<?php
namespace Phpfox\Kernel\Log;


/**
 * Class LogContainer
 *
 * @package Phpfox\Kernel\Log
 */
interface LogContainerInterface extends LoggerInterface
{
    /**
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function add(LoggerInterface $logger);


}