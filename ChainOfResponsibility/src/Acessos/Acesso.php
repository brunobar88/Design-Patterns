<?php 

namespace Bruno\ChainOfResponsibility\Acessos;

use Bruno\ChainOfResponsibility\Usuario;

abstract class Acesso 
{
    public function __construct(
        protected ?Acesso $proximaRegraDeAcesso
    )
    {}

    abstract public function verificaPerfilLogin(Usuario $usuario): string;
}