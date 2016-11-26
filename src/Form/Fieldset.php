<?php

namespace Phpfox\Framework\Form;

class Fieldset extends Element implements CollectionInterface
{
    public function getElements()
    {
        return [];
    }

    public function addElement($params)
    {
        return $this;
    }
}