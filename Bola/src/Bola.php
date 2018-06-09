<?php

class Bola
{
    private $cor = "azul";
    private $circunferencia;
    private $material;
    
    public function __construct(
        string $cor,
        string $circuferencia,
        string $material
    ) 
    {
        $this->setCor($cor);
        $this->setCircunferencia($circuferencia);
        $this->setMaterial($material);
    }
    
    public function setCor(string $cor)
    {
        $this->cor = $cor;
    }
    
    public function getCor()
    {
        return $this->cor;
    }
    
    public function setCircunferencia(string $circunferencia)
    {
        (30+30+30)*3.14;
        $this->circunferencia = $circunferencia;        
    }
    
    public function getCircunferencia()
    {
        return $this->circunferencia;
    }
    
    public function setMaterial(string $material)
    {
        $this->material = $material;
    }
    
    public function getMaterial()
    {
        return $this->material;
    }
}


