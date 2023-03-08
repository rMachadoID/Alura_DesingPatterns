<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\ImpostoComDuasAliquotas as ImpostosImpostoComDuasAliquotas;
use Alura\DesignPattern\Orcamento;

class Iptu extends ImpostosImpostoComDuasAliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}
