<?php
$sql = $con->prepare("UPDATE libros SET titulo = ?, autor = ?, descripcion = ?, fecha = ? WHERE id = ?");
$resultado = $sql->execute([$titulo, $autor, $descripcion, $fecha, $id]);
?>