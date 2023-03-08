<?php

namespace Alura\DesignPatterns\EstadoOrcamento;

use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException(
            message: 'Um orçamento reprovado não pode receber desconto'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
