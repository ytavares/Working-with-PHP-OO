<?php

require './vendor/autoload.php';

use YuriTavares\Models\Entity\Candidato;
use YuriTavares\Models\Entity\Email;
use YuriTavares\Models\Entity\Telefone;

$candidato = new Candidato(
   "Washigton Teixeira Gonçalves",
   "1989-06-08",
   "Rua Mário Joaquim Santana 262",
   11,
   "Próximo ao Posto Osório",
   "24009-098",
   "solteiro",
   "Muito gordo",
   40000
);

$email = new Email(
   1,
   "exemplo@exemplo.com",
   1     
);

$telefone = new Telefone(
   1,
   2189903336,
   1,
   1,
   0
);

echo $candidato->getNomeCandidato() . "\n";
echo $candidato->getDataNascimento() . "\n";
echo $email->getEmail() . "\n";
echo $telefone->getTelefone() . "\n";


