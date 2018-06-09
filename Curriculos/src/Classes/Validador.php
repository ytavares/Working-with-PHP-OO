<?php

namespace YuriTavares\Classes;

class Validador
{
    public static function validaData(string $data) : bool
    {
        $resul = explode('-', $data);
        $ano = $resul[0];
        $mes = $resul[1];
        $dia = $resul[2];
        return checkdate($mes, $dia, $ano);
    }
    
    public static function validaCep(string $CEP) : bool
    {
//        if (ereg("^[0-9]{5}-[0-9]{3}$", $CEP) === false) {
//            return false;
//        }
        return true;
    }
    
    public static function validarEmail(string $email) : bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
           return false; 
        }
        return true;
    }
}
