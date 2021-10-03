<?php

namespace Bruno\Strategy\RegiaoEntrega;

use Bruno\Strategy\Produto;

class RegiaoSul implements RegiaoEntrega
{
    public function calculaFrete(Produto $produto): float
    {
        return $produto->getValor() + 10;
    }
}
