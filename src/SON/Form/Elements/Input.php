<?php

namespace SON\Form\Elements;
use SON\Form\Interfaces\ElementsInterface;

class Input implements ElementsInterface
{
    public function __construct($paramElementArray)
    {
        $this->element = $paramElementArray;
    }
    public function add()
    {
        return '<input type="'.$this->element['type'].'" value="'.$this->element['value'].'"
         class="'.$this->element['class'].'">';
    }
}