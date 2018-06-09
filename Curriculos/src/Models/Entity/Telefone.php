<?php

namespace YuriTavares\Models\Entity;

class Telefone
{
    private $idCandidato;
    private $telefone;
    private $principal = false;
    private $whatsapp = false;
    private $telegram = false;
    
    public function __construct(
        int $idCandidato,
        string $telefone,
        int $principal,
        int $whatsapp,
        int $telegram
    ) {
        $this->setIdCandidato($idCandidato);
        $this->setTelefone($telefone);
        $this->setPrincipal($principal);
        $this->setWhatsapp($whatsapp);
        $this->setTelegram($telegram);
    }

    public function setIdCandidato(int $idCandidato)
    {
        $this->idCandidato = $idCandidato;
    }
    
    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }
    
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    public function setPrincipal(int $principal)
    {
        $this->principal = $principal;
    }
    
    public function getPrincipal()
    {
        return $this->principal;
    }
    
    public function setWhatsApp(int $whatsapp)
    {
        $this->whatsapp = $whatsapp;
    }
    
    public function getWhatsApp()
    {
        return $this->whatsapp;
    }
    
    public function setTelegram(int $telegram)
    {
        $this->telegram = $telegram;
    }
    
    public function getTelegram()
    {
        return $this->telegram;
    }
}

