<?php

namespace YuriTavares\Models\Entity;

use YuriTavares\Classes\Validador;

class Email
{
    private $idCandidato;
    private $email;
    private $principal = 1;
    
    public function __construct(
        int $idCandidato,
        string $email,
        int $principal)
    {
        $this->setIdCandidato($idCandidato);
        $this->setEmail($email);
        $this->setPrincipal($principal);
    }
    
    public function setIdCandidato(int $idCandidato)
    {
        $this->idCandidato = $idCandidato;
    }
    
    public function setEmail(string $email)
    {
        if (!Validador::validarEmail($email)) {
            throw new Exception("Email Invalido!");
        } 
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setPrincipal(int $principal)
    {
        $this->principal = $principal;
    }
    
    public function getPrincipal()
    {
        return $this->principal;
    }
}

