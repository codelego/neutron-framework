<?php

namespace Phpfox\Framework\I18n;


interface TextDomainInterface
{

    /**
     * @param string $id
     * @param int    $number
     *
     * @return string
     */
    public function textPlural($id, $number = 0);

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function text($id);
}