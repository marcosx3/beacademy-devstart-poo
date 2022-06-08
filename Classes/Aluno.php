<?php 
declare(strict_types=1);

class Aluno {

    private string $nome;
    private string $cpf;

    public function __construct(string $nome,string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function __getName() 
    {
        return $this->nome;
    }
    public function __getCPF()
    {
        return $this->cpf;
    }
    public function __setName(string $name)
    {
        $this->nome = $name;
    }
    public function __setCPF(string $cpf)
    {
        $this->cpf = $cpf;
    }



}

?>