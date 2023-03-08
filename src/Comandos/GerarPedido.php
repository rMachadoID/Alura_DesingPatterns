<?php

namespace Alura\DesignPattern\GerarPedido;

use Alura\DesignPattern\Comandos\Comandos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPatterns\Pedido;

class GerarPedido implements Comandos
{

    /**
     * [__construct description]
     *
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

    public function GeraPedido()
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroDeItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia e-mail para cliente" . PHP_EOL;
    }
}
