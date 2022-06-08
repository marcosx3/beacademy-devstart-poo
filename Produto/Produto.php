<?php

declare(strict_types=1);

class Produto {

    private string $nome;
    private float $valor;

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function setValor(float $valor) {
        if($valor < 0){
            die('Valor não pode ser negativo.');

        }
        $this->valor = $valor;
    }

}