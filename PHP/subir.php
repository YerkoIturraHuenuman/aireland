<?php
        error_reporting(0);

        include("conexion.php");

        
        $sku = $_POST['sku'];
        $nombre_producto = $_POST['nombre_producto'];
        $subtitulo= $_POST['subtitulo'];
        $precio= $_POST['precio'];
        $btu= $_POST['btu'];
        $tipo_producto= $_POST['tipo_producto'];
        $id_marca= $_POST['id_marca'];
        $descripcion= $_POST['descripcion'];
        $info_adicional= $_POST['info_adicional'];
        $color= $_POST['color'];


        if ($_FILES['i_p']!=null)
        {
            $i_p_name = $_FILES['i_p']['name'];
           $i_p_tmp = addslashes(file_get_contents($_FILES['i_p']['tmp_name']));
           

           $query = 
           "INSERT INTO `imagenes`(`sku`, `nombre_imagen`, `imagen`, `tipo_imagen`, `color`) 
           VALUES ('$sku','$i_p_name','$i_p_tmp','i_p','$color')";
            $resultado = mysqli_query($conexion,$query);

        if (!empty($_FILES['i_s']['tmp_name']))
                {
                    $i_s_name = $_FILES['i_s']['name'];
                    $i_s_tmp = $_FILES['i_s']['tmp_name'];
                    
                    $i=0;
                    echo "entrra";
                    foreach ($_FILES['i_s']['tmp_name'] as $cont)
                    {
                        if (!empty($i_s_name[$i]))
                        {
                            $i_s_tmp[$i] = addslashes(file_get_contents($i_s_tmp[$i]));
                        echo "entrra";
                            $query = 
                            "INSERT INTO `imagenes`(`sku`, `nombre_imagen`, `imagen`, `tipo_imagen`, `color`) 
                            VALUES ('$sku','$i_s_name[$i]','$i_s_tmp[$i]','i_s','$color')";
                            $resultado = mysqli_query($conexion,$query); 
                        }
                        
                        $i++;
                    }
                }
                if (!empty($sku))
                {
                $query = 
                    "INSERT INTO `productos`(`id_marca`, `sku`, `nombre_producto`, `subtitulo`, `precio`, `descripcion`, `info_adicional`, `btu`, `tipo_producto`, `color`) 
                    VALUES ('$id_marca','$sku','$nombre_producto','$subtitulo','$precio','".nl2br($descripcion)."','".nl2br($info_adicional)."','$btu','$tipo_producto','$color')";
                    $resultado = mysqli_query($conexion,$query);  
                    
        
                }
            header("Location: ../admin/productos.php");
        }
      
        
        
        if (!empty($_FILES['i_b']['tmp_name']))
        {
            
            $archivo = addslashes(file_get_contents($_FILES['i_b']['tmp_name']));
            $archivo_name = $_FILES['i_b']['name'];
            //echo "entra";
            $query = 
            "INSERT INTO imagenes(nombre_imagen,imagen,tipo_imagen) 
            VALUES ('$archivo_name','$archivo','i_b')";
            $resultado = mysqli_query($conexion,$query);
            header("Location: ../admin/banners.php");
        }
        

        
      
        

?>