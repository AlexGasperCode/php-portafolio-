<?php
//Clase utilizando herencia
class persona{
    public $nombre; //propiedades
    //Visibilidad
    private $edad; //Acceder desde la clase definida
    protected $altura; //Se puede acceder desde la misma clase , "hredades"

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
//Herencia. herencia clase padre
class trabajador extends persona{
    public $puesto; //Nueva propiedad
    public function presentarseComoTrabajador(){
        echo "Desarrollador de software ".$this->nombre." en PHP ";//.$this->edad;
    }
}
//Creacion de un objeto a partir de una clase se conoce como instancia
$objTrabajador= new trabajador();
$objTrabajador->asignarNombre("Luis Aznar"); //Llamamos a un método, Accedemos->
$objTrabajador->puesto="Profesor";
//Herencia
$objTrabajador->presentarseComoTrabajador();
