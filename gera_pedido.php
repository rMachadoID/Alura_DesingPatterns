<?php

use Alura\DesignPattern\GerarPedido;

require 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];


$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);


echo "Cria pedido no banco de dados" . PHP_EOL;
echo "Envia e-mail para cliente" . PHP_EOL;
