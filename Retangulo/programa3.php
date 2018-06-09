<?php

require './vendor/autoload.php';

use YuriTavares\Classes\Retangulo;
use YuriTavares\Classes\Piso;

$retangulo = new Retangulo(20, 40);
$piso = new Piso(2);

$pisos = $retangulo->getAreaDoRetangulo() / $piso->getAreaPiso();
echo "Com uma área de : {$retangulo->getAreaDoRetangulo()} \n"
. "irá precisar de {$pisos}";