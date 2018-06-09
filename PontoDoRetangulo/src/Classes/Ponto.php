<?php

namespace YuriTavares\Classes;

class Ponto
{
    private $x;
    private $y;
    
    public function __construct(
        float $x,
        float $y
    ) 
    {
        $this->setX($x);
        $this->setY($y);
    }
    
    public function setX(float $x)
    {
        $this->x = $x;
    }
    
    public function getX()
    {
        return $this->x;
    }
    
    public function setY(float $y)
    {
        $this->y = $y;
    }
    
    public function getY()
    {
        return $this->y;
    }        
    
}

