<?php
//Clase es una plantilla
class persona{
    public $nombre; //propiedades
    //Visibilidad
    private $edad; //Acceder desde la clase definida
    protected $altura; //Se puede acceder desde la misma clase , "hredades"

    //Constructor
    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //acciones o métodos
        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Soy programador me llamo ".$this->nombre;
    }
    //Visibilidad
    public function mostrarNombre(){
        $this->edad=30;
        return $this->edad;
    }
}
//Creacion de un objeto a partir de una clase se conoce como instancia
$objAlumno= new persona("Luis Perez desarrollador de software");
//Accedemos->
//$objAlumno->asignarNombre("Luis Perez "); //Llamamos a un método
$objAlumno->imprimirNombre();//Llamando a este método
?>