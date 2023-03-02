<?php
//Clase es una plantilla
class persona{
    public $nombre; //propiedades
    public function asignarNombre($nuevoNombre){ //acciones o métodos
        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Me dedico a trabajar como ".$this->nombre;
    }
}
//Creacion de un objeto a partir de una clase se conoce como instancia
$objAlumno= new persona();
//Accedemos->
$objAlumno->asignarNombre("Luis Perez"); //Llamamos a un método
$objAlumno1= new persona();
$objAlumno1->asignarNombre("Programador web , ");
$objAlumno1->imprimirNombre("Me llamo");

echo $objAlumno->nombre;
?>