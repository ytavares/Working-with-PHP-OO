<?php

require '';

use YuriTavares\Classes\ContaInvestimento;

$poupanca = new ContaInvestimento(1000, 10);

        for($i = 0; $i<5 ; $i++){
            $resul = ($poupanca->getTaxa() * $poupanca->getSaldo())/100;
            $poupanca->getSaldo -= $resul;
        }

echo "O saldo atual é: {$poupanca->getSaldo()}";