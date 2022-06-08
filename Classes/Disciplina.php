<?php  
declare(strict_types=1);

class Disciplina {
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function __get()
    {
        return $this->nome;
    }
    
    public function __set(string $nome){
        $this->nome = $nome;
    }
}

?>