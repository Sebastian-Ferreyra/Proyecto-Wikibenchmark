<?php

require "bootstrap.php";

require "Tablas/Tabla/Componente.php";

require "Tablas/Tabla/Juego.php";

	$componentes = $entityManager->getRepository("Componente")->findBy([]);
	$juegos = $entityManager->getRepository("Juego")->findBy([]);



?>
<html>
	<head>
		<title>Wikibenchmarks</title>
	</head>
	<body>

		<?php 
			 if (isset ($_POST['Componente']) && isset($_POST['Juego'])){


					$compId = $_POST ["Componente"]; 
					$juegoId = $_POST ["Juego"]; 
					echo $compId;
			    }
  
		?>
		<div align="right">
			<!-- AÑADIRLE LA APARIENCIA DE BOTON CON CSS -->
			<a href="/wikibenchmarks/login.html"> LOGIN </a>
		</div>

		<div align="left">
				<!-- AÑADIRLE LA APARIENCIA DE BOTON CON CSS -->
			<a href="/wikibenchmarks/SubirBenchmark.php"> SUBIR BENCHMMARK </a>
		</div>
		
		<h1 style="text-align:center">WIKIBENCHMARKS</h1>
		<div align="center">
			<form method = "POST" action = "Home.php">
			<TABLE>
				<tr>
					<th>Componentes</th>
					<th>Juegos</th>
				</tr>
				<tr>
					<td>
						<select name="Componente">
	 						<?php
	 							foreach ($componentes as $value) {
	 								echo "<option value=".$value -> getId().">".$value -> getNombre()."</option>";
	 							}
	 						?>
	 					</select>
					</td>
					<td>
						<select name="Juego">
	 						<?php
	 							foreach ($juegos as $value) {
	 								echo "<option value=".$value -> getId().">".$value -> getNombre()."</option>";
	 							}
	 						?>
	 					</select> 
					</td>
				</tr>
			</TABLE>
				<input type="submit" name="submit" class="boton-ingresar" value="Iniciar">
			</form>	 		
 		</div>
 	</body>
</html>