<?php
// $cont=0;
// $numeros=0;
// while ($cont <= 20) {
//     if($numeros%2==0){
//         echo("<p>$numeros </p> <br>");
//         $cont++;
//     }
//     $numeros++;
// }   
$numeros=2;
$anteriores=2;
while ($anteriores<=$numeros) {
 $resto=$numeros%$anteriores;
if(($resto)===0 && $anteriores<$numeros){
    echo("divisible por $anteriores");
    break;
}else if($numeros===$anteriores){
    echo("$numeros es primo<br>");
}
$anteriores++;
}
$numeros++;
?>