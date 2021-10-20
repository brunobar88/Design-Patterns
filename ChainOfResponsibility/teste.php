<?php

use Bruno\ChainOfResponsibility\Login;
use Bruno\ChainOfResponsibility\Usuario;

require './vendor/autoload.php';


$usuario = new Usuario(22, 'Motorista');

$login = new Login();

echo $login->efetuaLogin($usuario);