<?php

namespace YuriTavares\Models\Entity;

class Objetivo
{    
    private $objetivo;
    
    public function __construct(string $objetivo)
    {
        $this->setObjetivo($objetivo);
    }

    public function setObjetivo(string $objetivo)
    {
        $this->objetivo = $objetivo;
    }
    
    public function getObjetivo()
    {
        return $this->objetivo;
    }
}
