<!DOCTYPE html>
<html lang="en">
<?php
//Herencia del la clase usuario
require_once('Usuario.php');

//Se guarda el nombre recogido por URL en una variable ademas se inicializa el array de tosos ls usuarios y los hobbies
$nombreUsuario = $_GET['nombre'];
$ArrayUsuarios;
$arrayhobbie;
//for para recorrer el array de usuarios y comparar con el nombre pasado por URL y asi con el metodo gethobbie asignar el array de hobbies del usuario logueadoD
for ($i = 0; $i < count($ArrayUsuarios); $i++) {
    if ($nombreUsuario == $ArrayUsuarios[$i]->getNombre()) {
        $arrayhobbie = $ArrayUsuarios[$i]->getHobbies();
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bienvenido.css">
    <title>Bienvenido</title>
</head>

<body>

    <div id="contenedor">
        <h1>Bienvenido <?= $nombreUsuario ?> </h1>
        <ul id="lista">
            <?php
            //FOR para imprimir la lista de hobbies
            for ($i = 0; $i < count($arrayhobbie); $i++) {
                $h = $arrayhobbie[$i];
                echo "<li class='elemtoLista'>$h</li>";
            }
            ?>
        </ul>
        <!-- //volver al index -->
        <a id='cerrarSesion' href='index.php'>Cerrar Sesion</a>
    </div>
</body>

</html>