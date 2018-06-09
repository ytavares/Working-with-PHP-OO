<?php

$funcionario = new Funcionario("Yuri", 10000);

echo "Nome do funcionário : {$funcionario->getNome()}, \n"
. "Salario : {$funcionario->getSalario()}";