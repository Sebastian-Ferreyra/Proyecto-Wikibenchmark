<?php

require "bootstrap.php";

require "Tablas\Tabla\Usuario.php";
use Tablas\Tabla\Usuario as Usuario;

$nombre = $_POST ["Usuario"];
$clave = $_POST ["Clave"];
$email = $_POST ["Email"];

$usuarios = $entityManager->getRepository("Tablas\Tabla\Usuario")->findBy(["nombre"=>$nombre]);
$usuarios = $entityManager->getRepository("Tablas\Tabla\Usuario")->findBy(["email"=>$email]);

if (count($usuarios) == 1) {
 	
	header("location:register.html");
 }

 else {

 	$usuarioNuevo = new Usuario();

	$usuarioNuevo->setNombre($nombre);
	$usuarioNuevo->setPass($clave);
	$usuarioNuevo->setEmail($email);
	$entityManager->persist($usuarioNuevo);
	$entityManager->flush();

	header("location:login.php");

 }
?>

