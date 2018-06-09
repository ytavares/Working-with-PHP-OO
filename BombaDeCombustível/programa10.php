<?php

require './vendor/autoload.php';

use YuriTavares\Classes\BombaDeCombustivel;

$bomba = new BombaDeCombustivel("Gasolina", 5, 100,2000);

echo "Tipo do Combustível é : {$bomba->getTipoCombustivel()} \n"
. "Preço do litro de {$bomba->getTipoCombustivel()} é {$bomba->getValorLitro()} \n"
. "Combustível restante na bomba é : {$bomba->getQuantidadeCombustivel()}\n";

