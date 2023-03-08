<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\MaisDeCincoItens;
use Alura\DesignPattern\Descontos\MaisDeQuinhetosReais;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescotos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos =
            new MaisDeCincoItens(
                new MaisDeQuinhetosReais(
                    new SemDesconto()
                )
            );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
