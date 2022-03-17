<?php
    

    $idade=17;
    $hab=true;

    if($idade>18 && $hab=true){

        echo "APROVADO";
    }

    elseif($idade< 18){
        echo "NEGADO";

    }

    elseif($hab=false){
        echo"NEGADO";
    }
?>