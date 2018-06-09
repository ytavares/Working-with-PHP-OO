<?php

namespace YuriTavares\Models\Entity;

class Cidade
{
    private $id;
    private $estado;
    private $nome;

    public function getId()
    {
        return $this->id;
    }
    
    public function getEstadoId()
    {
        return $this->estado;
    }
    
    public function getNome()
    {
        return $this->nome;
    }        
}
