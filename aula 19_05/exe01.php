<?php
//VETORES

$numeros=[1,12, 50,1.2];
//echo $numeros[2]
$qntd= count($numeros);
echo "Meu vetor tem: $qntd de posições <hr>";
$total=0;
for($i=0;$i<4;$i++){
    echo"Indice= $i==> $numeros[$i] <br>";
    $total=$total+ $numeros [$i];
    echo "Soma Parcial parcial é: $total<br>";
}
echo"<hr>";
echo"Soma total é : $total <br>";
$media = $total/$qntd;
echo" A média é : $media"

?>