<!DOCTYPE HTML>
<html>
	<head>
		<tittle><center><h1>INGRESA TUS CREDENCIALES</h1></tittle>
		<link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</head>
	<body>
		<form action = "logeo.php" method = "POST">
		<div>
            <tr>
			<td><label>Correo</label></td>
			<td><input type="text" placeholder = "ejemplo@mail.com"  name="mail" required></td>
			</tr>
			<tr>
			<td><label>Contraseña</label></td>
			<td><input type="text" placeholder = "Contraseña"  name="contrasena" required></td>
			</tr>
			
		</div>
		</form>
		<form action = "logeo.php" method = "POST">
		<tr>
			<td>
            <input type="submit" name = "ingresa" value="INGRESAR"></td>
			</tr>
		<tr><td><input type="submit" name="registro" value="REGISTRAR"></td></tr>
		</form>

	</body>
</html>