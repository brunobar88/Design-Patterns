<?php

namespace Bruno\ChainOfResponsibility;

use Bruno\ChainOfResponsibility\Acessos\AcessoAdmin;
use Bruno\ChainOfResponsibility\Acessos\AcessoComun;
use Bruno\ChainOfResponsibility\Acessos\AcessoMotorista;

class Login 
{
    public function efetuaLogin(Usuario $usuario)
    {
        $cadeiaDeVerificacao = new AcessoAdmin(
            new AcessoMotorista(
                new AcessoComun(null)
            )
        );

        return $cadeiaDeVerificacao->verificaPerfilLogin($usuario);
    }
}