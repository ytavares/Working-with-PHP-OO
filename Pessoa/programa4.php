<?php

require './vendor/autoload.php';

use YuriTavares\Classes\Pessoa;

$pessoa = new Pessoa("Yuri", 21, 95, 1.79);

echo "Nome : {$pessoa->getNome()}\n "
. "Idade: {$pessoa->getIdade()}, \n "
. "Peso : {$pessoa->getPeso()}, \n "
. "Altura : {$pessoa->getAltura()} \n";

