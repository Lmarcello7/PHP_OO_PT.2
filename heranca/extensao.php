<?php

require_once "../autoload/autoload-psr4.php";

$objeto = new App\Classes\Eletrodomestico;
$objeto->titulo = 'Geladeira';
$objeto->preco = 666.69;
// $obj->defineCodigoBarras('6969696969');
$obj->definirVoltagem(110);

echo "<pre>";
print_r($objeto);
echo "</pre>";