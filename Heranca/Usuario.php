<?php 
    declare(strict_types=1);


abstract class Usuario {
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;
    
    public function __getNome(): string 
    {
        return $this->nome;
    }
    
    public function __setNome(string $nome) {
        $this->nome= $nome;
    }
    public function __getSenha(): string 
    {
        return $this->senha;
    }
    
    public function __setSenha(string $senha) {
        $this->senha= $senha;
    }
    public function __getCPF(): string 
    {
        return $this->cpf;
    }
    
    public function __setCPF(string $cpf) {
        $this->cpf= $cpf;
    }
    
    public function __getEmail(): string 
    {
        return $this->email;
    }
    
    public function __setEmail(string $email) {
        $this->email= $email;
    }


}

?>