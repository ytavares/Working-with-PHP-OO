<?php

namespace YuriTavares\Models\Entity;

class AtividadeExtracurricular
{
    
    private $idCandidato;
    private $atividade;
    private $dataInicio;
    private $dataFim;
    
    public function __construct(
        int $idCandidato, 
        string $atividade, 
        string $dataInicio, 
        string $dataFim) 
    {
        $this->setIdCandidato($idCandidato);
        $this->setAtividade($atividade);
        $this->setDataInicio($dataInicio);
        $this->setDataFim($dataFim);
    }

    public function setIdCandidato(int $idCandidato)
    {
        $this->idCandidato = $idCandidato;
    }
    
    public function setAtividade(string $atividade)
    {
        $this->atividade = $atividade;
    }
    
    public function getAtividade()
    {
        return $this->atividade;
    }
    
    public function setDataInicio(string $dataInicio)
    {
        if (!Validador::validaData($dataInicio)) {
            throw new Exception("Data de Inicio Inválida");
        }
        $this->dataInicio = $dataInicio;
    }
    
    public function getDataInicio()
    {
        return $this->dataInicio;
    }
    
    public function setDataFim(string $dataFim)
    {
        if (!Validador::validaData($dataFim)) {
            throw new Exception("Data de fim Inválida");
        }
        $this->dataFim = $dataFim;
    }
    
    public function getDataFim()
    {
        return $this->dataFim;
    }        
}
