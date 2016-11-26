<?php

namespace Phpfox\Framework\Html;

/**
 * Class HeadLink
 *
 * @package Phpfox\Framework\Html
 */
class HeadLink implements HtmlElementInterface
{
    use HtmlSimpleTrait;

    /**
     * @param string $key
     * @param string $href
     * @param array  $props
     *
     * @return $this
     */
    public function add($key, $href, $props = [])
    {
        if ($this->ensureKey($href)) {
            return $this;
        }

        $props['href'] = $href;
        $this->_append($key, $props);

        return $this;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        $response = [];
        foreach ($this->data as $attributes) {
            if (empty($attributes)) {
                continue;
            }
            $response[] = '<link ' . _attrize($attributes) . '/>';
        }

        return implode(PHP_EOL, $response);
    }
}