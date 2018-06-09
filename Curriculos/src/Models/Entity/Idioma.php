<?php

namespace YuriTavares\Models\Entity;

class Idioma
{
    private $nomeIdioma = "Português Brasil";

    public function __construct(string $nomeIdioma) 
    {
        $this->setIdioma($nomeIdioma);
    }

    public function setIdioma(string $nomeIdioma)
    {
        $this->nomeIdioma = $nomeIdioma;
    }

    public function getNomeIdioma()
    {
        return $this->nomeIdioma;
    }
}
