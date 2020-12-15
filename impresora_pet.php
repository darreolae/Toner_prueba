<?php

include("conexion.php");

$modelo_i = $_POST['modelo_i'];
$serie_i = $_POST['serie_i'];
$marca_i = $_POST['marca_i'];
$folio = $_POST['folio'];

$consulta = $pdo->prepare("INSERT INTO impresora (modelo_i, serie_i, marca_i, folio) VALUES ('$modelo_i', '$serie_i', '$marca_i', '$dependencia', '$folio)");
$consulta->execute();
header('Location: impresoras.php');
//header("Location:../views/modules/impresoras.php");
?>