<?php

namespace Phpfox\Kernel\Form;


interface RendererInterface
{
    /**
     * @param $element
     *
     * @return string
     */
    public function render($element);
}