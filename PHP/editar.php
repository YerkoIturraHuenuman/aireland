<?php
error_reporting(0);


if (isset ($_POST['guardar']))
{    
    include ("conexion.php");

    
    $id_producto = $_GET["id_producto"];
    $nombre_producto = $_POST['nombre_producto'];
    $subtitulo = $_POST['subtitulo'];
    $precio = $_POST['precio'];
    $sku = $_POST['sku'];
    $id_marca = $_POST['id_marca'];
    $descripcion = $_POST['descripcion'];
    $info_adicional = $_POST['info_adicional'];
    $btu = $_POST['btu'];
    $tipo_producto = $_POST['tipo_producto'];
    $color= $_POST['color'];

    $id_imagen = $_GET["id_imagen"];
    
    if (!empty($_FILES['i_p']['tmp_name']))
    {
        $archivo = addslashes(file_get_contents($_FILES['i_p']['tmp_name']));
        $archivo_name = $_FILES['i_p']['name'];
        $query = "INSERT INTO `imagenes`(`sku`, `nombre_imagen`, `imagen`, `tipo_imagen`, `color`) VALUES ('$sku','$archivo_name','$archivo','i_p','$color')";

        $resultado = $conexion->query($query);
    }

    if (!empty($_FILES['i_s_a']['tmp_name']))
    {
        $i_s_a_name = $_FILES['i_s_a']['name'];
        $i_s_a_tmp = $_FILES['i_s_a']['tmp_name'];
        $i=0;

        foreach ($_FILES['i_s_a']['tmp_name'] as $cont)
        {
            
            if (!empty($i_s_a_name[$i]))
            {
                $i_s_a_tmp[$i] = addslashes(file_get_contents($i_s_a_tmp[$i]));
                echo "entrra";
                $query = 
                "INSERT INTO `imagenes`(`sku`, `nombre_imagen`, `imagen`, `tipo_imagen`, `color`) 
                VALUES ('$sku','$i_s_a_name[$i]','$i_s_a_tmp[$i]','i_s','$color')";
                $resultado = mysqli_query($conexion,$query);
 
            } 
            $i++;
        }

        
    }

    if ($_FILES['archivo']['tmp_name']!=null)
    {
        $archivo = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
        $archivo_name = $_FILES['archivo']['name'];

        $query = "UPDATE imagenes SET nombre_imagen='$archivo_name', imagen='$archivo' WHERE id_imagen = '$id_imagen'";

                    $resultado = mysqli_query($conexion,$query); 
    }    

     echo $btu;
    $query = 
    "UPDATE `productos` SET 
    `id_marca`='$id_marca',
    `sku`='$sku',
    `nombre_producto`='$nombre_producto',
    `subtitulo`='$subtitulo',
    `precio`='$precio',
    `descripcion`='".nl2br($descripcion)."',
    `info_adicional`='".nl2br($info_adicional)."',
    `btu`='$btu',
    `tipo_producto`='$tipo_producto' 
    WHERE `id_producto`='$id_producto'";

    $resultado = $conexion->query($query);
    
    if (!$resultado)
        echo "Error";

        header("Location: ../admin/ui-edit.php?id_producto=$id_producto");
        die();
}
?>