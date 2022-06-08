<?php 

declare(strict_types=1);

class Professor {
    private string $nome;
    private float $salario;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
    public function __getNome(){
        return $this->nome;
    }
    public function __setNome(string $nome){
        $this->nome = $nome;
    }

    public function __getSalario(){
        return $this->salario;
    }
    public function __setSalario(string $salario){
        $this->salario = $salario;
    }
}

?>