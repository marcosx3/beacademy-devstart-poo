<?php 
declare(strict_types=1);

class Cliente extends Usuario {
   
    private string $dataCadastro;

   public function __getDataCadastro()
   {
       return $this->dataCadastro;
   }
   public function __setDataCadastro(string $dataCadastro){
       $this->dataCadastro = $dataCadastro;
   }
    
}


?>