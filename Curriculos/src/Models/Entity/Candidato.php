<?php

namespace YuriTavares\Models\Entity;

use YuriTavares\Classes\Validador;

class Candidato
{
    private $idCandidato;
    private $nomeCandidato;
    private $dataNascimento;
    private $logradouro;
    private $idCidade;
    private $referencia;
    private $CEP;
    private $estadoCivil = "solteiro";
    private $observacoes;
    private $pretensaoSalarial;
    
    public function __construct(
        string $nomeCandidato, 
        string $dataNascimento, 
        string $logradouro, 
        int $idCidade,
        string $referencia,
        string $CEP,
        string $estadoCivil,
        string $observacoes,
        float $pretensaoSalarial
    ) {   
        $this->setNome($nomeCandidato);
        $this->setDataNascimento($dataNascimento);
        $this->setLogradouro($logradouro);
        $this->setIdCidade($idCidade);
        $this->setReferencia($referencia);
        $this->setCEP($CEP);
        $this->setEstadoCivil($estadoCivil);
        $this->setObservacoes($observacoes);
        $this->setPretensaoSalarial($pretensaoSalarial);
    }
    
    public function getId()
    {
        return $this->idCandidato;
    }

    public function setNome(string $nomeCandidato)
    {
        $this->nomeCandidato = $nomeCandidato;
    }
    
    public function getNomeCandidato()
    {
        return $this->nomeCandidato;
    }
    
    public function setDataNascimento(string $dataNascimento)
    {
        if (!Validador::validaData($dataNascimento)) {
            throw new Exception("Data de Nascimento Inválida");
        }
        $this->dataNascimento = $dataNascimento;        
    }
    
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }        
    
    public function getIdade()
    {
        $dataNascimento = new DateTime($this->dataNascimento);
        $dataAtual = new DateTime();
        $interval = $dataAtual->diff($dataNascimento);
        return $interval->format("%Y");
    }
    
    public function setLogradouro(string $logradouro)
    {
        $this->logradouro = $logradouro;
    }
    
    public function getLogradouro()
    {
        return $this->logradouro;
    }
    
    public function setIdCidade(int $idCidade)
    {
        $this->idCidade = $idCidade;
    }
    
    public function getIdCidade()
    {
        return $this->idCidade;
    }
    
    public function setReferencia(string $referencia)
    {
        $this->referencia = $referencia;
    }
    
    public function getReferencia()
    {
        return $this->referencia;
    }
    
    public function setCEP(string $CEP)
    {
        if (!Validador::validaCep($CEP)) {            
            throw new Exception("CEP inválido!");
        }
        $this->CEP = $CEP;
    }
    
    public function getCEP()
    {
        return $this->CEP;
    }
    
    public function setEstadoCivil(string $estadoCivil)
    {
        $opcoes = ['solteiro', 'casado', 'divorciado', 'viuvo'];
        if (!in_array($estadoCivil,$opcoes)) {
            throw new Exception("Estado Civil inválido.");
        }
        $this->estadoCivil = $estadoCivil;
    }
    
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }
    
    public function setObservacoes(string $observacoes)
    {
        $this->observacoes = $observacoes;
    }
    
    public function getObservacoes()
    {
        return $this->observacoes;
    }
    
    public function setPretensaoSalarial(float $pretensaoSalarial)
    {
        if ($pretensaoSalarial <= 0) {
            throw new Exception ("Pretensão salarial inválida");
        }
        $this->pretensaoSalarial = $pretensaoSalarial;
    }
    
    public function getPretensaoSalarial()
    {
        return $this->pretensaoSalarial;
    }
}

