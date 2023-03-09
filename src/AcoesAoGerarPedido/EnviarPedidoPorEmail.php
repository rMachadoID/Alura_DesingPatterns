<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPatterns\Pedido;

class EnviarPedidoPorEmail
{
    public function executaAcao(Pedido $pedido)
    {
        echo "Enviando email de pedido gerado";
    }
}