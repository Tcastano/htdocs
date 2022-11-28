<?php
define("ELEMENTOS",rand(1,20));

$miArray=[];

for ($i=0; $i < ELEMENTOS; $i++) { 
    $miArray[$i]=rand(1,20);

}
print_r($miArray);
?>