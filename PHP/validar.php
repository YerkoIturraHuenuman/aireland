<?php
    if (isset($_POST['is']))
    {
    include ("conexion.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM `usuario` WHERE correo='$email' AND pass='$pass'";
    $resultado = $conexion->query($query);
    $row_cnt = mysqli_num_rows($resultado);
 
    
        if ($row_cnt==0)
        {
            //echo "entra1";
            header("location: ../admin/index.php");
        }
            
        else
        {
            //echo "entra";

            session_start();
            $_SESSION["rol"]="admin";
            header("location: ../admin/admin.php"); 
        }       
    }
?>