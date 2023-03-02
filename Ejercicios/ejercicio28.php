<?php
    class UnaClase{
        public static function unMetodo(){
            echo "Soy Luis Perez soy desarrollador de software";
        }
    }
    //Objeto instanciado
    $obj=new UnaClase();
    //Accder a la función
    $obj->unMetodo();
    //:: acceder a ese método estático orm.
    //unaClase refencia a clase
    UnaClase::unMetodo();
?>