<?php 
include '../config/conexion.php';

$Id =($_GET['id']);

require_once("../models/modelEliminar.php");
if ($resultado){
    header("Location: ../index.php");
}else{
    echo "Error al eliminar el libro";
}

?>