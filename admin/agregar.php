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

<body class="fd-1">
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
        
    ?>
    <div class="container pt-5">
        <div class="row p-0 m-0 py-5 d-flex justify-content-center">
            <div class="col- p-0 m-0 mt-2 " style="width: 507px;">
                <div id="img_prev_p" class="row p-0 m-0 border" style="height: 507px;">
                
                </div>
                <form id="edit_admin" action="../PHP/subir.php" method="POST" enctype="multipart/form-data" class="">
                <input type="file" class="form-control rounded-0" id="i_p" name="i_p" accept="image/*" required>
                <div id="borrar_0" class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0">
                    <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                  </div>
            </div>
            <div class="col-12  col-xxl-7 mt-2">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Imagenes secundarias</p>
              <div class="row p-0 m-0 mb-2">
                <div id="img_prev_s1" class="col-1 border p-0 m-0" style="height: 95px; width: 110px;"></div>
                <div class="col">
                  <input type="file" class="form-control rounded-0" id="i_s1" name="i_s[]" accept="image/*">
                  <div id="borrar_1" class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0">
                    <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                  </div>
                </div>
              </div>
              <div class="row p-0 m-0 mb-2">
                <div id="img_prev_s2" class="col-1 border p-0 m-0" style="height: 95px; width: 110px;"></div>
                <div class="col">
                  <input type="file" class="form-control rounded-0" id="i_s2" name="i_s[]" accept="image/*">
                  <div id="borrar_2" class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0">
                    <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                  </div>
                </div>
              </div>
              <div class="row p-0 m-0 mb-2">
                <div id="img_prev_s3" class="col-1 border p-0 m-0" style="height: 95px; width: 110px;"></div>
                <div class="col">
                  <input type="file" class="form-control rounded-0" id="i_s3" name="i_s[]" accept="image/*">
                  <div id="borrar_3" class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0">
                    <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                  </div>
                </div>
              </div>
              <div class="row p-0 m-0 mb-2">
                <div id="img_prev_s4" class="col-1 border p-0 m-0" style="height: 95px; width: 110px;"></div>
                <div class="col">
                  <input type="file" class="form-control rounded-0" id="i_s4" name="i_s[]" accept="image/*">
                  <div id="borrar_4" class="btn decoration-0 text-white montserrat pb-2 f-rosa hf-1 w-100 rounded-0">
                    <p class="mb-1 bold-6">Borrar <span class="material-symbols-outlined position-relative" style="top:5px;">delete</span></p>
                  </div>
                </div>
              </div>
              
            </div>      
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">SKU</p>

              <input class="form-control" name="sku" type="text" placeholder="Codigo" required>
            </div> 
            <div class="col-8 col-lg-3 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Titulo</p>
              <input class="form-control"  name="nombre_producto" type="text" placeholder="Titulo producto">
            </div>
            <div class="col-8 col-lg-3 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Subtitulo</p>
              <input class="form-control" name="subtitulo" type="text" placeholder="Ej: 9000 BTU/h">
            </div>
            <div class="col-4 col-lg-2 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">$ Precio</p>
              <input class="form-control" name="precio" type="text" placeholder="Ej: 250.000">
            </div>
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">BTU</p>
              <select  name="btu" class="form-control" aria-label="Default select example"> 
                <option selected class="c-gris" disabled selected>BTU</option>
                <option value="9000">9000</option>
                <option value="12000">12000</option>
                <option value="18000">18000</option>
                <option value="24000">24000</option>
              </select>
            </div>       
            <div class="col-4 col-lg-2 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Tipo</p>
                <select name="tipo_producto" class="form-control" aria-label="Default select example">  
                                <option  selected class="c-gris" disabled selected>Tipo de producto</option>
                                <option  value="onoff">ON/OFF</option>
                                <option  value="inverter">Inverter</option>
                            </select>
            </div>  
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Marca</p>
              <select name="id_marca" class="form-control" aria-label="Default select example" required>
                <option selected class="c-gris" disabled>Marca</option>

                <?php 
                  $consulta = "SELECT * FROM marca";
                  $resultado4 = mysqli_query($conexion, $consulta);
                  while ($row4 = mysqli_fetch_array($resultado4)){?>
                      <option  value="<?php echo $row4['id_marca']?>"><?php echo $row4['nombre_marca']?></option>
                <?php }?>
              </select>
            </div>
            <div class="col-4 col-lg-1 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Color</p>
              <select name="color" class="form-control" aria-label="Default select example" required>
                                <option  selected class="c-gris" disabled selected>Color</option>
                                <option  value="blanco">Blanco</option>
                                <option  value="negro">Negro</option>
                            </select>
            </div>
            <div class="col-12 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Descripción</p>
              <textarea class="form-control" name="descripcion" type="text" placeholder="Descripción" style="height: 200px;"></textarea>
            </div>              
            <div class="col-12 p-0 m-0 px-2 mt-3">
              <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Información adicional</p>
              <textarea class="form-control" name="info_adicional" type="text" 
              placeholder="BTU : 12.0000 
Medidas : 1,50x50x40
Consumo: 250 WT
Modelo :  Inverter supt
Hecho en: China
Garantia: 12 meses en servicio tecnico de la marca" style="height: 200px;"></textarea>
            </div>
            <div class="col-12 p-0 m-0 px-2 mt-3">
              <button class="btn montserrat text-white f-celeste" type="submit" name="guardar">Subir</button>

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
  <script src="../public/prev_img_3.js"></script>
    <script src="../public/menu_m_admin.js"></script>

</body>




</html>