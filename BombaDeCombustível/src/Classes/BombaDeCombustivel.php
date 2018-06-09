<?php

namespace YuriTavares\Classes;

use Exception;

class BombaDeCombustivel
{
    private $tipoCombustivel;
    private $valorLitro;
    private $quantidadeCombustivel;
        
    public function __construct(
        string $tipoCombustivel,
        float $valorLitro,
        float $quantidadeCombustivel
        ) 
    {
        $this->setTipoCombustivel($tipoCombustivel);
        $this->setValorLitro($valorLitro);
        $this->setQuantidadeCombustivel($quantidadeCombustivel);
        $this->setAbastecerPorValor($quantidadeCombustivel);
        $this->setAbastecerPorLitro($quantidadeCombustivel);
        $this->setAlteraValorLitro($valorLitro);
        $this->setAlteraTipoCombustivel($tipoCombustivel);
        $this->setAlteraQuantidadeCombustivel($quantidadeCombustivel);
    }
    
    public function setTipoCombustivel(string $tipoCombustivel)
    {
        $this->tipoCombustivel = $tipoCombustivel;
    }
    
    public function getTipoCombustivel()
    {
        return $this->tipoCombustivel;
    }
    
    public function setValorLitro(float $valorLitro)
    {
        $this->valorLitro = $valorLitro;
    }
    
    public function getValorLitro()
    {
        return $this->valorLitro;
    }
    
    public function setQuantidadeCombustivel(float $quantidadeCombustivel)
    {
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }
    
    public function getQuantidadeCombustivel()
    {
        return $this->quantidadeCombustivel;
    }
    
    public function setAbastecerPorValor(float $abastecerPorValor)
    {
        $resul = $abastecerPorValor / $this->valorLitro;
        if ($resul > $this->quantidadeCombustivel) {
            throw new Exception("Bomba com combustível insuficiente!");
        }else{
            $this->quantidadeCombustivel -= $resul;    
        }
    }
    
    public function setAbastecerPorLitro(float $abastecerPorLitro)
    {
        $resul = $abastecerPorLitro * $this->valorLitro;
        if ($resul > $this->quantidadeCombustivel) {
            throw new Exception("Bomba com combustível insuficiente!");
        }else{
            $this->quantidadeCombustivel -= $resul;   
        }
    }

    public function setAlteraValorLitro($newValorLitro)
    {
        $this->valorLitro = $newValorLitro;
    }

    public function setAlteraTipoCombustivel($newTipoCombustivel)
    {
        $this->tipoCombustivel = $newTipoCombustivel;
    }

    public function setAlteraQuantidadeCombustivel($newQuantidadeCombustivel)
    {
        $this->quantidadeCombustivel -= $newQuantidadeCombustivel;
    }
}
