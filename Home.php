<?php

require "bootstrap.php";

require "Tablas/Tabla/Componente.php";
require "Tablas/Tabla/Juego.php";
require "Tablas/Tabla/Benchmark.php";
require "Tablas/Tabla/Usuario.php";
require "Tablas/Tabla/Resolucion.php";
require "Tablas/Tabla/Calidad.php";

	$componentes = $entityManager->getRepository('Tablas\Tabla\Componente')->findBy([]);
	$juegos = $entityManager->getRepository('Tablas\Tabla\Juego')->findBy([]);
	$resoluciones = $entityManager->getRepository('Tablas\Tabla\Resolucion')->findBy([]);
	$calidades = $entityManager->getRepository('Tablas\Tabla\Calidad')->findBy([]);
?>
<html>
	<head>
		<title>Wikibenchmarks</title>

		<link href="./public/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<title>Login Wikibenchmarks</title>

		<style type="text/css">
			
			body {
			margin: 0;
			padding: 0;
			background-color: #003333;
			height: 100vh;
			}

			.select-pane {
    		display:none;
			}

			.boton-ingresar {
  			background-color: #e7301c;
  			-webkit-border-radius: 7px;
  			border-radius: 7px;
  			color: #ffffff;
  			border: 0px solid #e7301c;
  			padding:3px;
  			}

  			.login-logo {
			margin-top: 50px;
			margin-bottom: 50px;
			}

			.text-color {
				color: #ffffff;

				
			  
			}

		</style>

	</head>
	<body>

		<?php 
			 if (isset ($_POST['Componente']) && isset($_POST['Juego'])){


					$compId = $_POST ["Componente"]; 

					$juegoId = $_POST ["Juego"];

					$componente = $entityManager->getRepository('Tablas\Tabla\Componente')->findOneBy(['id'=> $compId]);

					$juego = $entityManager->getRepository('Tablas\Tabla\Juego')->findOneBy(['id'=> $juegoId]);

					$Benchmarks = $entityManager->getRepository('Tablas\Tabla\Benchmark')
											   ->findBy([
											   		'id_componente'=>$compId,
											   		'id_juego'=>$juegoId
												]);
					


			    }
  
		?>

<div class="container">
	<div class="row">
		<div class="col-sm-3 nav-container">
		    <div class="form-group">
		    </div>
		 </div>
		 <div class="col-sm-9">
		     <div class="select-pane" id="serie-0">$value</div>
		     <div class="select-pane" id="serie-1">$value</div>
		 </div>
	</div>
</div>

		<div align="right">
			<!-- AÑADIRLE LA APARIENCIA DE BOTON CON CSS -->
			<a href="/wikibenchmarks/login.html"> LOGIN </a>
		</div>

		<div align="left">
				<!-- AÑADIRLE LA APARIENCIA DE BOTON CON CSS -->
			<a href="/wikibenchmarks/SubirBenchmark.php"> SUBIR BENCHMMARK </a>
		</div>
		
		<div align="center">
			<img src="public/WIKIBENCHMARK.png" alt="WIKIBENCHMARKS" height="100" width="450" align="center" class="login-logo">
		<div>

		<div align="center">
			<form method = "POST" action = "Home.php">
			<TABLE>
				<tr>
					<th>Componentes</th>
					<th>Juegos</th>
				</tr>
				<tr>
					<td>
						<select class="form-control nav" name="Componente">				
		        			<option value="" selected disabled>Selecciona un Componente</option>
	 						<?php
	 							foreach ($componentes as $value) {
	 								echo "<option value=".$value -> getId().">".$value -> getNombre()."</option>";
	 							}
	 						?>
		        </select>
					</td>
					<td>
					<select class="form-control nav" name="Juego">	
					<option value="" selected disabled>Selecciona un Juego</option>
	 				<?php
	 					foreach ($juegos as $value) {
	 						echo "<option value=".$value -> getId().">".$value -> getNombre()."</option>";
	 				}
	 				?>
				</select> 
					</td>
				</tr>
			</TABLE>
				<br>
				<div class="form-group">
                	<input type="submit" name="submit" class="boton-ingresar" value="Ver Benchmark">
                </div>
			</form>	 		
 		</div>
 		  <table class="text-color" border="3">
 		  <tr >
 		  	<td colspan="7" style="text-align: center"><?php echo $componente->getNombre() ." - ". $juego->getNombre()?></td>
 		  </tr> 
 		  	<tr>
 		  		<th> Especificaciones </th>
 		  		<th> Resolucion </th>
 		  		<th> Calidad </th>
            	<th> Fps Minimos </th>
            	<th> Fps Medios </th>
            	<th> Fps Maximos </th>
            	<th> Requisitos Minimos </th>
            </tr>
            <?php


				foreach ($Benchmarks as $Benchmark) {

					$calidadId= $Benchmark->getIdCalidad();

					$resolucionId= $Benchmark->getIdResolucion();

					$calidad = $entityManager->getRepository('Tablas\Tabla\Calidad')->findOneBy(['id'=> $calidadId]);

					$resolucion = $entityManager->getRepository('Tablas\Tabla\Resolucion')->findOneBy(['id'=> $resolucionId]);

					echo "<tr>";
					echo "<td>".$componente->getDetalle()."</td>";
					echo "<td>".$resolucion->getResolucionGrafica()."</td>";
					echo "<td>".$calidad->getCalidadGrafica()."</td>";
					echo "<td>".$Benchmark->getFpsMin()."</td>";
					echo "<td>".$Benchmark->getFpsMed()."</td>";
					echo "<td>".$Benchmark->getFpsMax()."</td>";
					echo "<td>".$juego->getRequerimientos()."</td>";
					echo "</tr>";
					
				}

			?>	
                                      
 		   <table/>
 	</body>
</html>