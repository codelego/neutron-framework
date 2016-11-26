<?php

namespace Phpfox\Framework\View;


/**
 * Class PhpTemplate
 *
 * @package Phpfox\Framework\View
 */
class PhpTemplate implements ViewRenderInterface
{
    /**
     * @var array
     */
    protected $map = [];

    public function render($__name_, $__vars_)
    {
        $__template_ = $this->load($__name_);

        if (!$__template_) {
            return '';
        }

        ob_start();

        extract($__vars_);

        unset($__vars_);

        /** @noinspection PhpIncludeInspection */
        include $__template_;

        return ob_get_clean();
    }

    public function load($name)
    {
        if (!isset($this->map[$name])) {
            throw new ViewException("Can not resolve path of '{$name}'");
        }

        return PHPFOX_DIR . DS . $this->map[$name];
    }
}