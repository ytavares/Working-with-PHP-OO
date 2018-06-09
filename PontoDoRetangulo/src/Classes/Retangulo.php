<?php

namespace YuriTavares\Classes;

class Retangulo
{
    private $largura;
    private $altura;
    
    public function __construct(
        float $largura,
        float $altura
        ) 
    {
        $this->setAltura($altura);
        $this->setLargura($largura);
    }

    public function setLargura(float $largura)
    {
        $this->largura = $largura;
    }
    
    public function getLargura()
    {
        return $this->largura;
    }
    
    public function setAltura(float $altura)
    {
        $this->altura = $altura;
    }
    
    public function getAltura()
    {
        return $this->altura;
    }
    
    public function centroRetangulo()
    {
        $centroRetangulo = ($this->altura + $this->largura) / 2;
        return $centroRetangulo;
    }
}
