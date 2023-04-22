<?php
session_start();
if(empty($_SESSION['rol'])) 
{
    header("location: ./login.php");
    die();  
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>AireLAND</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- border border-dark --> 
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <script src="https://kit.fontawesome.com/ac893343df.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/estilo.css">
    
</head>

<body class="fd-2">
<header>
    <button id="btn_h3" class="btn position-fixed text-white m-4 f-gris2" style="z-index:5; font-size:25px;"><i class="fa-solid fa-bars"></i></button>
    <div id="menu3" class="p-0 m-0 pt-5 f-gris2 vh-100 m3 display-none" style="z-index:2;">
                    <div class="row p-0 m-0  px-4 mt-5 pt-5">
                        <a href="./productos.php" class="h-1 decoration-0">
                            <p class="montserrat bold-5 border-bottom">Productos</p>
                        </a>
                        
                    </div>
                    <div class="row p-0 m-0  px-4 mt-2">
                        <a href="./banners.php" class="h-1 decoration-0">
                            <p class="montserrat bold-5 border-bottom">Banners</p>
                        </a>
                    </div> 
                    <div class="row p-0 m-0  px-4 mt-2">
                        <a href="./contacto.php" class="h-1 decoration-0">
                            <p class="montserrat bold-5 border-bottom">Contacto</p>
                        </a>
                    </div>              
                    <div class="row w-100 p-0 m-0 px-4 mb-3  position-absolute bottom-0 start-0">
                        <a href="../PHP/cerrar_sesion.php" class="h-1 decoration-0 ">
                            <p class="montserrat bold-5">Cerrar Sesión <i class="fa-solid fa-right-from-bracket ms-1"></i></p>
                        </a>
                    </div>
            </div>
    
</header>

  <main>
    <?php  
        //error_reporting(0);
        include ("../PHP/conexion.php");
        //include ("../PHP/filtro.php");
        $id_producto = $_GET['id_producto'];
        $consulta = "SELECT * FROM productos WHERE id_producto = '$id_producto'"  ;
        $resultado = mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_array($resultado);
        $sku = $row['sku'];
        $consulta = "SELECT * FROM imagenes WHERE sku = '$sku'"  ;
        $resultado2 = mysqli_query($conexion, $consulta);
        $resultado3 = mysqli_query($conexion, $consulta);
        
        $cont=0;
        $cont2=0;
    ?>
    <div class="container">
        <div class="row p-0 m-0 py-5 d-flex justify-content-center">
                <div class="col- p-0 m-0 pt-5 " style="width: 507px;">
                    <div class="row ">
                        <form id="edit_admin" action="../PHP/editar.php?id_producto=<?php echo $row['id_producto']?>&&id_imagen=<?php echo $row['id_imagen']?>" method="POST" enctype="multipart/form-data">

                    <?php   while($row2 = mysqli_fetch_array($resultado2)){
                                if($row2['tipo_imagen']=="i_p" && !empty($row2['imagen'])){$cont++;
                    ?>              <div class="row p-0 m-0 d-flex justify-content-center ">
                                        <div class="row p-0 m-0 f-blanco " style="height: 507px; width: 507px;">
                                            <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen']) ?>" alt="..." class=" p-0 m-0 w-100 h-100 object-1">
                                        </div>
                                        <div class="row p-0 m-0 f-rosa  hf-1">
                                            <a class="btn decoration-0 text-white montserrat pb-2" href="../PHP/eliminar.php?id_producto=<?php echo $row['id_producto']?>&&id_imagen=<?php echo $row2['id_imagen']?>&&op=2">
                                             <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                                            </a>
                                        </div>
                                    </div>
                                    
                    <?php 
                                }
                            }
                                if ($cont==0)
                                {
                    ?>
                                    <div class="col- p-0 m-0 mt-2 " style="width: 507px;">
                                        <div id="img_prev_p" class="row p-0 m-0 border" style="height: 507px; width: 507px;">
                                        
                                        </div>
                                        <form id="edit_admin" action="../PHP/subir.php" method="POST" enctype="multipart/form-data" class="">
                                        <input type="file" class="form-control rounded-0" id="i_p" name="i_p" accept="image/*" required>
                                        <div id="borrar_0" class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0">
                                            <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                                        </div>
                                    </div>
                    <?php       }
                            
                    ?>
                    </div>
                </div>
                <div class="col-12 col-lg p-0 m-0 pt-5 px-4">
                    <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Imagenes subidas</p>

                    <?php   $cont=0;
                            while ($row3 = mysqli_fetch_array($resultado3)){
                                if($row3['tipo_imagen']=="i_s"){ $cont++;?>
                                <div class="row p-0 m-0 mb-3">
                                    <div class="col-1 p-0 m-0 " style="height: 95px; width: 110px;">
                                        <img src="data:image/*;base64,<?php echo base64_encode($row3['imagen']) ?>" alt="..." class="w-100 h-100">

                                    </div>
                                    <div class="col d-flex align-items-center ">
                                        <a class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1" href="../PHP/eliminar.php?id_producto=<?php echo $row['id_producto']?>&&id_imagen=<?php echo $row3['id_imagen']?>&&op=2">
                                            <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                                        </a>
                                    </div>
                                </div>
                    <?php       }
                             } 
                            if ($cont<4)
                            {
                                $cont++;      
                    ?>
                                <div class="row p-0 m-0">
                                    <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Agregar imagen secundaria (Max 4)</p>

                                    <div id="img_prev2" class="col-1 border p-0 m-0" style="height: 95px; width: 110px;"></div>
                                    <div class="col m-0 p-0  ms-3">
                                        <input type="file" class="form-control rounded-0 w-100" id="i_s" name="i_s_a[]" accept="image/*">   
                                        <a class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0" href="./ui-edit.php?id_producto=<?php echo $id_producto?>">
                                            <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                                        </a>       
                                    </div>
                                    
                                </div>
                    <?php   }
                    ?>
                </div>
        </div>
        <div class="row p-0 m-0">
                <div class="row p-0 m-0">
                        <div class="col-2 col-lg-1 p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">SKU</p>
                            <input class="form-control" name="sku" type="text" value="<?php echo $row['sku'] ?>" required>
                        </div>
                        <div class="col-5  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Nombre</p>

                            <input class="form-control" name="nombre_producto" type="text" value="<?php echo $row['nombre_producto'] ?>">
                        </div>
                        <div class="col-5  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Subtitulo</p>

                            <input class="form-control" name="subtitulo" type="text" value="<?php echo $row['subtitulo'] ?>">
                        </div>
                        <div class="col-3 col-lg-2 p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">$ Precio</p>
                            <input class="form-control" name="precio" type="text" value="<?php echo $row['precio']?>">
                        </div>
                        <div class="col-2 col-lg-1  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">BTU</p>

                            <select name="btu" class="form-control" aria-label="Default select example">
                                <?php
                                    if ($row['btu']==9000){?>
                                        <option value="9000" selected>9000</option>
                                        <option value="12000">12000</option>
                                        <option value="18000">18000</option>
                                        <option value="24000">24000</option>
                                <?php }
                                    else if ($row['btu']==12000){?>
                                        <option value="9000" >9000</option>
                                        <option value="12000" selected>12000</option>
                                        <option value="18000">18000</option>
                                        <option value="24000">24000</option>
                                <?php }
                                    else if ($row['btu']==18000){?>
                                        <option value="9000" >9000</option>
                                        <option value="12000">12000</option>
                                        <option value="18000" selected>18000</option>
                                        <option value="24000" >24000</option>
                                <?php }
                                    else if ($row['btu']==24000){?>
                                        <option value="9000" >9000</option>
                                        <option value="12000">12000</option>
                                        <option value="18000">18000</option>
                                        <option value="24000" selected>24000</option>
                                <?php }
                                ?>                               
                                
                            </select>
                        </div>
                        <div class="col-2 col-lg-1  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Tipo</p>

                            <select name="tipo_producto" class="form-control" aria-label="Default select example">
                                    <?php 
                                        if($row['tipo_producto']=="onoff"){?>
                                            <option  value="onoff" selected>ON/OFF</option>
                                            <option  value="inverter">Inverter</option>
                                    <?php }
                                        else if($row['tipo_producto']=="inverter"){?>
                                            <option  value="onoff" >ON/OFF</option>
                                            <option  value="inverter" selected>Inverter</option>
                                    <?php } 
                                    ?>
                            </select>
                        </div>
                        <div class="col-2 col-lg-1  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Marca</p>

                            <select name="id_marca" class="form-control" aria-label="Default select example">
                                    <?php 
                                        $consulta = "SELECT * FROM marca";
                                        $resultado4 = mysqli_query($conexion, $consulta);
                                        while ($row4 = mysqli_fetch_array($resultado4)){

                                        if($row['id_marca']==$row4['id_marca']){?>
                                            <option  value="<?php echo $row4['id_marca']?>" selected><?php echo $row4['nombre_marca']?></option>
                                    <?php }
                                        else {?>       
                                            <option  value="<?php echo $row4['id_marca']?>"><?php echo $row4['nombre_marca']?></option>
                                    <?php }
                                        }   
                                    ?>
                                
                            </select>
                        </div>
                        <div class="col-2 col-lg-1  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Color</p>

                            <select name="color" class="form-control" aria-label="Default select example">
                                    <?php 
                                        if($row['color']=="blanco"){?>
                                            <option  value="blanco" selected>Blanco</option>
                                            <option  value="negro">Negro</option>
                                    <?php }
                                        else if($row['color']=="negro"){?>
                                            <option  value="blanco" >Blanco</option>
                                            <option  value="negro" selected>Negro</option>
                                    <?php }?>
                                     
                                    
                                
                            </select>
                        </div>
                        <div class="col-12  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3" >Descripción</p>

                            <?php
                                $string2 = $row['descripcion'];
                                $string2 = str_replace("<br />","",$string2);           
                            ?>

                            <textarea class="form-control" name="descripcion" type="text" value="<?php echo $string2?>" style="height: 200px;"><?php echo $string2?></textarea>

                        </div>
                        <div class="col-12  p-0 m-0 px-2 mt-2">
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Información adicional</p>

                            <?php
                                $string = $row['info_adicional'];
                                $string = str_replace("<br />","",$string);           
                            ?>
                            <textarea class="form-control" name="info_adicional" type="text" value="<?php echo $string?>" style="height: 200px;"><?php echo $string?></textarea>

                        </div>
                        <div class="col-12  p-0 m-0 px-2 my-4">
                            <button class="btn f-celeste text-white montserrat bold-5" type="submit" name="guardar" >Guardar Cambios</button>
                        </div>
                </div>
                </form>
        </div>
            
    </div>
      
 
        




   



     






















  </main>
  <footer> 
  </footer>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
  <script src="../public/img_prev2.js"></script>
    <script src="../public/busqueda.js"></script>
    <script src="../public/menu_m_admin.js"></script>

</body>




</html>