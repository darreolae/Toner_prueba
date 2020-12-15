<?php

include("conexion.php");

$consulta = $pdo->prepare("INSERT INTO `toner_baja`(`modelo`, `serie`, `marca`, `fec_imp`) VALUES ('$modelo', '$serie', '$marca', '$fec_imp')");
$consulta->execute();
header('Location:toner.php');
?>