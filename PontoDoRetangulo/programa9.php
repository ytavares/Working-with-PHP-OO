<?php

require './vendor/autoload.php';

use YuriTavares\Classes\Ponto;
use YuriTavares\Classes\Retangulo;

$ponto = new Ponto( 10, 5);
$retangulo = new Retangulo(20, 10);


echo "Valor de x : {$ponto->getX()} \n"
. "Valor de y : {$ponto->getY()}\n";

echo "O centro do retangulo está no encontro dos ponto x";

