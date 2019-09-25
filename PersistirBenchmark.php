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

 	$benchmarkNuevo = new Benchmark();

	$benchmarkNuevo->setFpsMed($FPSMedios);
	$benchmarkNuevo->setFpsMin($FPSMinimos);
	$benchmarkNuevo->setFpsMax($FPSMaximos);
	$benchmarkNuevo->setIdComponente($Componente);
	$benchmarkNuevo->setIdCalidad($Calidad);
	$benchmarkNuevo->setIdResolucion($Resolucion);
	$entityManager->persist($benchmarkNuevo);
	$entityManager->flush();

	header("location:SubirBenchmark.php");


?>