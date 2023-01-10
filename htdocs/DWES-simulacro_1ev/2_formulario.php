<?php

require_once('1_arrays.php');

/**
 * 
 * 2. Formularios
 * - Crear una lista iterando el array anterior que muestre todos los alumnos y sus notas.
 * - Crear un formulario que permita seleccionar la asignatura a mostrar de los estudiantes. Utilizar o un select o un grupo de radio-buttons.
 * - Filtrar las asignaturas de manera similar al apartado anterior
 * - Crear un fichero json con los datos de cada alumno
 * - Decodificarlo y mostrar la nota media de cada alumno por pantalla
 * 
 * 
 */



 //var_dump($notas);

    for ($i=0; $i <5 ; $i++) {
        $nombrealumno=$alumnos[$i];
        foreach ($notas as $nombrealumno => $value) {
            echo($nombrealumno .":");
            var_dump($notas[$nombrealumno]);
            $nota=$notas[$nombrealumno];
            foreach ($nota as $key => $value) {
                $numero=$nota [$key];
            }
            echo($nota);
            echo($numero);
            echo("<br>");
            
        }
    }