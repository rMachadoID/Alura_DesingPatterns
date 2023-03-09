<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;

class CriarPedidoNoBanco
{
    public function executaAcao(Pedido $pedido)
    {
        echo "Salvando pedido no banco de dados";
    }
}