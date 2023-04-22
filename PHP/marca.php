<?php
        error_reporting(0);

        include("conexion.php");

        
    if (isset ($_POST['agregar']) || !empty($_GET['id_marca']))
    {   
        $marca = $_POST['marca'];
        if ($_GET['op']=='1')
        {
            $query = "INSERT INTO `marca`(`nombre_marca`) VALUES ('$marca')";
            $resultado = $conexion->query($query);
        }
        else if ($_GET['op']=='2')
        {
            echo "entra";
            $id_marca = $_GET['id_marca'];
            $query = "DELETE FROM `marca` WHERE id_marca = '$id_marca'";
            $resultado = $conexion->query($query);

        }
        header("Location: ../admin/productos.php");
    } 

        
      
        

?>