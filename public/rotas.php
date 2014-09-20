<?php

use SON\Form\Form;
use SON\Form\Elements\Input;

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota_ = explode('/',$dados_url['path'],2);
$rota = str_replace('rotas.php','',$rota_[1]);

$inputText  = new Input(['type' => 'text']);

$form       = new Form();

$form->openTag();
$form->add($inputText);
$form->closeTag();

$form->render();

