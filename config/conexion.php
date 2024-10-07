<?php 
$servidor = "localhost";
 $usuario = "root";
 $password = "";
 $bd = "prueba";

 $con = new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$password);
 try {
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 } catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
 }
?>