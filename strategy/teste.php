<?php

use Bruno\Strategy\CalculadoraDeFrete;
use Bruno\Strategy\Produto;
use Bruno\Strategy\RegiaoEntrega\RegiaoSudeste;

require './vendor/autoload.php';

$produto = new Produto(700, "Produto qualquer");

$calculadoraFrete = new CalculadoraDeFrete();

echo $calculadoraFrete->calculaFrete($produto, new RegiaoSudeste());