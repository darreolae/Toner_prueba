<!DOCTYPE HTML>
<html>
	<head>
		<tittle><center><h1>REGISTRO DE USUARIOS</h1></tittle>
	</head>
	<body>
		<form action = "registro_usuarios.php" method = "POST">
		<table>
			<tr>
			<td><label>Nombre</label></td>
			<td><input type="text" name="nombre" placeholder = "Nombre" required></td>
			</tr>
			<tr>
			<td><label>Apellido</label></td>
			<td><input type="text" name="apellido" placeholder = "Apellido" required></td>
			</tr>
			<tr>
			<td><label>Dependencia</label></td>
			<td><input type="text" name="dependencia"placeholder = "Dependencia" required></td>
			</tr>
			<tr>
			<td><label>Correo</label></td>
			<td><input type="text" name="mail"placeholder = "ejemplo@mail.com" required></td>
			</tr>
			<tr>
			<td><label>Contraseña</label></td>
			<td><input type="text" name="contrasena"placeholder = "Contraseña" required></td>
			</tr>
			<tr>
			<td><td><center><input type="submit" name="submit" value="Registrar"></td></td>
			</tr>
			
		</table>
		</form>
	</body>
</html>