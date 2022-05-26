<?php
//FUNÇÃO COM RETORNO E COM PARAMETRO

function teste($x,$y){
    $soma= $x+$y;
    return $soma;
}

$num1=10;
$num2=20;

$result= teste($num1,$num2);
echo $result; 
?>