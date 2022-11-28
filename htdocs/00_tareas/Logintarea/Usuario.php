<?php
    class Usuario{
        // atributos de la clase Usuarios
            private $nombre;
            private $apellidos;
            private $mail;
            private $password;
            private $hobbie=[];
        //Constructor de la clase Usuarios
            function __construct($nombre,$apellido,$mail,$password,$hobbie){
                $this->nombre=$nombre;
                $this->apellido=$apellido;
                $this->mail=$mail;
                $this->password=$password;
                $this->hobbie=$hobbie;
            }
        //Getters y Setters de la clase Usuarios
            public function setNombre($nombre){
                $this->$nombre=$nombre;
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function setApellidos($apellidos){
                $this->$apellidos=$apellidos;
            }
            public function getApellidos(){
                return $this->apellidos;
            }
            public function setMail($mail){
                $this->$mail=$mail;
            }
            public function getMail(){
                return $this->mail;
            }
            public function setPassword($password){
                $this->password=$password;
            }
            public function getPassword(){
                return $this->password;
            }
            public function setHobbies($hobbie){
                $this->hobbie=$hobbie;
            }
            public function getHobbies(){
                return $this->hobbie;
            }
        //Metodo tu string de la clase Usuarios
            function __toString(){
                return " DATOS USUARIO<br>**
                <br>Nombre: ".$this->getNombre().
                "<br>Apellidos: ".$this->getApellidos().
                "<br>Email: ".$this->getMail().
                "<br>Contraseña: 
                <br><br>";
            }
        }   
        //Usuarios creados
        $usuario1 = new Usuario('Tizziano Nahuel','Castano Mateu','Tizziano@afa-formacion.com','1',['Futbol⚽','Esquiar⛷️']);
        $usuario2 = new Usuario('Hugo','Sanchez Garcia','HugoSG@afa-formacion.com','2',['Futbol⚽','CRYPTOS🪙']);
        $usuario3 = new Usuario('Siro','Gracia Eguren','SiroGE@afa-formacion.com','3',['Cookie Clicker🍪','Perder Kahoots❓']);
        
        $ArrayUsuarios=[$usuario1,$usuario2,$usuario3];
?>