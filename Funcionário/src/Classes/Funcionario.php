<?php

class Funcionario
{
    private $nome;
    private $salario;
    
    public function __construct(
        string $nome,
        float $salario)
    {
        $this->setNome($nome);
        $this->setSalario($salario);
    }
    
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }
    
    public function getSalario()
    {
        return $this->salario;
    }
}
