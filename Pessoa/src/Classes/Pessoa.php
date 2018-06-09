<?php

namespace YuriTavares\Classes;

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
        $this->setEnvelhecer($idade);
        $this->setEngordar($peso);
        $this->setEmagrecer($peso);
        $this->setCrescer();
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
    
    public function setEnvelhecer()
    {    
        if ($this->idade < 21) {
            $this->idade += 1;
            $this->altura += 0.05;
        }else{
            $this->idade ++;
        }
    }
    
    public function setEngordar()
    {
        $this->peso++;
    }
    
    public function setEmagrecer()
    {
        $this->peso -= 1;
    }
    
    public function setCrescer()
    {
        $this->altura++;
    }
}
