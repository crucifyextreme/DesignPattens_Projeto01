<?php

namespace SON\Form;
use SON\Form\Interfaces\FormInterface;
use SON\Form\Interfaces\ElementsInterface;

class Form implements FormInterface{

    public $openForm;
    public $closeForm;
    public $elementForm;


    public function add(ElementsInterface $element)
    {
       $this->elementForm = $element->add();
    }
    public function openTag()
    {
        return $this->openForm =  '<form>';
    }
    public function closeTag()
    {
        return $this->closeForm = '</form>';
    }
    public function render()
    {
        echo $this->openForm;
        echo $this->elementForm;
        echo $this->closeForm;
    }
}