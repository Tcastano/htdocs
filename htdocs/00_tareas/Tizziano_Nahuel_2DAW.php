<?php
$cont=0;
$numeroArray=0;
$longitud=rand(5,10)*2;
echo"longitud: ".$longitud;
echo ("<br>");
$probabilidad=rand(0,10);
for ($i=0; $i < $longitud; $i++) { 
    $aleatorio=rand(0,100);
    $array[$i]=("$aleatorio");
}

print_r($array);
echo ("<br>");
echo $probabilidad;
echo ("<br>");

for ($i=0; $i < 6 ; $i++) { 
    if($probabilidad<=6) {
        $aleatorio=rand(0,100);
        echo($aleatorio);
        echo ("<br>");
        array_push($array,$aleatorio);
    }else if($probabilidad>6){
        $aleatorio=rand(0,100);
        echo($aleatorio);
        echo ("<br>");
        array_unshift($array,$aleatorio);
    }
}
print_r($array);
echo ("<br>");
echo ("<br>");
$array=array_slice($array,2);
print_r($array);
echo ("<br>");
$arrayfinal=array_shift($array);
echo ("<br>");
$arrayfinal=array_shift($array);

print_r($array);
echo ("<br>");

if (in_array("42",$array)) {
        for ($i=0; $i < $longitud ; $i++) { 
            $numeroArray=$array[$i];
            if ($numeroArray%2==0) {
              break;
            }
    }
    $clave42=array_search($numeroArray,$array);

    echo ("Se encontro el 42");
    echo ("<br>");
    echo ("La clave del primer numero par es $clave42");
}else {
    echo"No se encontro el 42";

    for ($i=0; $i < $longitud ; $i++) { 
        $numeroArray=$array[$i];
        if ($numeroArray%2!==0) {
          break;
        }
    }
    $clave42=array_search($numeroArray,$array);
    echo ("<br>");
    echo ("La clave del primer numero impar es $clave42");


}
?>
