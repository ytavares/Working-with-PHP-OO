<?php

namespace YuriTavares\Classes;

class Bola
{
    private $cor;
    private $raio;
    private $material;
    
    const PI = 3.14;
    
    public function __construct(
        string $cor,
        float $raio,
        string $material
    ) 
    {
        $this->setCor($cor);
        $this->setRaio($raio);
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
    
    public function setRaio(float $raio)
    {
        $this->raio = $raio;        
    }
    
    public function getRaio()
    {
        return $this->raio;
    }
    
    public function setMaterial(string $material)
    {
        $this->material = $material;
    }
    
    public function getMaterial()
    {
        return $this->material;
    }
    
    public function getCircunferencia()
    {
        return 2 * self::PI * $this->raio;
    }
}


