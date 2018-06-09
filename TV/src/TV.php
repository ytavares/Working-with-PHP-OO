<?php

class TV
{
    private $canal;
    private $volume;
    
    public function __construct(
        string $canal,
        int $volume) 
    {
        $this->setCanal($canal);
        $this->setVolume($volume);
    }
    
    public function setCanal(string $canal)
    {
        if ($canal > 100 || $canal < 1) {
            throw new Exception("Canal Inválido!");
        }
        $this->canal = $canal;
    }
    
    public function getCanal()
    {
        return $this->canal;
    }
    
    public function setVolume(int $volume)
    {
        if ($volume >100){
            throw new Exception("Volume máximo atingido!");
        }elseif ($volume <2) {
            throw new Exception("Volume mínimo atingido!");
        }
        $this->volume = $volume;
    }
}
