<?php

require("conexion.php");

$modelo = $_POST['modelo_t'];
$serie = $_POST['serie_t'];
$marca = $_POST['marca_t'];
$fec_imp = $_POST['fec_imp'];

$consulta = $pdo->prepare("INSERT INTO `toner`(`modelo`, `serie`, `marca`, `fec_imp`) VALUES ('$modelo', '$serie', '$marca', '$fec_imp')");
$consulta->execute();
header('Location:toner.php');
//header("Location:../views/modules/toner.php");
?>