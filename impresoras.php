<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<tittle><left><h1>PÁGINA DE IMPRESORAS</h1></tittle>
		<link rel="stylesheet" href="estilos.css">
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
			<td><td><center><input type="submit" name="submit" value="Registrar"></td></td>
			</tr></blockquote>
			
		</aside>
		</form>
	</body>

	<head>
		<tittle><center><h1>IMPRESORAS</h1></tittle>
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