<?php

namespace Bruno\ChainOfResponsibility\Acessos;

use Bruno\ChainOfResponsibility\Usuario;

class AcessoComun extends Acesso
{
    public function verificaPerfilLogin(Usuario $usuario): string 
    {
        return 'login Comun';
    }
}