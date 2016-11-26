<?php

namespace Phpfox\Framework\Mail;


interface TransportInterface
{
    public function send($item);
}