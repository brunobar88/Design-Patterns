<?php 

namespace Bruno\Strategy;

use Bruno\Strategy\RegiaoEntrega\RegiaoEntrega;

class CalculadoraDeFrete 
{
    public function calculaFrete(Produto $produto, RegiaoEntrega $regiaoEntrega): float
    {
        return $regiaoEntrega->calculaFrete($produto);
    }
}