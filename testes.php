<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

// Testando Calculadora de impostos
// $calculadora = new CalculadoraDeImpostos();
// $orcamento = new Orcamento();
// $orcamento->valor = 100;
// echo $calculadora->calcula($orcamento, new Iss);


$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 7;

echo $calculadora->calculaDescotos($orcamento);
