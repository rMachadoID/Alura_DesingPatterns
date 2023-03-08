<?php

namespace Alura\DesignPatterns\EstadoOrcamento;

use Alura\DesignPattern\Orcamento;

class Finalizado
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(message: 'Um orçamento finalizado não pode receber desconto');
    }
}
