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
    <div id="menu3" class="p-0 m-0 pt-5 f-gris2 vh-100 m3 display-none">
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
        error_reporting(0);
        include ("../PHP/conexion.php");
        include ("../PHP/filtro.php");

    ?>
    <div class="container-fluid vh-100 p-0 pt-5">

        <div class="row  p-0 m-0  h-100 d-flex justify-content-center pt-5">
            
                    <div class="col-12 col-lg-3 py-4 m-0 p-0 px-3">
                        <div class="col-12 ">
                            <div class="row rounded-2 borde-animado p-0 m-0 f-blanco shadow">
                                <div class="col-2  py-2 m-0 d-flex justify-content-center">
                                    <img src="../imagenes/search.svg" alt="" style="width: 25px;" class=""> 
                                </div>
                                <div class="col-9  py-2 px-0">
                                    <form method="post" class="p-0">
                                        <input class="w-100 f-blanco montserrat decoration-0 " type="text" id="" placeholder="Buscar" value="<?php echo $busqueda_admin;?>" name="busqueda_admin">  
                                    </form> 

                                </div>                         
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="../admin/agregar.php" class="btn rounded-0 text-white f-celeste my-4 w-100 boton-nav">
                               <p class="montserrat bold-6 p-0 m-0 py-1">Productos <i class="fa-solid fa-plus"></i></p> 
                            </a>
                        </div>
                            <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Marcas</p>

                        <div class="row p-0 m-0 rounded-3 f-blanco shadow p-4">

                            <div class="col-8 p-0 m-0 ">
                                <form action="../PHP/marca.php?op=1" method="post">
                                <input class="form-control montserrat rounded-0 border-end-0"  name="marca" type="text" placeholder="Marca">
                            </div>
                            <div class="col-4 p-0 m-0 d-flex justify-content-center">
                                <button class="btn rounded-0 f-celeste montserrat  bold-6 w-100 boton-nav" name="agregar" type="submit">Agregar</button> 
                                </form>
                            </div>
                            <div class="row mt-4">
                                <?php 
                                    $query = "SELECT * FROM marca";
                                    $resultado = $conexion->query($query); 
                                    while ($row2 = $resultado->fetch_assoc())
                                    {
                                ?>     
                                    <div class="col-10">
                                        <p class="p-0 m-0 text-dark montserrat bold-5 mb-3"><?php echo $row2['nombre_marca']?></p>

                                    </div>
                                    <div class="col-2">
                                        <a class="btn  c-rosa" href="../PHP/marca.php?op=2&&id_marca=<?php echo $row2['id_marca']?>"><span class="material-symbols-outlined">delete</span></a>
                                    </div>  

                                <?php 
                                    }
                                ?> 
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6  rounded-3 f-blanco shadow overflow-auto " style="height:80vh;">
                        <div class="row pt-3 px-3 border-bottom">
                            <div class="col-2 col-md-1 col-lg-2 col-xl-2">
                                <p class="montserrat bold-6">SKU</p>
                            </div>
                            <div class="col">
                                <p class="montserrat bold-6">Nombre</p>

                            </div>
                            
                        </div>
                        <?php
                        
                        //echo $consulta;
                        if ($consulta=="")
                            $consulta = "SELECT * FROM productos";
                        $resultado = mysqli_query($conexion, $consulta);
                        while ($row = mysqli_fetch_array($resultado))
                        {
                        ?>
                        <div class="row p-3 border-bottom "  >
                            <div class="col-2 col-md-1 col-lg-2 col-xl-2 pt-2 overflow-auto">
                                <p class="montserrat"><?php echo $row['sku']?></p>
                            </div>
                            <div class="col-8 col-md-9 col-lg-8 col-xl-8 pt-2 overflow-auto">
                                <p class="montserrat"><?php echo $row['nombre_producto']?></p>

                            </div>
                            <div class="col-1  p-0 m-0 ">
                                <a href="./ui-edit.php?id_producto=<?php echo $row['id_producto']?>" class="btn text-center c-celeste"><span class="material-symbols-outlined">edit</span></a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal<?php echo $row['id_producto']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">SKU:<?php echo $row['sku'];?> - <?php echo $row['nombre_producto'];?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Seguro que deseas eliminar el producto?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="../PHP/eliminar.php?id_producto=<?php echo $row['id_producto']?>&&sku=<?php echo $row['sku']?>&&color=<?php echo $row['color']?>&&op=1" type="button" class="btn btn-primary">Listo!</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="col-1 p-0 m-0 ">
                                <a class="btn  c-rosa" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id_producto']?>"><span class="material-symbols-outlined">delete</span></a>

                            </div>
                        </div>
                        <?php
                        }  
                        ?>
                    </div>  
            
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
    <script src="../public/procedimientos2.js"></script>
    <script src="../public/menu_m_admin.js"></script>
</body>




</html>