<?php
    declare(strict_types=1);

class Curso  {

    private string $curso;

     function __construct(string $curso){
        $this->curso = $curso;
    }
    public function __get(){

        return $this->curso;
    }
    public function __set(string $curso){
        $this->curso = $curso;
    }
}
?>