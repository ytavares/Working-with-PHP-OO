<?php

namespace YuriTavares\Models\Entity;

class Estado
{
    private $id;
    private $uf;
    private $nome;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUf()
    {
        return $this->uf;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
}
