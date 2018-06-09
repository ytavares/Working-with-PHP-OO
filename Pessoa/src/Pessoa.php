<?php

class Pessoa
{
    private $nome = "João";
    private $idade = 18;
    private $peso = 80;
    private $altura = 1.70;
    
    public function __construct(
        string $nome,
        int $idade,
        float $peso,
        float $altura
        ) 
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setPeso($peso);
        $this->setAltura($altura);
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
    
    public function setPeso(float $peso)
    {
        $this->peso = $peso;
    }
    
    public function getPeso()
    {
        return $this->peso;
    }
    
    public function setAltura(float $altura)
    {
        $this->altura = $altura;
    }
    
    public function getAltura()
    {
        return $this->altura;
    }
    
    public function envelhecer()
    {    
        if ($this->idade < 21) {
            $this->idade += 1;
            $this->altura += 0.5;
        }
    $this->idade += 1;
    }
    
    public function engordar()
    {
        $this->peso += 5;
    }
    
    public function emagrecer()
    {
        $this->peso -= 10;
    }
    
    public function crescer()
    {
        $this->altura += 2;
    }
}
