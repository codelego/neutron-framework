<?php

namespace Phpfox\Framework\Form;

/**
 * Class Text
 *
 * @package Phpfox\Framework\Form
 */
class Text extends Element implements FieldInterface
{
    /**
     * @inheritdoc
     */
    public function setValue($value)
    {
        $this->setAttribute('value', (string)$value);
        $this->value = $value;
        return $this;
    }
}