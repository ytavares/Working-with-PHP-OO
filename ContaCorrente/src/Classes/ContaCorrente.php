<?php

namespace YuriTavares\Classes;

use Exception;

class ContaCorrente
{
    private $numConta;
    private $nomeCorrentista;
    private $saldo;
    
    public function __construct(
        float $numConta,
        string $nomeCorrentista,
        float $saldo
        ) 
    {
        $this->setNumConta($numConta);
        $this->setNomeCorrentista($nomeCorrentista);
        $this->setSaldo($saldo);
        $this->setAlterarNome($nomeCorrentista);
        $this->setDeposito($saldo);
        $this->setSaque($saldo);
    }
    
    public function setNumConta(float $numConta)
    {
        $this->numConta = $numConta;
    }
    
    public function getNumConta()
    {
        return $this->numConta;
    }
    
    public function setNomeCorrentista(string $nomeCorrentista)
    {
        $this->nomeCorrentista = $nomeCorrentista;
    }
    
    public function getNomeCorrentista()
    {
        return $this->nomeCorrentista;
    }
    
    public function setSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }
    
    public function getSaldo()
    {
        return $this->saldo;
    }
    
    public function setAlterarNome($newName)
    {
        $this->nomeCorrentista = $newName;
    }
    
    public function setDeposito(float $valor)
    {
        $this->saldo += $valor;
    }
    
    public function setSaque(float $valor)
    {
        if ($this->saldo < $valor) {
            throw new Exception("Saldo Indisponivel para saque!");
        }else{
            $this->saldo -= $valor;            
        }
    }
}
