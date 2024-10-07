<?php 
$sql = $con->prepare("DELETE FROM libros WHERE id = ?");
$resultado = $sql->execute([$Id]);

?>