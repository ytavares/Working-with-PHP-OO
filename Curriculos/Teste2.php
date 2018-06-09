<?php

$array = [];
for($i = 1;$i <= 100; $i +=3){
    $array[] = $i * 10;
}

foreach($array as $v) {
    //echo $v . "\n";
}

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "\n";
}
