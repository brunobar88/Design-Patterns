<?php

namespace Bruno\ChainOfResponsibility;

class Usuario {
    public function __construct(
        private int $idade,
        private string $perfil
    ) 
    {}

    public function recuperaIdade()
    {
        return $this->idade;
    }

    public function recuperaPerfil()
    {
        return $this->perfil;
    }
}

