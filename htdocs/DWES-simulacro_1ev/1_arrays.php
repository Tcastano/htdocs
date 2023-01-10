<?php

/**
 * 
 * 1. Arrays:
 * Crear un array que recoja las notas de la asignatura "DWES" de 5 alumnos. Dicho array ha de ser asociativo y las notas números aleatorios entre 1 y 10.
 * Añadir por cada estudiante, una clave más "DWEC" con números aleatorios entre 1 y 10.
 * 
 */

 
$notas=[];
$alumnos=["hugo","marta","fabio","siro","mario"];

foreach ($alumnos as $nombre) {
    $notas[$nombre]=["DWEC"=>rand(1,10)];
}

foreach ($notas as $nombre => $curso) {
    $notas[$nombre]["DWES"]=rand(1,10);
}

print("<pre>".print_r($notas,true)."</pre>");
