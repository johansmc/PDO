<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php 
include './config/conexion.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

$sql = $con->prepare("INSERT INTO libros (titulo, autor, descripcion, fecha) VALUES (?, ?, ?, ?)");

$resultado = $sql->execute([$titulo, $autor, $descripcion, $fecha]);
if ($resultado){
    header("Location: index.php");
}else{
    echo "Error al agregar el libro";
}

?>