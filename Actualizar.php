<?php
include './config/conexion.php';
include './controladores/ActualizarFormulario.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

$sql = $con->prepare("UPDATE libros SET titulo = ?, autor = ?, descripcion = ?, fecha = ? WHERE id = ?");
$resultado = $sql->execute([$titulo, $autor, $descripcion, $fecha, $id]);
if ($resultado){
    header("Location: index.php");
}else{
    echo "Error al actualizar el libro";
}

?>