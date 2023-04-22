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
    <div id="menu3" class="p-0 m-0 pt-5 f-gris2 vh-100 m3 display-none" style="z-index: 1;">
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
            $query = "SELECT * FROM contacto";
            $resultado = $conexion->query($query); 
            $resultado2 = $conexion->query($query); 
            $resultado3 = $conexion->query($query);
            $resultado4 = $conexion->query($query);
        ?>
    <div class="container pt-5">
        
        <div class="row pt-5  px-2">
            <div class="col-12 col-xl-6 p-0 p-2">
                <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Correos</p>
                <div class="row f-blanco p-0 m-0 p-4 rounded-3 shadow">
                    <div class="col-9 p-0 m-0 ">
                        <form action="../PHP/contacto.php?op=1" method="post">
                        <input class="form-control montserrat rounded-0 border-end-0"  name="contacto" type="text" placeholder="ventas.aireland@gmail.com">
                    </div>
                    <div class="col-3 p-0 m-0">
                        <button class="btn rounded-0 f-celeste montserrat  bold-6 w-100 h-100 boton-nav" name="agregar" type="submit">Agregar</button> 
                        </form>
                    </div>
                    <div class="row mt-4">
                        <?php 
                            while ($row = $resultado->fetch_assoc())
                            {
                                if ($row['contacto']!=""){
                        ?>     
                                <div class="col-10">
                                    <p class="p-0 m-0 text-dark montserrat bold-5 mb-3"><?php echo $row['contacto']?></p>
                                </div>
                                <div class="col-2">
                                    <a class="btn  c-rosa" href="../PHP/contacto.php?op=2&&contacto=<?php echo $row['contacto']?>"><span class="material-symbols-outlined">delete</span></a>
                                </div>  
                        <?php }
                            }
                        ?>  
                    </div>  
                </div>  
            </div>
            <div class="col-12 col-xl-6 p-0 p-2">
                <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Telefonos</p>
                <div class="row f-blanco p-0 m-0 p-4 rounded-3 shadow">
                    <div class="col-9 p-0 m-0 ">
                        <form action="../PHP/contacto.php?op=3" method="post">
                        <input class="form-control montserrat rounded-0 border-end-0"  name="telefono" type="number" placeholder="56976137638">
                    </div>
                    <div class="col-3 p-0 m-0">
                        <button class="btn rounded-0 f-celeste montserrat  bold-6 w-100 h-100 boton-nav" name="agregar" type="submit">Agregar</button> 
                        </form>
                    </div>
                    <div class="row mt-4">
                        <?php 
                            while ($row2 = $resultado2->fetch_assoc())
                            {
                                if ($row2['telefono']!=""){
                        ?>     
                                <div class="col-10">
                                    <p class="p-0 m-0 text-dark montserrat bold-5 mb-3">+<?php echo $row2['telefono']?></p>
                                </div>
                                <div class="col-2">
                                    <a class="btn  c-rosa" href="../PHP/contacto.php?op=4&&telefono=<?php echo $row2['telefono']?>"><span class="material-symbols-outlined">delete</span></a>
                                </div>  
                        <?php   }
                            }
                        ?>  
                    </div>  
                </div>  
            </div>
            <div class="col-12 col-xl-7 p-0 p-2">
                <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Ubicacion</p>
                <div class="row f-blanco p-0 m-0 p-4 rounded-3 shadow">
                    <div class="col-9 p-0 m-0 ">
                        <form action="../PHP/contacto.php?op=5" method="post">
                        <input class="form-control montserrat rounded-0 border-end-0"  name="ubicacion" type="text" placeholder="Av. José Pedro Alessandri 1242, Ñuñoa, Región Metropolitana">
                    </div>
                    <div class="col-3 p-0 m-0">
                        <button class="btn rounded-0 f-celeste montserrat  bold-6 w-100 h-100 boton-nav" name="agregar" type="submit">Agregar</button> 
                        </form>
                    </div>
                    <div class="row mt-4">
                        <?php 
                            while ($row3 = $resultado3->fetch_assoc())
                            {
                                if ($row3['ubicacion']!=""){
                        ?>     
                                <div class="col-10">
                                    <p class="p-0 m-0 text-dark montserrat bold-5 mb-3"><?php echo $row3['ubicacion']?></p>
                                </div>
                                <div class="col-2">
                                    <a class="btn  c-rosa" href="../PHP/contacto.php?op=6&&ubicacion=<?php echo $row3['ubicacion']?>"><span class="material-symbols-outlined">delete</span></a>
                                </div>  
                        <?php }
                            }
                        ?>  
                    </div>  
                </div>  
            </div>
            <div class="col-12 col-xl-5 p-0 p-2">
                <p class="p-0 m-0 text-white montserrat bold-6 border-bottom mb-3">Horarios</p>
                <div class="row f-blanco p-0 m-0 p-4 rounded-3 shadow">
                    <div class="col-9 p-0 m-0 ">
                        <form action="../PHP/contacto.php?op=7" method="post">
                        <input class="form-control montserrat rounded-0 border-end-0"  name="horario" type="text" placeholder="Lunes - Viernes : 11:00 - 18:00">
                    </div>
                    <div class="col-3 p-0 m-0">
                        <button class="btn rounded-0 f-celeste montserrat  bold-6 w-100 h-100 boton-nav" name="agregar" type="submit">Agregar</button> 
                        </form>
                    </div>
                    <div class="row mt-4">
                        <?php 
                            while ($row4 = $resultado4->fetch_assoc())
                            {
                                if ($row4['horario']!=""){
                        ?>     
                                <div class="col-10">
                                    <p class="p-0 m-0 text-dark montserrat bold-5 mb-3"><?php echo $row4['horario']?></p>
                                </div>
                                <div class="col-2">
                                    <a class="btn  c-rosa" href="../PHP/contacto.php?op=8&&horario=<?php echo $row4['horario']?>"><span class="material-symbols-outlined">delete</span></a>
                                </div>  
                        <?php }
                            }
                        ?>  
                    </div>  
                </div>  
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
    <script src="../public/img_prev.js"></script>
    <script src="../public/procedimientos2.js"></script>
    <script src="../public/menu_m_admin.js"></script>

</body>




</html>