<?php

//definir una maximo y un minimo en constante
//generar numero aleatorio entre esos rango
//decir si es par o inpar

define("MAX",50);
define("MiN",10);

$random=rand(MiN,MAX);

if ($random%2==0) {
    echo("El numero es par:".$random);
}else {
    Echo("El numero es impar: ".$random);
}