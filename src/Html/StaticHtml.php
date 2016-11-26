<?php

namespace Phpfox\Kernel\Html;


/**
 * Class StaticHtml
 *
 * @package Phpfox\Kernel\Html
 */
class StaticHtml implements HtmlElementInterface
{
    /**
     * @var array
     *
     *
     *
     */
    protected $data = [];

    /**
     * @param string $html
     *
     * @return $this
     */
    public function add($html)
    {
        $this->data[] = (string)$html;
        return $this;
    }

    /**
     * Clear all contents
     *
     * @return $this
     */
    public function clear()
    {
        $this->data = [];
        return $this;
    }

    /**
     * getHtml content
     *
     * @return string
     */
    public function getHtml()
    {
        return implode(PHP_EOL, $this->data);
    }

    public function __toString()
    {
        return implode(PHP_EOL, $this->data);
    }
}