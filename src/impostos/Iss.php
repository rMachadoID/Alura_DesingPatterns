<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function CalculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
