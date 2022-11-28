<?php
define("max", 18);
echo"<h1>NUMEROS PRIMOS</h1>";
echo"<p>Maximo numeros primos: ".max." </p>";
?>
<ol>
<?php
$cont=0;
$anteriores=1;
for ($i=0; $i < max+1; $i++) { 
    if(Primo($i)==false){
        echo("<li>es primo</li>");
    }else if(Primo($i)==true){
        echo("<li>no primo</li>");
    }
    $anteriores++;
}

function Primo($num){
    $cont = 0;
       for ($i=1; $i <= $num; $i++) {
          if ($num % $i==0) $cont = $cont + 1;
       }
    if ($cont==2) return true;
       return false;
    }
?>
</ol>

    