<?php

require("conexion.php");

echo $nom_usua = $_POST['nombre'];
echo $ape_usua = $_POST['apellido'];
echo $dependencia = $_POST['dependencia'];
echo $mail = $_POST['mail'];
echo $contra = $_POST['contrasena'];

$consulta = $pdo->prepare("INSERT INTO `regi_usua` (`nom_usua`, `ape_usua`, `dependencia`, `mail`, `contraseña`) VALUES('$nom_usua','$ape_usua','$dependencia','$mail','$contra')");
$consulta->execute();
header('Location: toner.php');
//header("Location:../index.php");

?>