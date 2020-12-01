<?php

if (isset($_POST ['toner']))
{
    header('Location: toner.php');
}
elseif (isset($_POST ['impresoras']))
{
    header('Location: impresoras.php');
}

?>