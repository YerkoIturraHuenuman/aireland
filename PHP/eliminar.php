<?php
    include ("conexion.php");
    
    $op=$_GET['op'];
    $id_producto=$_GET['id_producto'];
    $color=$_GET['color'];

    if (!empty($_GET['id_producto'])&& $op!=2)
    {
        $id_producto = $_GET['id_producto'];
        $sku = $_GET['sku'];
        $query = "DELETE FROM productos WHERE id_producto = '$id_producto'";
        $resultado = $conexion->query($query);

        $query = "DELETE FROM imagenes WHERE sku = '$sku'";
        $resultado = $conexion->query($query); 
    }
    if (!empty($_GET['id_imagen']))
    {
        $id_imagen = $_GET['id_imagen'];
        $query = "DELETE FROM imagenes WHERE id_imagen = '$id_imagen'";
        $resultado = $conexion->query($query);

    }

    if($op==1)
    {
        header("Location: ../admin/productos.php");
    }
        
    else if($op==2)
    {
        //echo $id_producto;
        header("Location: ../admin/ui-edit.php?id_producto=$id_producto");
    }
        
    else if($op==3)
    {
        header("Location: ../admin/banners.php" );
    }
        

    



 

?>