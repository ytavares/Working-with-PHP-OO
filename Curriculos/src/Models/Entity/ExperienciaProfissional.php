<?php

namespace YuriTavares\Models\Entity;

class ExperienciaProfissional
{ 
    private $idCandidato;
    private $empresa;
    private $funcao;
    private $entrada;
    private $saida;
    
    public function __construct(
        int $idCandidato,
        string $empresa,
        string $funcao,
        string $entrada,
        string $saida) 
    {
        $this->setIdCandidato($idCandidato);
        $this->setEmpresa($empresa);
        $this->setFuncao($funcao);
        $this->setEntrada($entrada);
        $this->setSaida($saida);
    }
    
    public function setIdCandidato(int $idCandidato)
    {
        $this->idCandidato = $idCandidato;
    }
    
    public function setEmpresa(string $empresa)
    {
        $this->empresa = $empresa;
    }
    
    public function getEmpresa()
    {
        return $this->empresa;
    }
    
    public function setFuncao(string $funcao)
    {
        $this->funcao = $funcao;
    }
    
    public function getFuncao()
    {
        return $this->funcao;
    }
    
    public function setEntrada(string $entrada)
    {
        if (!Validador::validaData($entrada)) {
            throw new Exception("Data Inválida");
        }
        $this->entrada = $entrada;
    }
    
    public function getEntrada()
    {
        return $this->entrada;
    }        
    
    public function setSaida(string $saida)
    {
        if (!Validador::validaData($saida)) {
            throw new Exception("Data Inválida");
        }
        $this->saida = $saida;
    }
    
    public function getSaida()
    {
        return $this->saida;
    }
}