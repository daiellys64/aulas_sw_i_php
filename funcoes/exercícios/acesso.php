<?php

$Celsius=[$_POST];
$Farenheit=[$_POST];

function celsius($a){
    echo $a;
}

celsius('Aqui é convertido para C');

$Farenheit= $Celsius * 1,8 + 32 ; 
?>