<?php include("cabecera.php");?>
<!-- Establecer conexión con sql -->
<?php include("conexion.php"); ?>
<?php 
//Realizamos la inserción
if($_POST){
    print_r($_POST);
    // Vamos a recepcionar el dato con una variable
    $nombre= $_POST['nombre'];
    // ----------
$objConexion= new conexion();
// Recuperar de la abse de datos
$sql="INSERT INTO `proyecto` (`id`, `Imagen`, `Proyecto`, `Descripción`) VALUES (NULL,'$nombre', 'Desarrollo', 'Imagen.jpg', 'Proyecto realizado con PHP');";
// Insertamos el id
$objConexion->ejecutar($sql);
}
?>
<!-- ----- -->
<br>
<!-- Boostrap -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
<!-- Utulizamos un card -->
<div class="card">
        <div class="card-header">
            Datos del proyecto
        </div>
        <div class="card-body">
            <!-- Es para recpcionar a los archivos multipart/form-data -->
    <form action="portafolio.php" method="post" enctype="multipart/form-data">
    Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
    <br>
    Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
    <br>
    <input class="btn btn-success" type="submit" value="Enviar proyecto">

</form>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
       
        </div>
        <div class="col-md-6">
<!-- table default -->
<!-- <div class="table-responsive"> -->
<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">3</td>
                <td>Aplicaciones Web</td>
                <td>Imagen.</td>
            </tr>
        </tbody>
    </table>
<!-- </div> -->

    </div>
</div>
<!-- ------------ -->

<?php include("pie.php");?>
