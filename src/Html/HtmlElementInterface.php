<?php

namespace Phpfox\Kernel\Html;


interface HtmlElementInterface
{
    /**
     * @return string
     */
    public function getHtml();

    /**
     * Reset data
     */
    public function clear();
}