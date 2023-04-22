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


    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=outline -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=round -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=twotone -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">
    <link rel="stylesheet" href="public/estilo.css">

</head>

<body>
    <header>
        <!--nav1-->
        <div id="modal-menu-hamburger" class="vh-100 vw-100 menu-ham display-none">
            <div class="row p-0 m-0 my-4">

                <span id="btn_menu_exit" type="button" class="material-symbols-outlined c-celeste-oscuro" style="font-size: 40px;">close</span>

            </div>
            <div class="row  p-0 m-0 mx-5">

                <h1 type="button" class="montserrat  bold-4 text-center boton-nav-hamburger py-4 border-bottom">
                    <a href="./paginas/tienda.php?page=1" class="boton-nav-hamburger"><span class="material-symbols-outlined ">storefront</span> Tienda
                </h1></a>
                <h1 type="button" class="montserrat  boton-nav-hamburger bold-4 text-center py-4 border-bottom">
                    <a href="./paginas/cotizar.php" class="boton-nav-hamburger"><span class="material-symbols-outlined">shopping_bag</span>Cotizar
                </h1>
                <h1 type="button" class="montserrat  boton-nav-hamburger bold-4 text-center py-4 border-bottom">
                    <a href="./paginas/contacto.php" class="boton-nav-hamburger"><span class="material-symbols-outlined">mail</span> Contacto
                </h1>
            </div>


        </div>




        <nav id="fondo_header" class="nav2 ">
            <div id="menu-pc" class="row p-0 m-0 py-3">
                <div class="col-xl-4 col-sm-12">
                    <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">
                        <a id="" class=" py-1" href="index.php" role="button"><img src="imagenes/logo.svg" alt="logo" id="logo"></a>
                    </div>
                </div>
                <div class="col-md col-sm-12 d-flex align-items-end pb-3 m-0 p-0 d-flex justify-content-sm-center justify-content-xl-start">
                    <div class="row p-0 m-0 " style="width: 640px;">
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item  columnas_header ">
                                <a id="" class="btn w-100 border-0  montserrat boton-nav" href="index.php" role="button" style="width: 100px;">
                                    <h5 class="p-0 m-0">INICIO</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="seccion_tienda" class="nav-item  columnas_header ">
                                <a id="boton_tienda" class="btn border-0 w-100  boton-nav montserrat " href="paginas/tienda.php?page=1" role="button">
                                    <h5 class="p-0 m-0">TIENDA</h5>
                                </a>
                                </a>
                            </div>
                        </div>

                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item   columnas_header ">
                                <a id="" class="btn w-100 border-0 boton-nav montserrat " href="paginas/cotizar.php" role="button">
                                    <h5 class="p-0 m-0">COTIZAR</h5>
                                </a>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item ">
                                <a id="" class="btn w-100  border-0 boton-nav montserrat " href="paginas/contacto.php" role="button">
                                    <h5 class="p-0 m-0">CONTACTO</h5>
                                </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="menu-movil" class="row p-0 m-0 py-3">
                <div class="col-3 ps-4 d-flex align-items-end">
                    <div id="" class="nav-item my-2 px-0 ">
                        <button id="btn_hamburger" type="button" class="f-invisible border-0">
                            <span class="material-symbols-outlined text-white " style="font-size:45px;">menu</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">
                        <a id="" class=" py-1" href="index.php" role="button"><img src="imagenes/logo.svg" alt="logo" id="logo" style="height: 150px; width: 150px;"></a>
                    </div>
                </div>

            </div>

        </nav>
        <!--nav1-->
    </header>

    <main>
        <?php
        error_reporting(0);
        include("./PHP/conexion.php");
        //include ("../PHP/filtro.php");
        $query = "SELECT * FROM imagenes WHERE tipo_imagen='i_b'";
        $resultado = $conexion->query($query);
        $resultado2 = $conexion->query($query);
        $cont = 0;
        ?>
        <div class="container-fluid p-0">
            <!--CARRUSEL-->
            <div class="row m-0  f-invisible" style="">
                <div id="carouselExampleIndicators" class="carousel slide p-0 " data-bs-ride="carousel">
                    <div class="carousel-indicators" style="">
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            if ($cont == 0) {
                        ?> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $cont ?>" class="active" aria-current="true" aria-label="Slide <?php echo $cont ?>"></button>
                            <?php   } else {
                            ?> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $cont ?>" aria-label="Slide <?php echo $cont ?>"></button>
                        <?php   }
                            $cont++;
                        }
                        ?>


                    </div>
                    <div class="carousel-inner">
                        <?php
                        $cont = 0;
                        while ($row = $resultado2->fetch_assoc()) {
                            if ($cont == 0) {
                        ?>
                                <div class="carousel-item active w-100" style="">
                                    <img src="data:image/*;base64,<?php echo base64_encode($row['imagen']) ?>" alt="..." class="w-100 h-100">

                                </div>
                            <?php   } else {
                            ?>
                                <div class="carousel-item h-100">
                                    <img src="data:image/*;base64,<?php echo base64_encode($row['imagen']) ?>" alt="..." class="w-100 h-100">

                                </div>
                        <?php
                            }
                            $cont++;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev h-100" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next h-100" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!--CARRUSEL-->
        </div>


        <div class="container" style="">
            <!--QUEHACEMOS-->
            <div class="row mt-2 p-0 f-blanco">
                <div class="col-md-6 col-xl-4 tarjeta1 px-2  pt-2 ps-xl-2 px-sm-2 pe-md-0" style="height: 450px;">
                    <div class="row h-100 w-100 f-negro p-0 m-0"><img src="./imagenes/quehacemos/ilmalampopumppu-huoneisto.jpeg" alt="" class="h-100 w-100 p-0" style="opacity:65%;"></div>
                    <div class="row position-absolute bottom-0 end-0 mb-4 me-5 pe-3">
                        <div class="row m-0 i-1 ">
                            <h2 class="montserrat mx-4 text-white i-1 bold-7">Climatización Hogar</h2>
                        </div>
                        <div class="row m-0 i-1">
                            <a href="paginas/contacto.php" type="button" class=" boton1 i-1 p-0 mx-4 my-2">
                                <h6 class="montserrat mx-5 text-white text-center bold-5 pt-3 pb-2">Saber más</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 tarjeta1 px-2  pt-2 px-xl-2 px-sm-2" style="height: 450px;">
                    <div class="row h-100 w-100 f-negro p-0 m-0"><img src="./imagenes/quehacemos/service-montage.jpg" alt="" class="h-100 w-100 p-0" style="opacity:65%;"></div>
                    <div class="row position-absolute bottom-0 end-0 mb-4">
                        <div class="row m-0 i-1">
                            <h2 class="montserrat mx-4 text-white i-1 bold-7">Mantenciones</h2>
                        </div>
                        <div class="row m-0 i-1">
                            <a href="paginas/contacto.php" type="button" class=" boton1 i-1 p-0 mx-4 my-2">
                                <h6 class="montserrat mx-5 text-white text-center bold-5 pt-3 pb-2">Saber más</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4 tarjeta1 px-2 pt-2 pe-xl-2 ps-xl-0 px-sm-2" style="height: 450px;">
                    <div class="row h-100 w-100 f-negro p-0 m-0"><img src="./imagenes/quehacemos/7.jpg" alt="" class="h-100 w-100 p-0" style="opacity:65%;"></div>
                    <div class="row position-absolute bottom-0 end-0 mb-4">
                        <div class="row m-0 i-1">
                            <h2 class="montserrat mx-4 text-white i-1 bold-7 pe-5">Climatización Industrial</h2>
                        </div>
                        <div class="row m-0 i-1">
                            <a href="paginas/contacto.php" type="button" class=" boton1 i-1 p-0 mx-4 my-2">
                                <h6 class="montserrat mx-5 text-white text-center bold-5 pt-3 pb-2">Saber más</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12 tarjeta1 p-2 " style="height: 450px;">
                    <div class="row h-100 w-100 f-negro p-0 m-0"><img src="./imagenes/quehacemos/8.jpg" alt="" class="h-100 w-100 p-0" style="opacity:65%;"></div>
                    <div class="row m-0 mt-4 px-4 position-absolute top-50 start-0 translate-middle-y  w-100">
                        <div class="row m-0 i-1 ">
                            <h1 class="montserrat mx-4 text-white i-1 bold-7 d-flex justify-content-end">¿Eres instalador?</h1>
                            <h5 class="montserrat mx-4 text-white i-1 bold-4 d-flex justify-content-end">Conoce nuestro catalogo de productos que tenemos para ti</h5>
                        </div>
                        <div class="row m-0 i-1 d-flex justify-content-end">
                            <a href="paginas/contacto.php" type="button" class=" boton1 i-1 p-0 mx-4 my-2 ">
                                <h6 class="montserrat mx-5 text-white text-center bold-5 pt-3 pb-2">Saber más</h6>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!--QUEHACEMOS-->

        </div>
    </main>

    <footer>
        <div class="container-fluid fd-2">
            <div class="container">
                <?php
                include("../PHP/conexion.php");
                $query = "SELECT * FROM contacto";
                $resultado = $conexion->query($query);
                $resultado2 = $conexion->query($query);
                $resultado3 = $conexion->query($query);
                ?>
                <div class="row " style="">

                    <div class="col-12 col-lg-3 px-5 py-5">
                        <div class="row border-bottom mb-3">
                            <h6 class="montserrat bold-6 text-white p-0">Contacto</h6>
                        </div>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            if ($row['contacto'] != "") {
                        ?>
                                <div class="row h-1 p-0 mb-2">
                                    <div class="col-1 p-0">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="col-11 p-0">
                                        <p class="montserrat bold-5 p-0 m-0">
                                            <?php echo $row['contacto'] ?>
                                        </p>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <?php
                        while ($row2 = $resultado2->fetch_assoc()) {
                            if ($row2['telefono'] != "") {

                        ?>
                                <div class="row h-1 p-0 mb-2">
                                    <a href="https://api.whatsapp.com/send/?phone=<?php echo $row2['telefono'] ?>&text&type=phone_number&app_absent=0" class="decoration-0 h-1">
                                        <div class="row p-0">
                                            <div class="col-1 p-0">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="col-11 p-0">
                                                <p class="montserrat bold-5 p-0 m-0">
                                                    +<?php echo $row2['telefono'] ?>
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
                        while ($row3 = $resultado3->fetch_assoc()) {
                            if ($row3['ubicacion'] != "") {
                        ?>
                                <div class="row h-1 p-0 mb-2">
                                    <div class="col-1 p-0">
                                        <i class="fa-solid fa-location-arrow"></i>
                                    </div>
                                    <div class="col-11 p-0">
                                        <p class="montserrat bold-5 p-0 m-0">
                                            <?php echo $row3['ubicacion'] ?>
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
                                <a href="https://www.instagram.com/aireland_chile/" class="decoration-0 h-1">
                                    <i class="fa-brands fa-instagram" style="font-size: 25px;"></i>
                                </a>
                                <a href="https://www.facebook.com/Aireland.chile" class="decoration-0 h-1 px-2">
                                    <i class="fa-brands fa-facebook" style="font-size: 25px;"></i>
                                </a>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center py-5">
                        <img src="./imagenes/logo.svg" alt="" class="img-fluid" style="height:250px; width:250px;">
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="./public/procedimientos2.js"></script>
</body>



</html>