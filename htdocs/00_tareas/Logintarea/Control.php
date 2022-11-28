<?php
   //herencia de la clase usuarios
   require_once ('Usuario.php');
   //bucle for para recorrer el array de usuarios y comprobar los atriburos de cada uno coinciden con lo introducido en el login
   
   for ($i=0; $i < count($ArrayUsuarios); $i++) {
      if (@$_POST['mail']==$ArrayUsuarios[$i]->getMail() && @$_POST['password']==$ArrayUsuarios[$i]->getPassword()){
         $nombre=$ArrayUsuarios[$i]->getNombre();
         header("Location:Bienvenido.php?nombre=$nombre");
         break;
      }else {
         header("Location:index.php?error=true");
      }
   }
?> 