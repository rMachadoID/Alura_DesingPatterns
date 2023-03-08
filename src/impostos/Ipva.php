<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\ImpostoComDuasAliquotas as ImpostosImpostoComDuasAliquotas;
use Alura\DesignPattern\Orcamento;

class Ipva extends ImpostosImpostoComDuasAliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.004;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
