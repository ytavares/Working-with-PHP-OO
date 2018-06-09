<?php

require './vendor/autoload.php';

use YuriTavares\Classes\TV;

$TV = new TV(11, 101);

echo "Canal : {$TV->getCanal()} \n"
. "Volume : {$TV->getVolume()} \n";

