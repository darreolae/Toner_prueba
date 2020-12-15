<?php

$servidor = "mysql:dbname=acti_toner; host=127.0.0.1";
$usuario = "gerencia";
$password = "1234";

try
{
    $pdo = new PDO($servidor, $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
}
catch(PDOException $e)
{
    echo "error de conexión: ".$e->getMessage();
}

?>