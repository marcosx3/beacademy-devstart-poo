<?php

interface Validar {

    public function validarNome(string $nome):void;
    public function validarDoc(string $documento): void;
    public function validarCodigoPostal(string $codigoPostal): void;
}


?>