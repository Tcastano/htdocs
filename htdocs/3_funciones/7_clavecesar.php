<?php

$letra = "A";

$palabra = "Password";
$arrayChar = str_split($palabra);

echo("La letra $letra es en ASCII: " . ord($letra) . "<br>");
echo("La letra era: " . chr(ord($letra)));

//offset: las posiciones que lo mueves

function encoder($texto, $offset){
    $array_caracteres = str_split($texto);

    $array_encoded = array_map(fn($el)=>chr(ord($el)+$offset),$array_caracteres);
    $texto_encoded = implode($array_encoded);
    return $texto_encoded;
}

echo("<br>");
echo(encoder("Hola Mundo", 5));
echo("<br>");

function decoder($texto, $offset){
    $array_caracteres = str_split($texto);

    $array_decoded = array_map(fn($el)=>chr(ord($el)-$offset),$array_caracteres);
    $texto_decoded = implode($array_decoded);
    return $texto_decoded;
}

echo(decoder("Mtqf%Rzsit", 5));

?>