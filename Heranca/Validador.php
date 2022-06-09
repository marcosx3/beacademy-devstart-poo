<?php 
declare(strict_types=1);

class Validador {
    public static function validar(string $cpf){
        if(strlen($cpf) != 11){
            die('Ops,CPF INVALIDO!');
        }
    }
}


?>