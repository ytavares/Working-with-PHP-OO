<?php

namespace YuriTavares\Models\Entity;

class FormacaoAcademica
{
    private $idCandidato;
    private $curso;
    private $instituicao;
    private $status = "cursando";
    private $conclusao;
    
    public function __construct(
        int $idCandidato,
        string $curso,
        string $instituicao,
        string $status,
        string $conclusao) 
    {
        $this->setIdCandidato($idCandidato);
        $this->setCurso($curso);
        $this->setInstituicao($instituicao);
        $this->setStatus($status);
        $this->setConclusao($conclusao);
    }
    
    public function setIdCandidato(int $idCandidato)
    {
        $this->idCandidato = $idCandidato;
    }
    
    public function setCurso(string $curso)
    {
        $this->curso = $curso;
    }
    
    public function getCurso()
    {
        return $this->curso;
    }        
    
    public function setInstituicao(string $instituicao)
    {
        $this->instituicao = $instituicao;
    }
    
    public function getInstituicao()
    {
        return $this->instituicao;
    }
    
    public function setStatus(string $status)
    {
        $statusOP = array('Cursando','Concluido');
        if (!in_array($status,$statusOP)) {
            throw new Exception("Status inválido!");
        }
        $this->status = $status;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setConclusao(string $conclusao)
    {
        if (!Validador::validaData($conclusao)) {
            throw new Exception("Data Inválida");
        }
        $this->conclusao = $conclusao;
    }
    
    public function getConclusao()
    {
        return $this->conclusao;
    }
}