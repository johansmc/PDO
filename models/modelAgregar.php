<?php 
$sql = $con->prepare("INSERT INTO libros (titulo, autor, descripcion, fecha) VALUES (?, ?, ?, ?)");
$resultado = $sql->execute([$titulo, $autor, $descripcion, $fecha]);

?>