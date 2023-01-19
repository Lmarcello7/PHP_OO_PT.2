<?php

namespace App\Classes;

use App\Classes\Produto;
class Microondas extends Produto
{
    public int $potencia;
    
    public function definirPotencia(int $potencia): void
    {
        $this->potencia = $potencia;
    }
}