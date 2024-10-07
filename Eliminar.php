<?php 
include './config/conexion.php';

$Id =($_GET['id']);
$sql = $con->prepare("DELETE FROM libros WHERE id = ?");
$resultado = $sql->execute([$Id]);
if ($resultado){
    header("Location: index.php");
}else{
    echo "Error al eliminar el libro";
}

?>