<?php

class Carro
{
    private $tanque = 0;
    private $kmPorLitro;
    private $andar;
    
    public function __construct(
        float $tanque,
        float $kmPorLitro,
        float $andar) 
    {
        $this->setTanque($tanque);
        $this->setKmPorLitro($kmPorLitro);
        $this->setAndar($andar);
        $this->setAdicionarGasolina($tanque);
    }
    
    public function setTanque(float $tanque)
    {
        $this->tanque = $tanque;
    }
    
    public function getObterGasolina()
    {
        return $this->tanque;
    }
    
    public function setKmPorLitro(float $kmPorLitro)
    {
        $this->kmPorLitro = $kmPorLitro;
    }
    
    public function getKmPorLitro()
    {
        return $this->kmPorLitro;
    }
    
    public function setAndar($andar)
    {
        $this->andar = $andar;
        $litrosGastos = $andar / $this->kmPorLitro;
        if ($litrosGastos > $this->tanque){
            throw new Exception("Sem gasolina");
        }
        $this->tanque -= $litrosGastos;
    }
    
    public function setAdicionarGasolina(float $litroCombustivel)
    {
        $this->tanque += $litroCombustivel; 
    }
    
    
}