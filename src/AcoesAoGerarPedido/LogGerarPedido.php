<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;

class LogGerarPedido
{
    public function executaAcao(Pedido $pedido)
    {
        echo "Gerando log de criação de pedido";
    }
}