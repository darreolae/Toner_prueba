<?php
	session_start();
?>


<!DOCTYPE HTML>
<html>
	<head>
		<tittle><left><h1>PÁGINA DE TONER</h1></tittle>
		<link rel="stylesheet" href="estilos.css?v=<?php echo (rand());  ?>">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="reg_toner">
		<form action = "toner_pet.php" method = "POST">
			<aside>
			<blockquote><tr>
			<td><label>Modelo</label></td>
			<tr><td><input type="text" name="modelo_t" placeholder = "Modelo de toner" required></td></tr>
			</tr></blockquote>
			<blockquote><tr>
			<td><label>Numero de Serie</label></td>
			<td><input type="text" name="serie_t"placeholder = "Serie de toner" required></td>
			</tr></blockquote>
			<blockquote><tr>
			<td><label>Marca</label></td>
			<td><input type="text" name="marca_t"placeholder = "Marca de Toner" required></td>
			</tr></blockquote>
			<blockquote><tr>
			<td><label>Fecha de implementación</label></td>
			<td><input type="text" name="fec_imp"placeholder = "Fecha implementación" required></td>
			</tr></blockquote>
			<tr>
			<td><td><center><input type="submit" name="submit" value="Registrar"></td></td>
			</tr>
</aside>
		</form>
		</div>

	</body>

	<head>
		<tittle><center><h1>REGISTRADOS</h1></tittle>
		</head>
		<body>
			<div id="toners_registrados">
			<table class="table table-bordered table-sm">
				<tr>
					<td>Toner_id</td>
					<td>Modelo</td>
					<td>Serie</td>
					<td>Marca</td>
					<td>Fec_imp</td>
				</tr>
				<?php

					require("conexion.php");

					$consulta = $pdo->prepare("SELECT * FROM toner"); 
    				$consulta->execute();

    				$consulta->setFetchMode(PDO::FETCH_ASSOC); 

    				while ($row = $consulta->fetch()) {

				?>
				<tr>
					<td><?php echo $row['toner_id']?></td>
					<td><?php echo $row['modelo']?></td>
					<td><?php echo $row['serie']?></td>
					<td><?php echo $row['marca']?></td>
					<td><?php echo $row['fec_imp']?></td>
				</tr>
					<?php
						}
					?>
			</table>
			</div>
			
	</body>
</html>