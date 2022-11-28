<?php
// var_dump($juego);
$juego1=[
    "titulo"=>"cookie clicker",
    "anio"=>2013,
    "pais"=>"Francia",
    "motor"=>"JS",
    "estudio"=>"franchutes"
];
$juego2 =[
    "titulo"=>"LOL",
    "anio"=>2009,
    "pais"=>"EEUU",
    "motor"=>"Unreal Engine 4",
    "estudio"=>"Riot Games"
];
$steam =[$juego1,$juego2];
    $json = json_encode($steam,JSON_UNESCAPED_UNICODE);
if(file_put_contents("juego.json",$json)){
    $mensaje = "se ha creado el json correctamente👌";
}else{
    $mensaje = "no se ha guardado el archivo ❌";
}
 $jsondecode=json_decode();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <p><?= $mensaje?></p>
    <div>
       
    </div>
</body>
</html>