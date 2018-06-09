<?php

namespace YuriTavares\Classes;

class Piso
{
    private $lado;
    private $area;
    
    public function __construct(float $lado) {
        $this->setLado($lado);
    }
    
    public function setLado(string $lado)
    {
        $this->lado = $lado;
    }
    
    public function getLado()
    {
        return $this->lado;
    }
    
    public function getAreaPiso()
    {
        $this->area = $this->lado * $this->lado;
        return $this->area;
    }
}
