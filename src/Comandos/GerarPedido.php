<?php

namespace Alura\DesignPattern\GerarPedido;

use Alura\DesignPattern\Comandos\Comandos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPatterns\Pedido;

class GerarPedido
{

    /**
     * @param   float   $valorOrcamento [$valorOrcamento description]
     * @param   int     $numeroDeItens  [$numeroDeItens description]
     * @param   string  $nomeCliente    [$nomeCliente description]
     *
     * @return  [type]                  [return description]
     */

    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroDeItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

    
    /**
     * @return  float
     */
    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    /**
     * @return  int
     */
    public function getNumeroDeItens(): int
    {
        return $this->numeroDeItens;
    }

    /**
     * @return  string
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }
}
