<?php

namespace App\Classes;

class Produto 
{
    public const NORMA = "1050";

    public string $titulo;

    public string $descricao = "Cerveja Brasileira";

    public float $preco;

    public string $codigoBarras;
    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function acessaCodigoBarras(): void
    {
        echo "<br>" . $this->codigoBarras;
    }
}