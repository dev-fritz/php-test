<?php
$listaIdades = [1,4,5,2,7,8,32,65,12,"FRITZ"];
$listaIdades[] = 16;

foreach ($listaIdades as $idade){
    echo $idade . PHP_EOL;
}