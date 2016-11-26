<?php

namespace Phpfox\Framework\Form;


interface RendererInterface
{
    /**
     * @param $element
     *
     * @return string
     */
    public function render($element);
}