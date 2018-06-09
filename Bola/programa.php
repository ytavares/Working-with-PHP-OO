<?php

require 'vendor/autoload.php';

use YuriTavares\Classes\Bola;

$bolaPreta = new Bola("Preta", 1, "Plastico");
$bolaAzul  = new Bola("Azul", 3, "Plastico");

echo "Bola {$bolaPreta->getCor()}: {$bolaPreta->getCircunferencia()}\n";
echo "Bola {$bolaAzul->getCor()}: {$bolaAzul->getCircunferencia()}\n";
