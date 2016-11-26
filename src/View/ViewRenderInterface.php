<?php

namespace Phpfox\Kernel\View;


interface ViewRenderInterface
{

    /**
     * @param $__name_
     * @param $__vars_
     *
     * @return mixed
     */
    public function render($__name_, $__vars_);
}