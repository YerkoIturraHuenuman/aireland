<?php
error_reporting(0);    
$filtro = $_POST['filtro'];
$palabra = $_POST['palabra'];
$ordenar = $_GET['ordenar'];
$busqueda_admin = $_POST['busqueda_admin'];
$quitar = $_POST['quitar'];
//echo "filtro";
//echo $palabra;
//echo $ordenar;

if (isset ($_POST['enviar']) || isset ($_POST['quitar'])  || isset ($_POST['palabra']) || isset ($_GET['ordenar']) || isset ($_POST['busqueda_admin']))
{
    
    if ($palabra=="" && (empty($ordenar)) && (!empty($filtro)))
    {
        $i=0;
        foreach ($filtro as $cant)
        {
            if ($filtro[$i]==$quitar)
                $filtro[$i]="";
            $i++;
        }
        $i=0;
        $contar=0;
        foreach ($filtro as $cant)
            {
                if ($filtro[$contar]!="")
                    $i++;
                $contar++;
            }
     
        if ($i>0)
        {

        
        $g=0;
        $i=0;
        $j=1;
        $x=0;
        $k=0;
        $array[0] = 'SELECT * FROM productos WHERE ';
        foreach ($filtro as $cant)
        {
            if ($filtro[$i]=='onoff' || $filtro[$i]=='inverter')
            {
                if ($x==0)
                {
                    $array[$j] = "tipo_producto IN ('$filtro[$i]'";
                    $x=1;
                    $j++;
                    $k=1;
                }
                    
                else
                {
                    $array[$j] = ",'$filtro[$i]'";
                    $j++;
                    $k=1;
                }
                
                $g++;
                
            }
            $i++;
            
        }
        $i=0;
        if ($k==1)
        {
            $array[$j] = ")";
            $j++;
            $k=0; 
        }

        foreach ($filtro as $cant)
        {
            $marca = "SELECT * FROM marca";
            $resultado4 = $conexion->query($marca);;
            while ($row4 = mysqli_fetch_array($resultado4))
            {
                if ($filtro[$i]==$row4['id_marca'])
                {
                    
                    if ($x==1)
                    {
                        $array[$j] = " AND id_marca IN ('$filtro[$i]'";
                        $x=2;
                        $j++;
                        $k=1;
                        $i_array=$i;
                    }
                    else if ($x==0)
                    {
                        $array[$j] = " id_marca IN ('$filtro[$i]'";
                        $x=2;
                        $j++;
                        $k=1;
                        $i_array=$i;
                    }
                        
                    else
                    {
                        $array[$j] = ",'$filtro[$i]'";
                        $j++;
                        $k=1;
                    }

                    $g++;  
                }
            }  
            $i++;
        }
        $i=0;
        if ($k==1)
        {
            $array[$j] = ")";
            $j++; 
            $k=0;  
        }
        foreach ($filtro as $cant)
        {
            if ($filtro[$i]=='9000' || $filtro[$i]=='12000' || $filtro[$i]=='18000' || $filtro[$i]=='24000')
            {
                if ($x==2)
                {
                    $array[$j] = " AND btu IN ('$filtro[$i]'";
                    $x=3;
                    $j++;
                    $k=1;
                }
                else if ($x==0)
                {
                    $array[$j] = " btu IN ('$filtro[$i]'";
                    $x=3;
                    $j++;
                    $k=1;
                    
                }
                    
                else
                {
                    $array[$j] = ",'$filtro[$i]'";
                    $j++;
                    $k=1;
                }
                $g++;   
                
            }
            $i++;
        }
        $i=0;
        if ($k==1)
        {
            $array[$j] = ")";
            $j++; 
            $k=0;  
        }


        $consulta="";
        $i=0;    
        foreach ($array as $cant)
        {
            $consulta = $consulta.$cant;
            
        }
        }
    } 
    else if ($palabra!="" && ($ordenar!=0 && $ordenar!=1))
        $consulta = "SELECT * FROM productos WHERE nombre_producto LIKE '%$palabra%' OR subtitulo LIKE '%$palabra%'";
    else if ($ordenar=='1' || $ordenar=='0')
    {
        if ($ordenar==1)
            $consulta = "SELECT * FROM productos ORDER BY precio ASC";
        else if ($ordenar==0)
            $consulta = "SELECT * FROM productos ORDER BY precio DESC";
        
    }
    else if ($busqueda_admin!="")
        $consulta = "SELECT * FROM productos WHERE nombre_producto LIKE '%$busqueda_admin%' OR sku LIKE '%$busqueda_admin%'";



//echo $consulta;
//header("Location: ../paginas/tienda.php");
}




?>