<?php

namespace Phpfox\Kernel\Mail;


interface TransportInterface
{
    public function send($item);
}