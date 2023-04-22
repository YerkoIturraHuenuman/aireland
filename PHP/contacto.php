<?php
    include ("conexion.php");
    if ($_GET['op']==1)
    {
        $contacto = $_POST['contacto'];
        $query = "INSERT INTO `contacto`(`contacto`) VALUES ('$contacto')";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==3)
    {
       
        $telefono = $_POST['telefono'];
        $query = "INSERT INTO `contacto`(`telefono`) VALUES ('$telefono')";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==5)
    {
        $ubicacion = $_POST['ubicacion'];
        $query = "INSERT INTO `contacto`(`ubicacion`) VALUES ('$ubicacion')";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==7)
    {
        $horario = $_POST['horario'];
        $query = "INSERT INTO `contacto`(`horario`) VALUES ('$horario')";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==2)
    {
        $contacto = $_GET['contacto'];
        $query = "DELETE FROM contacto WHERE contacto = '$contacto'";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==4)
    {
        $telefono = $_GET['telefono'];
        echo $telefono;
        $query = "DELETE FROM contacto WHERE telefono = '$telefono'";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==6)
    {
        $ubicacion = $_GET['ubicacion'];
        $query = "DELETE FROM contacto WHERE ubicacion = '$ubicacion'";
        $resultado = $conexion->query($query); 
    }
    else if ($_GET['op']==8)
    {
        $horario = $_GET['horario'];
        $query = "DELETE FROM contacto WHERE horario = '$horario'";
        $resultado = $conexion->query($query); 
    }
    
    header("Location: ../admin/contacto.php")


 

?>