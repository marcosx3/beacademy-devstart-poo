<?php 
  
class Gestor extends Usuario {

    private float $salario;
    private string $horario;

    public function getSalario() : float
    {
        return $this->salario;
    }

    public function setSalario(float $novoSalario):void 
    {
        $this->salario = $novoSalario;
    }
    public function getHorario() : string
    {
        return $this->horario;
    }

    public function setHorario(float $novoHorario):void 
    {
        $this->horario = $novoHorario;
    }
}

?>