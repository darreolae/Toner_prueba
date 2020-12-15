<?php

require("conexion.php");

if(isset($_POST['ingresa']))
{
     $correo = $_POST['mail'];
     $contrasenia = $_POST['contrasena'];

    

    $consulta = $pdo->prepare("SELECT mail,contraseña FROM regi_usua WHERE mail = '$correo' AND contraseña = '$contrasenia'");
    $consulta->execute();

    $count = $consulta->rowCount();

    "Se encontraron: " . $count . " numero de registros ";

   
    
    if($count != 0)
    {
        session_start();
        /*
            Sirve mantener variables o valores por sesion de usuario
            $_SESSION['usuario_name'];
            creas boton que diga cerrar sesion 
            sesion_close();
        */
        header('Location: menu.php');
        //header('Location: ../views/modules/toner.php');
        //include "../views/modules/toner.php";
    }

    else 
    {
        echo '<script type="text/javascript">
        alert("Usuario Incorrecto");
        </script>';
        header('Location: login.php');
        //header("Location: ../views/modules/login.php");
       
    }

}

else if (isset($_POST ['registro']))
{
    header('Location: registro.php');
    //include "../views/modules/registro.php";
}


?>