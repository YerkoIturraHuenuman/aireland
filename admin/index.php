<?php
session_start();
if(!empty($_SESSION['rol'])) 
{
    header("location: ./admin.php"); 
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

  
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=outline -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
            rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=round -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
            rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=sharp -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
            rel="stylesheet">
        <!-- https://material.io/resources/icons/?style=twotone -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
            rel="stylesheet">
    <link rel="stylesheet" href="../public/estilo.css">
    
</head>

<body class="fd-2">
  <header>
  </header>

  <main>
    <div class="container  vh-100 ">
        <div class="row p-0 m-0 mt-5 pt-5 d-flex justify-content-center">
            <div id="logo_login" class="col-12 py-5  d-flex justify-content-center">
                <img src="../imagenes/logo.svg" alt="" style="height: 200px; width: 200px;">
            </div>
            <div id="login" class="col-8 col-md-7 col-lg-4 col-xl-3">
                <form action="../PHP/validar.php" method="post">
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label montserrat text-white">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label montserrat text-white">Password</label>
                        <input type="password" class="form-control " id="exampleInputPassword1" name="pass">
                    </div>
                    <button type="submit" class="btn f-celeste text-white montserrat" name="is">Iniciar Sesión</button>
                </form>
                 
                  
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
  <script src="./public/procedimientos2.js"></script>
</body>



</html>