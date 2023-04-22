<!doctype html>
<html lang="en">

<head>
    <title>AireLAND</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- border border-dark -->
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <script src="https://kit.fontawesome.com/ac893343df.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/estilo.css">

</head>

<body class="f-blanco">
    <header>
        <div id="modal-menu-hamburger" class="vh-100 vw-100 menu-ham display-none">
            <div class="row p-0 m-0 my-4">
                
                <span id="btn_menu_exit" type="button" class="material-symbols-outlined c-celeste-oscuro" style="font-size: 40px;">close</span> 
            
            </div>
            <div class="row  p-0 m-0 mx-5">

                <h1 type="button" class="montserrat  bold-4 text-center boton-nav-hamburger py-4 border-bottom">
                   <a href="./tienda.php?page=1" class="boton-nav-hamburger"><span class="material-symbols-outlined ">storefront</span> Tienda</h1></a>
                <h1 type="button" class="montserrat  boton-nav-hamburger bold-4 text-center py-4 border-bottom">
                    <a href="./cotizar.php" class="boton-nav-hamburger"><span class="material-symbols-outlined">shopping_bag</span>Cotizar</h1>
                <h1  type="button" class="montserrat  boton-nav-hamburger bold-4 text-center py-4 border-bottom" >
                    <a href="./contacto.php" class="boton-nav-hamburger"><span class="material-symbols-outlined">mail</span> Contacto</h1>
            </div>
                        
            
        </div>
        <!--nav1-->
        <nav id="fondo_header" class="nav2 ">
            <div id="menu-pc" class="row p-0 m-0 py-3">
                <div class="col-xl-4 col-sm-12">
                    <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">
                        <a id="" class=" py-1" href="../index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo"></a>
                    </div>
                </div>
                <div class="col-md col-sm-12 d-flex align-items-end pb-3 m-0 p-0 d-flex justify-content-sm-center justify-content-xl-start">
                    <div class="row p-0 m-0 " style="width: 640px;">
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item  columnas_header ">
                                <a id="" class="btn w-100 border-0  montserrat boton-nav" href="../index.php" role="button" style="width: 100px;">
                                    <h5 class="p-0 m-0">INICIO</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="seccion_tienda" class="nav-item  columnas_header ">
                                <a id="boton_tienda" class="btn border-0 w-100  boton-nav montserrat " href="./tienda.php?page=1" role="button">
                                    <h5 class="p-0 m-0">TIENDA</h5>
                                </a>
                                </a>
                            </div>
                        </div>

                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item   columnas_header ">
                                <a id="" class="btn w-100 border-0 boton-nav montserrat " href="./cotizar.php" role="button">
                                    <h5 class="p-0 m-0">COTIZAR</h5>
                                </a>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item ">
                                <a id="" class="btn w-100  border-0 boton-nav montserrat " href="./contacto.php" role="button">
                                    <h5 class="p-0 m-0">CONTACTO</h5>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="menu-movil" class="row p-0 m-0 py-3">
                <div class="col-3 ps-5 d-flex align-items-end">
                    <div id="" class="nav-item my-2 px-0 ">
                        <button id="btn_hamburger" type="button" class="f-invisible border-0">
                            <span class="material-symbols-outlined text-white " style="font-size:45px;">menu</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">
                        <a id="" class=" py-1" href="index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo" style="height: 150px; width: 150px;"></a>
                    </div>
                </div>

            </div>

        </nav>
        <!--nav1-->
    </header>

    <main>
        <?php
            include ("../PHP/conexion.php");
            $query = "SELECT * FROM contacto";
            $resultado = $conexion->query($query); 
            $resultado2 = $conexion->query($query); 
            $resultado3 = $conexion->query($query); 
            $resultado4 = $conexion->query($query); 
            $resultado5 = $conexion->query($query); 
            $resultado6 = $conexion->query($query); 
        ?>
        <div class="container">
            <div class="row mt-5 mx-2" style="">

                <div class="col-sm-12 col-lg-8 shadow me-2 h-100">
                    <div class="row p-0 mt-5">
                        <h6 class="montserrat bold-7 text-center">Contacto</h6>
                        <h5 class="montserrat bold-7 text-center">Nos comunicaremos contigo ;)</h5>
                    </div>
                    <form action="../PHP/correos.php?op=2" method="POST" enctype="multipart/form-data">
                        <div class="form-floating mt-4 mx-5">
                            <input type="text" class="form-control " name="nombre" id="floatingInput" placeholder="Nombre" required>
                            <label for="floatingInput">
                                <p class="montserrat">Nombre</p>
                            </label>
                        </div>

                        <div class="row p-0 m-0 mx-5">
                            <div class="col-sm-12 col-lg p-0 m-0 pe-lg-1">
                                <div class="form-floating mt-2 ">
                                    <input type="email" class="form-control" name="correo" id="floatingInput" placeholder="ejemplo@gmail.com" required>
                                    <label for="floatingInput">
                                        <p class="montserrat">Correo</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg p-0 m-0 ps-lg-1">
                                <div class="form-floating mt-2 ">
                                    <input type="text" class="form-control" name="telefono" id="floatingInput" placeholder="ejemplo@gmail.com" required>
                                    <label for="text">
                                        <p class="montserrat">Telefono</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mt-2 mx-5">
                            <textarea class="form-control" name="consulta" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea required>
                        <label for="floatingTextarea2" class="montserrat">Consulta</label>
                        </div>
                    <div class="row p-0 mt-2 d-flex justify-content-center">
                       <button type="submit" class="btn mt-2 mb-4 boton3 border- montserrat text-white bold-5" name="enviar" style="width: 150px;">Enviar</button> 
                    </div>
                    
                </form>
            </div>

            <div class="col c-blanco shadow p-0 px-2 py-5 h-100 mt-sm-4 mt-md-0">
                <div class="row p-0 m-0">
                    <div class="col-2 p-0 m-0 d-flex justify-content-center  align-items-center"><img src="../imagenes/ubicacion.png" alt="" class="" style="width: 28px; height: 28px;"></div>
                    <div class="col-8 p-0 m-0 ">
                        <h4 class="montserrat bold-6 p-0 m-0">Dónde estamos</h4>
                    </div>
                </div>
                <?php 
                    while ($row4 = $resultado4->fetch_assoc())
                    {
                        if ($row4['ubicacion']!=""){
                ?>
                <p class="montserrat bold-5 mt-2 ms-5 ps-2 "><?php echo $row4['ubicacion']?></p>
                <?php }}?>
                <div class="row p-0 m-0 mt-5 mb-2">
                    <div class="col-2 p-0 m-0 d-flex justify-content-center align-items-center"><img src="../imagenes/telefono.svg" alt="" class="img-fluid" style="width: 23px; height: 23px;"></div>
                    <div class="col-8 p-0 m-0 ">
                        <h4 class="montserrat bold-6 p-0 m-0">Teléfono</h4>
                    </div>
                </div>
                <?php 
                    while ($row5 = $resultado5->fetch_assoc())
                    {
                        if ($row5['telefono']!=""){
                ?>
                <p class="montserrat bold-5 m-0 ms-5 ps-2 ">+<?php echo $row5['telefono']?></p>
                <?php }}?>
                <div class="row p-0 m-0 mt-5 mb-2">
                    <div class="col-2 p-0 m-0 d-flex justify-content-center align-items-center"><img src="../imagenes/reloj.svg" alt="" class="img-fluid" style="width: 22px; height: 23px;"></div>
                    <div class="col-8 p-0 m-0 ">
                        <h4 class="montserrat bold-6 p-0 m-0">Horario de Atención</h4>
                    </div>
                </div>
                <?php 
                    while ($row6 = $resultado6->fetch_assoc())
                    {
                        if ($row6['horario']!=""){
                ?>
                <p class="montserrat bold-5 m-0 ms-5 px-2 "><?php echo $row6['horario']?></p>
                <?php }}?>
            </div>    
        </div>
        <div class="row px-2 my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.352577426512!2d-70.59924558420174!3d-33.46617020570652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cfc270900eb7%3A0x330e0d87329f4a5f!2sUniversidad%20Tecnol%C3%B3gica%20Metropolitana%2C%20Campus%20Macul!5e0!3m2!1ses-419!2scl!4v1669698058396!5m2!1ses-419!2scl" 
                width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
             

  </main>
  <footer>
    <div class="container-fluid fd-2">
    <div class="container">
        
        <div class="row " style="">
            
            <div class="col-12 col-lg-3 px-5 py-5">
                    <div class="row border-bottom mb-3">
                        <h6 class="montserrat bold-6 text-white p-0">Contacto</h6>                    
                    </div>
                <?php 
                    while ($row = $resultado->fetch_assoc())
                    {
                        if ($row['contacto']!=""){
                ?>
                    <div class="row h-1 p-0 mb-2">
                        <div class="col-1 p-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="col-11 p-0">
                            <p class="montserrat bold-5 p-0 m-0">
                                <?php echo $row['contacto']?>
                            </p>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>    
                <?php 
                    while ($row2 = $resultado2->fetch_assoc())
                    {
                        if ($row2['telefono']!=""){

                ?>
                    <div class="row h-1 p-0 mb-2">
                        <a href="https://api.whatsapp.com/send/?phone=<?php echo $row2['telefono']?>&text&type=phone_number&app_absent=0" class="decoration-0 h-1">
                            <div class="row p-0" >
                                <div class="col-1 p-0">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="col-11 p-0">
                                    <p class="montserrat bold-5 p-0 m-0">
                                    +<?php echo $row2['telefono']?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php   }
                    }
                ?>
                    
                 
    
            </div>
            <div class="col-12 col-lg-3 px-5 py-5">
                    <div class="row h-1 p-0 border-bottom mb-3">
                        <h6 class="montserrat bold-6 text-white p-0">Ubicación</h6>

                    </div>
                    <?php 
                    while ($row3 = $resultado3->fetch_assoc())
                    {
                        if ($row3['ubicacion']!=""){
                ?>
                    <div class="row h-1 p-0 mb-2">
                        <div class="col-1 p-0">
                            <i class="fa-solid fa-location-arrow"></i>
                        </div>
                        <div class="col-11 p-0">
                            <p class="montserrat bold-5 p-0 m-0">
                                <?php echo $row3['ubicacion']?>
                            </p>
                        </div>
                    </div>
                <?php }
                    }
                ?>
                    
                    
            </div>
            <div class="col-12 col-lg-3 px-5 py-5">
                    <div class="row h-1 p-0 border-bottom mb-3">
                        <h6 class="montserrat bold-6 text-white p-0">Encuentranos en</h6>

                    </div>
                    <div class="row h-1 p-0 mb-2">
                        <div class="col-12 p-0">
                            <a href="https://www.instagram.com/aireland_chile/" class="decoration-0 h-1" >
                                <i class="fa-brands fa-instagram" style="font-size: 25px;"></i>
                            </a>
                            <a href="https://www.facebook.com/Aireland.chile" class="decoration-0 h-1 px-2">
                                <i class="fa-brands fa-facebook" style="font-size: 25px;"></i>
                            </a>
                            
                        </div>
                        
                    </div>
                    
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center py-5">
                <img src="../imagenes/logo.svg" alt="" class="img-fluid" style="height:250px; width:250px;">
            </div>
        </div>
    </div>
    
    </div>
  </footer>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
  <script src="../public/procedimientos2.js"></script>
</body>



</html>