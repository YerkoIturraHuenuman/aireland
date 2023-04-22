<?php
    $conexion = new mysqli("localhost","root","","aireland");
    if(!$conexion)
    {
        echo "Falló en la conexión";
    }
?>