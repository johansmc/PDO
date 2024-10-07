
<?php 
include './config/conexion.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

require_once("../models/modelAgregar.php")
if ($resultado){
    header("Location: index.php");
}else{
    echo "Error al agregar el libro";
}

?>