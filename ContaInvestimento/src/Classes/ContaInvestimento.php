<?php



class ContaInvestimento
{
    private $saldo;
    private $taxa;
    
    public function __construct(
        float $saldo,
        float $taxa) 
    {
        $this->setSaldo($saldo);
        $this->setTaxa($taxa);
    }
    
    public function setSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }
    
    public function getSaldo()
    {
        return $this->saldo;
    }
    
    public function setTaxa(float $taxa)
    {
        $this->taxa = $taxa;
    }
    
    public function getTaxa()
    {
        return $this->taxa;
    }
}
