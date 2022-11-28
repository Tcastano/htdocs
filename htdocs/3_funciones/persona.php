<?php
class Persona{
    private $nombre;
    private $altura;
    private $peso;
    protected $patrimonio;

    public function __construct($nombre, $altura, $peso, $patrimonio){
        $this -> nombre = $nombre;
        $this -> altura = $altura;
        $this -> peso = $peso;
        $this -> patrimonio = $patrimonio;
    }
        
    public function getAltura() {
    	return $this->altura;
    }

    
    public function setAltura($altura) {
    	$this->altura = $altura;
    }

    public function getNombre() {
    	return $this->nombre;
    }

    
    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getPeso() {
    	return $this->peso;
    }

    
    public function setPeso($peso) {
    	$this->peso = $peso;
    }

    
    public function getPatrimonio() {
    	return $this->patrimonio;
    }

    
    public function setPatrimonio($patrimonio) {
    	$this->patrimonio = $patrimonio;
    }

    function saludar($nombreTerceraPersona = "Desconocido"){
        return "Hola " . $nombreTerceraPersona;
    }

    
    public function __toString() {
    	return "Altura: {$this->altura}, Nombre: {$this->nombre}, Peso: {$this->peso}, Patrimonio: {$this->patrimonio}";
    }
}

class Trabajador extends Persona{
    private $empresa;
    private $salario;
 

    function __construct($nombre, $altura, $peso, $patrimonio, $empresa, $salario){
        //mirar constructor padre
        parent::__construct($nombre, $altura, $peso, $patrimonio);
        $this -> empresa = $empresa;
        $this -> salario = $salario;
    }
   
    public function getEmpresa() {
    	return $this->empresa;
    }

    
    public function setEmpresa($empresa) {
    	$this->empresa = $empresa;
    }

    public function getSalario() {
    	return $this->salario;
    }

    
    public function setSalario($salario) {
    	$this->salario = $salario;
    }

    function cobrar(){
        $nuevoPatrimonio = $this -> getSalario() + $this -> getPatrimonio();
		$this -> setPatrimonio($nuevoPatrimonio);
    }

    
    public function __toString() {
    	return "Empresa: {$this->empresa}, Salario: {$this->salario}";
    }

}


$trabajador = new Trabajador('Hugo', 190, 90, 2000, "Sublimedia", 1000);
$trabajador -> cobrar();
echo($trabajador -> getPatrimonio());
