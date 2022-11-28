<?php

class Tripulacion{
    //atributos de la clase tripulacion
    private $nombre;
    private $apodo;
    private $edad;
    private $platos;
    //constructoer de la clase tripulacion
    function __construct($nombre,$apodo,$edad,$platos){
        $this->nombre=$nombre;
        $this->apodo=$apodo;
        $this->edad=$edad;
        $this->platos=$platos;
    }
    //getters y setters de los atributos de la clase
    public function setNombre($nombre){
        $this->$nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setEdad($edad){
        $this->$edad=$edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setApodo($apodo){
        $this->$apodo=$apodo;
    }
    public function getApodo(){
        return $this->apodo;
    }
    public function setPlatos($platos){
        $this->$platos=$platos;
    }
    public function getPlatos(){
        return $this->platos;
    }
}

//clase marinero que hereda de la clase tripulacion
class Marinero extends Tripulacion{
    //atributos de la clase tripulación
    private $cubierta;
    //constructor de la clase marinero
    function __construct($nombre,$apodo,$edad,$platos){
    parent::__construct($nombre,$apodo,$edad,$platos);
    $this->cubierta=0;
    }
    //getters y setters de la clase marinero
    public function setCubierta($cubierta){
        $this->cubierta = $cubierta;
    }

    public function getCubierta(){
        return $this->cubierta;
    }
    //metodo limpiar
    public function limpiar(){
        $this->cubierta+=1;
    }
    //metodo tostring de la clase marinero
    function __toString(){
        return " DATOS TRIPULACION<br>***************************
        <br>Rango: ".get_class($this)."
        <br>Nombre: ".$this->getNombre().
        "<br>Apodo: ".$this->getApodo().
        "<br>Edad: ".$this->getEdad()." años
        <br>Platos recogidos: ".$this->getPlatos().
        "<br>Nº veces limpieza de cubierta: ".$this->getCubierta().
        "<br><br>";
    }
}
//clase capitan que hereda de la clase tripulacion
class Capitan extends Tripulacion{
    //atributos de la clase capitan
    private $destino;
    private $mandos;
    //constructor de la clase capitan
    function __construct($nombre,$apodo,$edad,$platos,$destino,$mandos){
        parent::__construct($nombre,$apodo,$edad,$platos);
        $this->destino=$destino;
        $this->mandos=$mandos;
    }
    //getters y setters de la clase capitan
    public function setCubierta($destino,$mandos){
        $this->destino = $destino;
        $this->mandos = $mandos;
    }
    
    public function setDestino($destino){
        $this->destino=$destino;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function setMandos($mandos){
        $this->mandos=$mandos;
    }

    public function getMandos(){
        return "Bienvenido capitan, todo preparado para zarpar";
    }

    //metodo tostring de la clase capitan
    function __toString(){
        return " <br>DATOS TRIPULACION<br>***************************
        <br>Rango: ".get_class().
        "<br>Nombre: ".$this->getNombre().
        "<br>Apodo: ".$this->getApodo().
        "<br>Edad: ".$this->getEdad()." años
        <br>Platos recogidos: ".$this->getPlatos()
        ."<br>".$this->getDestino().
        "<br>".$this->getMandos();
        
    }

}
//objeto marinero
$marinero1 = new Marinero('Hugo Sanchez Garcia','Criptobro',rand(16,43),'Si',5);
$marinero1 ->limpiar();
$marinero1 ->limpiar();
$marinero1 ->limpiar();
$marinero1 ->limpiar();
$marinero1 ->limpiar();
$marinero1 ->limpiar();

echo $marinero1;
//objeto capitan
$capitan1 = new Capitan('Tizziano Castaño Mateu','Patron',rand(35,65),'Si','Torazo','');
echo $capitan1;

?>