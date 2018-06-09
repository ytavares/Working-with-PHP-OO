<?php

class ContaCorrente
{
    private $numConta;
    private $nomeCorrentista;
    private $saldo = 0;
    
    public function __construct(
        float $numConta,
        string $nomeCorrentista
        ) 
    {
        $this->setNumConta($numConta);
        $this->setNomeCorrentista($nomeCorrentista);
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
    
    public function alterarNome($newName)
    {
        $this->nomeCorrentista = $newName;
    }
    
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
    
    public function saque($valor)
    {
        if ($this->saldo < $valor) {
            throw new Exception("Saldo Indisponivel para saque!");
        }
    $this->saldo -= $valor;            
          
    }
}
