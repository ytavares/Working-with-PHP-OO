<?php

class Verification
{
    public static function checarCombustivel() 
    {
        if ($resul > $this->quantidadeCombustivel){
            throw new Exception("Bomba com combustível insuficiente!");
        }
        $this->quantidadeCombustivel -= $resul;       
    }
}