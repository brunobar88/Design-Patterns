<?php

namespace Bruno\Strategy\RegiaoEntrega;

use Bruno\Strategy\Produto;

class RegiaoSudeste implements RegiaoEntrega
{
    public function calculaFrete(Produto $produto): float
    {
        return $produto->getValor() + 15;
    }
}