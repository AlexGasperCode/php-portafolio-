<?php 
// Conectar base de datos
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    //Instrución try
    //PDO conexión a base de datos
    //Try ,chat condiconales de error
    try{
        $conexion= new PDO("mysql:host=$servidor:dbname=alexbase",$usuario,$contraseña);
        //set propiedades a controlar, le pasamos argumentos de error
        $conexion->setAttibute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO 'fotos' ('id', 'nombre'. 'ruta') VALUES (NULL , 'Base de datos', 'foto.jpg'):";
        //Select from
        $sql="SELECT FROM 'fotos";
        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();
        //Nos retorna el resultado de esa sentencia
        $resultado=$sentencia->dba_fetchAll();
        print_r($resultado);
        foreach($resultado as $foto){
            print_r($foto['nombre']);
        }
        $conexion->exec($sql);
        echo "Conexión establecida"; //Clase para conecarse a base de datos
    }catch(PDOException $error){
        echo "Conexión erronea".$error;
    }
?>