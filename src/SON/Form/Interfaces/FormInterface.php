<?php

namespace SON\Form\Interfaces;
use SON\Form\Interfaces\ElementsInterface;


interface FormInterface {

    public function add(ElementsInterface $element);
    public function openTag();
    public function closeTag();
}