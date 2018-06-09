<?php

namespace YuriTavares\Models\Entity;

class Conhecimento
{
    private $conhecimento;
    
    public function __construct(string $conhecimento) 
    {
        $this->setConhecimento($conhecimento);
    }
    
    public function setConhecimento(string $conhecimento)
    {
        $this->conhecimento = $conhecimento;
    }
    
    public function getConhecimento()
    {
        return $this->conhecimento;
    }
}
