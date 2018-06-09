<?php

class Porta
{
    private $aberta;
    private $cor;
    private $dimensaoX;
    private $dimensaoY;
    private $dimensaoZ;
    
    public function __construct(
        string $aberta,
        string $cor,
        string $dimensaoX,
        string $dimensaoY,
        string $dimensaoZ)
    {
        $this->aberta = new $aberta;
        $this->cor = new $cor;
        $this->dimensaoX = new $dimensaoX;
        $this->dimensaoY = new $dimensaoY;
        $this->dimensaoZ = new $dimensaoZ;
    }
    
    public function setAberta(string $aberta)
    {
        $this->aberta = $aberta;
    }
    
    public function getAberta()
    {
        return $this->aberta;
    }
    
    public function setCor(string $cor)
    {
        $this->cor = $cor;
    }
    
    public function getCor()
    {
        return $this->cor;
    }
    
    public function setDimensaoX(string $dimensaoX)
    {
        $this->dimensaoX = $dimensaoX;
    }
    
    public function getDimensaoX()
    {    
        return $this->dimensaoX;
    }
    
    public function setDimensaoY(string $dimensaoY)
    {
        $this->dimensaoY = $dimensaoY;
    }
    
    public function getDimensaoY()
    {
        return $this->dimensaoY;
    }
    
    public function setDimensaoZ(string $dimensaoZ)
    {
        $this->dimensaoZ = $dimensaoZ;
    }
    
    public function getDimensaoZ()
    {
        return $this->dimensaoZ;
    }
    
    public function pintar()
    {
        $this->cor = "azul";
    }
    
    public function abre()
    {
        $this->aberta = TRUE;
    }
    
    public function fecha()
    {
        $this->aberta = FALSE;
    }
    
    public function estaAberta()
    {
        echo $this->aberta;
    }        
    
    
 }
