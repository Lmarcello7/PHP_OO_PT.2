<?php

use App\Classes\Produto;

require_once "../src/Classes/Produto.php";

$prod = new Produto('CERVEJA');
$prod->detalhes('Cerveja');

var_dump($prod);