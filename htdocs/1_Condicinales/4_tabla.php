<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php




$resultado="";

for ($i=0; $i <11 ; $i++) { 
    echo("<br>");
    echo("<h2>Tabla del $i </h2>");
    echo("<br>");
    for ($j=0; $j <11 ; $j++) { 
        $resultado=$j*$i;
        echo("$i X $j = $resultado");
        echo("<br>");
        
    }
}
?>
</body>
</html>


