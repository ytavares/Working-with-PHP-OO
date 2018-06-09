<?php

class Pessoa
{
    private $nome;
    private $idade;
    
    public function __construct(string $nome, int $idade) {
        $this->nome = new $nome;
        $this->idade = new $idade;
    }
    
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }
    
    public function getIdade()
    {
        return $this->idade;
    }        
    
    function somaIdade($idade)
    {
        return $idade + 15;
    }
    
    
}