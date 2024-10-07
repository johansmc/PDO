<?php
include '../config/conexion.php';
include '../views/ActualizarFormulario.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

require_once ("../models/modelActualizar.php");
if ($resultado){
    header("Location: ../index.php");
}else{
    echo "Error al actualizar el libro";
}

?>