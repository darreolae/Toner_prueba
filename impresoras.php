<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<tittle><left><h1>PÁGINA DE IMPRESORAS</h1></tittle>
		<link rel="stylesheet" href="impresoras.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</head>
	<body>
		<form action = "impresora_pet.php" method = "POST">
		<aside>
		<blockquote><tr>
			<td><label>Modelo</label></td>
			<td><input type="text" name="modelo_i" placeholder = "Modelo de impresora" required></td>
			</tr></blockquote>
			<blockquote><tr>
			<td><label>Numero de Serie</label></td>
			<td><input type="text" name="serie_i"placeholder = "Serie de impresora" required></td>
			</tr></blockquote>
			<blockquote><tr>
			<td><label>Marca</label></td>
			<td><input type="text" name="marca_i"placeholder = "Marca de impresora" required></td>
			</tr></blockquote>
			<blockquote><tr>
			<td><label>Folio</label></td>
			<td><input type="text" name="folio"placeholder = "Folio" required></td>
			</tr></blockquote>
			<blockquote><tr>
			<td><td><center><input id="registro" class="registro" type="submit" name="submit" value="Registrar"></td></td>
			</tr></blockquote>
			
		</aside>
		</form>

		<form action="toner.php">
			<tr>
			<td><td><center><input id="toner" class="toner" type="submit" name="toner" value="APARTADO TONER"></td></td>
			</tr>
		</form>

	</body>

	<head>
		<tittle><center><h1 id="titulo" class="titulo">IMPRESORAS</h1></tittle>
	</head>
		<body>
			<table>
				<tr>
					<td>Toner_id</td>
					<td>Modelo</td>
					<td>Serie</td>
					<td>Marca</td>
					<td>Dependencia</td>
					<td>Folio</td>
				</tr>
				<?php

				require("conexion.php");

					$consulta = $pdo->prepare("SELECT * FROM impresoras"); 
					$consulta->execute();

					$consulta->setFetchMode(PDO::FETCH_ASSOC); 

					while ($row = $consulta->fetch()) {

				?>
				<tr>
					<td id="seccion_1" class="seccion_1"><?php echo $row['toner_id']?></td>
					<td><?php echo $row['modelo_i']?></td>
					<td><?php echo $row['serie_i']?></td>
					<td><?php echo $row['marca_i']?></td>
					<td><?php echo $row['dependencia']?></td>
					<td><?php echo $row['folio']?></td>
				</tr>
				<?php
					}
				?>
			</table>
		</body>

</html>