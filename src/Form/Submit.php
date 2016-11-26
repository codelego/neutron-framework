<?php

namespace Phpfox\Kernel\Form;

/**
 * Class Submit
 *
 * @package Phpfox\Kernel\Form
 */
class Submit extends Element implements FieldInterface
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