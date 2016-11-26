<?php

namespace Phpfox\Kernel\I18n;

/**
 * Class TextDomain
 *
 * @package Phpfox\Kernel\I18n
 */
class TextDomain implements TextDomainInterface
{

    /**
     * @var string
     */
    protected $messages = [];

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    protected $domain;


    public function textPlural($id, $number = 0)
    {
        return isset($this->messages[$id]) ? $this->messages : $id;
    }

    public function text($id)
    {

    }

    function __sleep()
    {
        return ['messages', 'locale', 'domain'];
    }
}