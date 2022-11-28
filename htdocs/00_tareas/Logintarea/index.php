<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>

<body>
    <form action="Control.php" method="post">
        <div id="borde">
            <div id="header">
                <h2>Bienvenido a fabio9.fishing</h2>
            </div>
            <div id="contenedor">
                <div id="mail">
                    <label for="email">Email</label>
                    <input type="mail" id="mail" name="mail" placeholder="mail@mail.com">
                </div>
                <div id="password">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div id="olvidocontrasena">
                    <div id="recordarme">
                        <label for="Recordarme">
                        <input type="checkbox" id="Recordarme" value="Rercordarme">Recordarme
                        </label>
                    </div>
                    <div id="error">
                        <?php
                        //comprobacion del error el cual llama a error en el cual crear un div
                        if (!empty($_GET['error'])) {
                            $error=$_GET['error'];
                            if ($error=='true'){
                                include_once('Error.php');
                            }
                        }
                        ?>
                    </div>
                    <div id="a">
                        <a target="blank" href="https://gfycat.com/candiddistortedhapuku">¿Has olvidado la contraseña?</a>
                    </div>
                </div>
                <div id="enviar">
                    <input type="submit" value="Iniciar Sesion"></input>
                </div>
            </div>
        </div>
    </form>
</body>
</html>