<?php

require "bootstrap.php";

require "Tablas/Tabla/Usuario.php";

$nombre = $_POST ["Usuario"];

$clave = $_POST ["Clave"]; 



$usuarios = $entityManager->getRepository("Tablas\Tabla\Usuario")->findBy(["pass"=>$clave,"nombre"=>$nombre]);

if (count($usuarios) == 1) {
	header("location:home.php");
 }

 else {
 	header("location:login.html");
}

?>