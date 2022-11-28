<?php

//funcion suma 

$n1=32;
$n2=12;

function sumaecho($n1,$n2){
    $resultado=$n1+$n2;
    echo ($resultado);
}
function suma($n1,$n2){
    return $n1+$n2;
}
echo(sumaecho($n1,$n2));
echo(suma($n1,$n2));