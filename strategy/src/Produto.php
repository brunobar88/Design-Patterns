<?php

namespace Bruno\Strategy;

class Produto
{
    public function __construct(
        private float $valor,
        private string $descricao
    ) {}

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}