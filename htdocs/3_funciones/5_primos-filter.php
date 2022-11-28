<?php
define('MAX',100);
$arrayNumeros=[];
for ($i=0; $i < MAX; $i++) { 
    $arrayNumeros[$i]=$i;
}
print_r($arrayNumeros);


function par($numero){
    if ($numero%2==0) {
        return true;
    }else{
        return false;
    }
}
function Primo($num){
    $cont = 0;
       for ($i=1; $i <= $num; $i++) {
          if ($num % $i==0) $cont = $cont + 1;
       }
    if ($cont==2) return true;
       return false;
    }
$arraypares=array_filter($arrayNumeros,fn($numero)=>$numero%2==0?true:false);
echo"<br>";
echo"<br>"; 
print_r($arraypares);


$arrayprimo=array_filter($arrayNumeros,"Primo");
echo"<br>";
echo"<br>"; 
print_r($arrayprimo);


?>