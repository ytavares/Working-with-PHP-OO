<?php

namespace YuriTavares\Classes;

class Retangulo
{
    private $altura;
    private $base;
    
    public function __construct(
        float $altura,
        float $base
        ) 
    {
        $this->setAltura($altura);
        $this->setBase($base);
    }

    public function setAltura(float $altura)
    {
        $this->altura = $altura;
    }
    
    public function getAltura()
    {
        return $this->altura;
    }
    
    public function setBase(float $base)
    {
        $this->base = $base;
    }
    
    public function getBase()
    {
        return $this->base;
    }
    
    public function setMudarValorBase($valorBase)
    {
        $this->base = $valorBase;
    }
    
    public function setMudarValorAltura($valorAltura)
    {
        $this->altura = $valorAltura;
    }
    
    public function getAreaDoRetangulo()
    {
        $area = $this->base * $this->altura;
        return $area;
    }
    
    public function getPerimetroDoRetangulo()
    {
        $perimetro = ($this->base = $this->altura)*2;
        return $perimetro;
    }
    
    public function getCentroRetangulo()
    {
        $this->altura / 2;
        $this->base /2;
    }
}
