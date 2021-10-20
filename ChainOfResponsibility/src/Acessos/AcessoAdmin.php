<?php

namespace Bruno\ChainOfResponsibility\Acessos;

use Bruno\ChainOfResponsibility\Usuario;

class AcessoAdmin extends Acesso
{
    public function verificaPerfilLogin(Usuario $usuario): string
    {
        if($usuario->recuperaPerfil() == 'Admin') {
            return 'Login admin';
        }

        return $this->proximaRegraDeAcesso->verificaPerfilLogin($usuario);
    }
}