<?php
//Clase es una plantilla
class persona{
    public $nombre; //propiedades
    //Visibilidad
    private $edad; //Acceder desde la clase definida
    protected $altura; //Se puede acceder desde la misma clase , "calses heredades"

    public function asignarNombre($nuevoNombre){ //acciones o métodos
        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Me dedico a trabajar como ".$this->nombre;
    }
    //Visibilidad
    public function mostrarNombre(){
        $this->edad=30;
        return $this->edad;
    }
}
//Creacion de un objeto a partir de una clase se conoce como instancia
$objAlumno= new persona();
//Accedemos->
$objAlumno->asignarNombre("Luis Perez "); //Llamamos a un método

$objAlumno1= new persona();
$objAlumno1->asignarNombre("Programador web , ");
$objAlumno1->imprimirNombre();

echo $objAlumno->nombre;
//Visibilidad
echo $objAlumno1->mostrarNombre();
?>