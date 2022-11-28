<?php

function factorial($factorial){
    $resultado=$factorial;
    $operacionRealizada=$factorial."!"."=".$factorial;
    for ($cont=$factorial-1; $cont > 0; $cont--) { 
        $operacionRealizada="$operacionRealizada X $cont";
        
    }
    $operacionRealizada="$operacionRealizada = $resultado";
    return $operacionRealizada;
}
echo(factorial(5));
echo("<br>");

function factoriarR($numero){
    if ($numero ==1) {
        return 1;
    }else {
        return $numero * factoriarR($numero-1);
    }
    return $resultado;
}
echo(factoriarR(5)) ;
?>