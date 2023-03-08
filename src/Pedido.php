<?php

namespace Alura\DesignPatterns;

use Alura\DesignPattern;
use Alura\DesignPattern\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}