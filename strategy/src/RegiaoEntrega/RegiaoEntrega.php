<?php

namespace Bruno\Strategy\RegiaoEntrega;

use Bruno\Strategy\Produto;

interface RegiaoEntrega
{
    public function calculaFrete(Produto $produto): float;
}