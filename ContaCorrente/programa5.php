<?php

require './vendor/autoload.php';

use YuriTavares\Classes\ContaCorrente;

$conta = new ContaCorrente(263778, "Fernanda Tavares", 10000);
        
echo "Numero da conta : {$conta->getNumConta()}\n"
. "Nome Correntista : {$conta->getNomeCorrentista()}\n"
. "Saldo em conta : {$conta->getSaldo()}\n";

