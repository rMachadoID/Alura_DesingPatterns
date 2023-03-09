<?php

namespace Alura\DesignPatterns\Comandos;

use Alura\DesignPattern\GerarPedido\GerarPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPatterns\Pedido;

class GerarPedidoHandler
{
    public function __construct(/* PedidosRepository, MailService */)
    {

    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo "Cria pedido no banco de dados" . PHP_EOL;

        // MailService
        echo "Envia e-mail para cliente" . PHP_EOL;

        // Log
        echo "Envia log de criação de pedido" . PHP_EOL;
    
    }
}