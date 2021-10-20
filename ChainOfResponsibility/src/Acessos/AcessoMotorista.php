<?php

namespace Bruno\ChainOfResponsibility\Acessos;

use Bruno\ChainOfResponsibility\Usuario;

class AcessoMotorista extends Acesso
{
    public function verificaPerfilLogin(Usuario $usuario): string
    {
        if ($usuario->recuperaIdade() > 18 && $usuario->recuperaPerfil() == 'Motorista') {
            return 'Login Motorista';
        }

        return $this->proximaRegraDeAcesso->verificaPerfilLogin($usuario);
    }
}