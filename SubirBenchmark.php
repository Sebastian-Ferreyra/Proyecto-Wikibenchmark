<?php

require "bootstrap.php";

require "Tablas/Tabla/Componente.php";

require "Tablas/Tabla/Juego.php";

require "Tablas/Tabla/Resolucion.php";

require "Tablas/Tabla/Calidad.php";

require "Tablas/Tabla/Benchmark.php";

require "Tablas/Tabla/Usuario.php";

use Tablas\Tabla\Benchmark as Benchmark;

	$componentes = $entityManager->getRepository('Tablas\Tabla\Componente')->findBy([]);
	$juegos = $entityManager->getRepository('Tablas\Tabla\Juego')->findBy([]);
	$resoluciones = $entityManager->getRepository('Tablas\Tabla\Resolucion')->findBy([]);
	$calidades = $entityManager->getRepository('Tablas\Tabla\Calidad')->findBy([]);
	$benchmarks = $entityManager->getRepository('Tablas\Tabla\Benchmark')->findBy([]);	

	$FPSMinimos = $_POST ["FPSMinimos"];
	$FPSMedios = $_POST ["FPSMedios"];
	$FPSMaximos = $_POST ["FPSMaximos"];
    $Componente = $_POST ["Componente"];
    $Calidad = $_POST ["Calidad"];
    $Resolucion = $_POST ["Resolucion"];
?>
<html>
<head>
	<title>Wikibenchmarks</title>
</head>
<body>
	<h2> Subir Benchmark </h2>
	<form method = "post" action = "PersistirBenchmark.php">
		<label> <b> FPS Minimos </b> </label>  
		<input type="text" name="FPSMinimos">
			<br>
			<br>
		<label> <b> FPS Medios </b> </label>  
		<input type="text" name="FPSMedios">
			<br>
			<br>
		<label> <b> FPS Maximos </b> </label>  
		<input type="text" name="FPSMaximos">
			<br>
			<br>
			<label> <b> Componente </b> </label>
		<select name="Componente">
	 		<?php
	 		foreach ($componentes as $value) {
	 			echo "<option value=".$value -> getId().">".$value -> getNombre()."</option>";
	 		}
	 		?>
	 	</select>
			<br>
			<br>
			<label> <b> Juego </b> </label>
		<select name="Juego">
	 		<?php
	 		foreach ($juegos as $value) {
	 			echo "<option value=".$value -> getId().">".$value -> getNombre()."</option>";
			}
	 		?>
	 	</select>
			<br>
			<br>
			<label> <b> Resolucion </b> </label>
		<select name="Resolucion">
	 		<?php
	 		foreach ($resoluciones as $value) {
	 			echo "<option value=".$value -> getId().">".$value -> getResolucionGrafica()."</option>";
	 		}
	 		?>
	 	</select>
			<br>
			<br>
			<label> <b> Calidad </b> </label>
		<select name="Calidad">
	 		<?php
	 		foreach ($calidades as $value) {
	 			echo "<option value=".$value -> getId().">".$value -> getCalidadGrafica()."</option>";
	 		}
	 		?>
	 	</select>
			<br>
			<br>
		<input type="submit" value="Subir">
	</form>
</body>
</html>