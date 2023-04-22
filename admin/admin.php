<?php
session_start();
if(empty($_SESSION['rol'])) 
{
    header("location: ./index.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <script src="https://kit.fontawesome.com/ac893343df.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/estilo.css">

</head>



<body class="fd-2">

<header>
    <div class="container-fluid position-absolute">
        <div class="row d-flex justify-content-end">
            <div class="col-12 pt-3 me-5 d-flex justify-content-end">
                <a href="../PHP/cerrar_sesion.php" class="h-1 decoration-0" name="cs">
                    <p class="montserrat bold-6">Cerrar Sesión <i class="fa-solid fa-right-from-bracket ms-1"></i></p>
                </a>
            </div>
            
        </div>
    </div>
    
</header>

    <main>
        <div class="container vh-100 pt-3">
            <div class="row h-100 py-5 d-flex align-items-center">
                <div class="col-12 col-md-4 pb-2" style="height: 300px;">
                    <a href="./productos.php" class="btn border border-4 h-100 w-100 f-celeste" style="border-radius: 40px;">
                        <div class="row h-100">
                            <div class="col-6  d-flex align-items-center">
                                <h2 class="montserrat text-white border-bottom border-2">Productos</h2> 
                            </div>
                            <div class="col-6  d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-gears text-white" style="font-size: 50px;"></i>                            
                            </div>
                        </div>
                        
                    </a>
                </div>
                <div class="col-12 col-md-4 pb-2" style="height: 300px;">
                    <a href="./banners.php" class="btn border border-4 h-100 w-100 f-rosa" style="border-radius: 40px;">
                        <div class="row h-100">
                            <div class="col-6  d-flex align-items-center">
                                <h2 class="montserrat text-white border-bottom border-2">Banners</h2> 
                            </div>
                            <div class="col-6  d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-gears text-white" style="font-size: 50px;"></i>                            
                            </div>
                        </div>
                        
                    </a>
                </div>
                <div class="col-12 col-md-4 pb-2" style="height: 300px;">
                    <a href="./contacto.php" class="btn border border-4 h-100 w-100 f-celeste-o" style="border-radius: 40px;">
                        <div class="row h-100">
                            <div class="col-6  d-flex align-items-center">
                                <h2 class="montserrat text-white border-bottom border-2">Contacto</h2> 
                            </div>
                            <div class="col-6  d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-gears text-white" style="font-size: 50px;"></i>                            
                            </div>
                        </div>
                        
                    </a>
                </div>
            </div>
        </div>
    </main>
  
       
    

  
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