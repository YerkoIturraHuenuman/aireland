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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
    <link rel="stylesheet" href="public/estilo.css">
    <link rel="stylesheet" href="../public/estilo.css">
    
</head>
<body class="f-gris">
<?php error_reporting(0);
    include ("../PHP/conexion.php");
    include ("../PHP/filtro.php");
?>
<header>
    <div id="modal_menu_filtro" class="vh-100 w-75 display-none">
            <div class="row p-0 m-0 my-4 d-flex justify-content-end">
                <span id="btn_filter_exit" type="button" class="material-symbols-outlined c-celeste-oscuro d-flex justify-content-end" style="font-size: 40px;">close</span> 
            </div>
            <div class="row  p-0 m-0 mx-5">
                <form id="a_filtro" method="post">
                        <?php $palabra=""?>
                        <div class="row ">
                            <h6 class="montserrat bold-7 mb-3 p-0">Filtro:</h6>    
                            <div class="row  m-0 pb-3 p-0">
                                <div class="input-group p-0">
                                    <div class="row rounded-2 w-100 borde-animado p-0 m-0 f-gris">
                                        <div class="col-2 px-2 py-2 ">
                                            <img src="../imagenes/search.svg" alt="" style="width: 25px;" class=""> 
                                        </div>
                                        <div class="col px-3 pt-2 center-text  p-0 m-0">
                                            <input class=" border-0 w-100 montserrat f-gris p-0" type="text" id="" placeholder="Buscar" value="<?php echo $palabra;?>" name="palabra">  
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>   
                        </div>
                 

                    
                        <div class="row border-bottom pb-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Tipo</h6>
                            <div class="form-check">
                                <?php $condi=0;
                                    for ($l=0;$l<$g;$l++)
                                    {
                                        if ($filtro[$l]=="onoff")
                                        { $condi=1;?>
                                            <input class="form-check-input" type="checkbox" value="onoff" id="On/Off" name="filtro[]" checked>
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                                                On/Off
                                            </label>
                                <?php   }    
                                    }
                                    if ($condi==0)
                                    {?>
                                            <input class="form-check-input" type="checkbox" value="onoff" id="On/Off" name="filtro[]">
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                                                On/Off
                                            </label>
                                <?php }
                                ?>
                                
                                
                            </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                    for ($l=0;$l<$g;$l++)
                                    {
                                        if ($filtro[$l]=="inverter")
                                        { $condi=1;?>
                                            <input class="form-check-input" type="checkbox" value="inverter" id="Inverter" name="filtro[]" checked>
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                                                Inverter
                                            </label>
                                <?php   }    
                                    }
                                    if ($condi==0)
                                    {?>
                                            <input class="form-check-input" type="checkbox" value="inverter" id="Inverter" name="filtro[]">
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                                                Inverter
                                            </label>
                                <?php }
                                ?>
                                
                            </div>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Marca</h6>
                            <?php 
                            $marca = "SELECT * FROM marca";
                            $resultado4 = $conexion->query($marca);;
                  
                            while ($row4 = mysqli_fetch_array($resultado4)){?>
                                <div class="form-check mt-2">
                                    <?php $condi=0;
                                            for ($l=$i_array;$l<$g;$l++)
                                            {
                                                if ($filtro[$l]==$row4['id_marca'])
                                                { 
                                                    $condi=1;
                                                    $etiquetados[$l]=$row4['nombre_marca']
                                                ?>
                                                    <input class="form-check-input" type="checkbox" value="<?php echo $row4['id_marca']?>" id="<?php echo $row4['nombre_marca']?>" name="filtro[]" checked>
                                                    <label class="form-check-label montserrat bold-7 text-secondary" for="<?php echo $row4['nombre_marca']?>"><?php echo $row4['nombre_marca']?></label>
                                    <?php       }    
                                            }
                                            if ($condi==0)
                                            {?>
                                                <input class="form-check-input" type="checkbox" value="<?php echo $row4['id_marca']?>" id="<?php echo $row4['nombre_marca']?>" name="filtro[]">
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="<?php echo $row4['nombre_marca']?>"><?php echo $row4['nombre_marca']?></label>
                                    <?php   }?>
                                </div>    
                            <?php 
                       
                            }
                            ?>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">BTU</h6>
                            <div class="form-check">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="9000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="9000" id="9000" name="filtro[]" checked>
                                <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                                    9.000
                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="9000" id="9000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                                    9.000
                                </label>
                                    <?php }
                                    ?>
                                
                                </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="12000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="12000" id="12000" name="filtro[]" checked>
                                <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                                    12.000
                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="12000" id="12000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                                    12.000
                                </label>
                                    <?php }
                                    ?>
                                
                            </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="18000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="18000" id="18000" name="filtro[]" checked>
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                                                    18.000
                                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="18000" id="18000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                                    18.000
                                </label>
                                    <?php }
                                    ?>
                                
                            </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="24000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="24000" id="24000" name="filtro[]" checked>
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                                                    24.000
                                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="24000" id="24000" name="filtro[]">
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                                                    24.000
                                                </label>
                                    <?php }
                                    ?>
                            </div>
                            <div class="row p-0 m-0 mt-4 pt-3 d-flex justify-content-center">
                                <?php
                                    for ($l=0;$l<50;$l++)
                                    {
                                        if ($filtro[$l]!="")
                                        {
                                    ?>
                                        <button type="submit" form="a_filtro" name="quitar" value="<?php echo $filtro[$l];?>" class="col mx-2 mb-1 py-2 btn f-invisible montserrat c-celeste bold-6" style="border: solid; border-width:2px;">
                                        <?php echo $filtro[$l];?> 
                                         <i class="fa-solid fa-xmark"></i>
                                        </button> 
                                <?php   }   
                                    }
                                ?>
                            </div>
                        </div>            
                        <div class="row m-0 mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn boton3 mt-2 montserrat border-0 text-white bold-5" name="enviar" style="width: 150px;">Filtrar</button>
                            
                        </div> 
                    </form>
            </div>
                        
            
    </div>

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
        <nav id="fondo_header" class="nav2">
            <div id="menu-pc" class="row p-0 m-0 py-3 " >
                <div class="col-xl-4 col-sm-12">
                        <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">                   
                            <a id="" class=" py-1" href="../index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo"></a>
                        </div>
                </div>
                <div  class="col-md col-sm-12 d-flex align-items-end pb-3 m-0 p-0 d-flex justify-content-sm-center justify-content-xl-start">
                    <div class="row p-0 m-0 " style="width: 640px;">
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item  columnas_header ">                   
                                <a id="" class="btn w-100 border-0  montserrat boton-nav" href="../index.php" role="button" style="width: 100px;">
                                <h5 class="p-0 m-0">INICIO</h5></a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="seccion_tienda" class="nav-item  columnas_header ">                   
                            <a id="boton_tienda" class="btn border-0 w-100  boton-nav montserrat " href="./tienda.php?page=1" role="button">
                                <h5 class="p-0 m-0">TIENDA</h5></a>
                            </a>
                            </div>
                        </div>

                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item   columnas_header ">                   
                                <a id="" class="btn w-100 border-0 boton-nav montserrat " href="./cotizar.php" role="button">
                                    <h5 class="p-0 m-0">COTIZAR</h5></a>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 p-0 m-0 ">
                            <div id="" class="nav-item ">                   
                                <a id="" class="btn w-100  border-0 boton-nav montserrat " href="./contacto.php" role="button">
                                    <h5 class="p-0 m-0">CONTACTO</h5></a>
                                </a>
                            </div>
                        </div>
                    </div>    
                </div>
                
            </div> 
            <div id="menu-movil" class="row p-0 m-0 py-3 " >
                <div class="col-3 ps-5 d-flex align-items-end ">
                        <div id="" class="nav-item my-2 px-0 ">  
                        <button id="btn_hamburger" type="button" class="f-invisible border-0">
                            <span class="material-symbols-outlined text-white " style="font-size:45px;">menu</span>
                        </button>
                        </div>
                </div>
                <div class="col-6 d-flex justify-content-center ">
                        <div id="" class="nav-item my-2 px-0 d-flex justify-content-center">                   
                            <a id="" class=" py-1" href="index.php" role="button"><img src="../imagenes/logo.svg" alt="logo" id="logo" style="height: 150px; width: 150px;"></a>
                        </div>
                </div>
                
            </div>

        </nav>  
    <!--nav1-->
</header >

  <main>
    

    <div  id="" class="container-fluid container-lg container_tienda f-gris mb-5">
    <!--INFO NAVEGACION-->    
        <div class="row p-4">
            <h6 class="montserrat bold-4 center-text m-0 p-0 c-gris ">
                <a href="../index.php" class="text-decoration-none c-gris text-info-nav ">Inicio</a>
                <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;"> 
                <a href="./tienda.php" class="text-decoration-none c-gris text-info-nav">Tienda</a>
            </h6>
        </div>
        
    <!--INFO NAVEGACION--> 
    <div class="row">
        <!--FILTRO-->
            <div id="menu_filtros_pc" class="col-sm-12 col-xl-3 px-5 py-4 f-blanco h-25 me-2" style="">   
                
                <div  class="card border-0 rounded-0">
                <form id="a_filtro" method="post">
                        <?php $palabra=""?>
                        <div class="row ">
                            <h6 class="montserrat bold-7 mb-3 p-0">Filtro:</h6>    
                            <div class="row  m-0 pb-3 p-0">
                                <div class="input-group p-0">
                                    <div class="row rounded-2 w-100 borde-animado p-0 m-0 f-gris">
                                        <div class="col-2 px-2 py-2 ">
                                            <img src="../imagenes/search.svg" alt="" style="width: 25px;" class=""> 
                                        </div>
                                        <div class="col px-3 pt-2 center-text  p-0 m-0">
                                            <input class=" border-0 w-100 montserrat f-gris p-0" type="text" id="" placeholder="Buscar" value="<?php echo $palabra;?>" name="palabra">  
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>   
                        </div>
                 

                    
                        <div class="row border-bottom pb-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Tipo</h6>
                            <div class="form-check">
                                <?php $condi=0;
                                    for ($l=0;$l<$g;$l++)
                                    {
                                        if ($filtro[$l]=="onoff")
                                        { $condi=1;?>
                                            <input class="form-check-input" type="checkbox" value="onoff" id="On/Off" name="filtro[]" checked>
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                                                On/Off
                                            </label>
                                <?php   }    
                                    }
                                    if ($condi==0)
                                    {?>
                                            <input class="form-check-input" type="checkbox" value="onoff" id="On/Off" name="filtro[]">
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="On/Off">
                                                On/Off
                                            </label>
                                <?php }
                                ?>
                                
                                
                            </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                    for ($l=0;$l<$g;$l++)
                                    {
                                        if ($filtro[$l]=="inverter")
                                        { $condi=1;?>
                                            <input class="form-check-input" type="checkbox" value="inverter" id="Inverter" name="filtro[]" checked>
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                                                Inverter
                                            </label>
                                <?php   }    
                                    }
                                    if ($condi==0)
                                    {?>
                                            <input class="form-check-input" type="checkbox" value="inverter" id="Inverter" name="filtro[]">
                                            <label class="form-check-label montserrat bold-7 text-secondary" for="Inverter">
                                                Inverter
                                            </label>
                                <?php }
                                ?>
                                
                            </div>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">Marca</h6>
                            <?php 
                            $marca = "SELECT * FROM marca";
                            $resultado4 = $conexion->query($marca);;
                  
                            while ($row4 = mysqli_fetch_array($resultado4)){?>
                                <div class="form-check mt-2">
                                    <?php $condi=0;
                                            for ($l=$i_array;$l<$g;$l++)
                                            {
                                                if ($filtro[$l]==$row4['id_marca'])
                                                { 
                                                    $condi=1;
                                                    $etiquetados[$l]=$row4['nombre_marca']
                                                ?>
                                                    <input class="form-check-input" type="checkbox" value="<?php echo $row4['id_marca']?>" id="<?php echo $row4['nombre_marca']?>" name="filtro[]" checked>
                                                    <label class="form-check-label montserrat bold-7 text-secondary" for="<?php echo $row4['nombre_marca']?>"><?php echo $row4['nombre_marca']?></label>
                                    <?php       }    
                                            }
                                            if ($condi==0)
                                            {?>
                                                <input class="form-check-input" type="checkbox" value="<?php echo $row4['id_marca']?>" id="<?php echo $row4['nombre_marca']?>" name="filtro[]">
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="<?php echo $row4['nombre_marca']?>"><?php echo $row4['nombre_marca']?></label>
                                    <?php   }?>
                                </div>    
                            <?php 
                       
                            }
                            ?>
                        </div>
                        <div class="row border-bottom pb-3 mt-3">
                            <h6 class="montserrat bold-7 mb-3 p-0">BTU</h6>
                            <div class="form-check">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="9000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="9000" id="9000" name="filtro[]" checked>
                                <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                                    9.000
                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="9000" id="9000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="9000">
                                    9.000
                                </label>
                                    <?php }
                                    ?>
                                
                                </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="12000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="12000" id="12000" name="filtro[]" checked>
                                <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                                    12.000
                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="12000" id="12000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="12000">
                                    12.000
                                </label>
                                    <?php }
                                    ?>
                                
                            </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="18000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="18000" id="18000" name="filtro[]" checked>
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                                                    18.000
                                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="18000" id="18000" name="filtro[]">
                                <label class="form-check-label montserrat bold-7 text-secondary" for="18000">
                                    18.000
                                </label>
                                    <?php }
                                    ?>
                                
                            </div>
                            <div class="form-check mt-2">
                                <?php $condi=0;
                                        for ($l=0;$l<$g;$l++)
                                        {
                                            if ($filtro[$l]=="24000")
                                            { $condi=1;?>
                                                <input class="form-check-input" type="checkbox" value="24000" id="24000" name="filtro[]" checked>
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                                                    24.000
                                                </label>
                                    <?php   }    
                                        }
                                        if ($condi==0)
                                        {?>
                                                <input class="form-check-input" type="checkbox" value="24000" id="24000" name="filtro[]">
                                                <label class="form-check-label montserrat bold-7 text-secondary" for="24000">
                                                    24.000
                                                </label>
                                    <?php }
                                    ?>
                            </div>
                            <div class="row p-0 m-0 mt-4 pt-3 d-flex justify-content-center">
                                <?php
                                    for ($l=0;$l<50;$l++)
                                    {
                                        if ($filtro[$l]!="")
                                        {
                                    ?>
                                        <button type="submit" form="a_filtro" name="quitar" value="<?php echo $filtro[$l];?>" class="col mx-2 mb-1 py-2 btn f-invisible montserrat c-celeste bold-6" style="border: solid; border-width:2px;">
                                        <?php echo $filtro[$l];?> 
                                         <i class="fa-solid fa-xmark"></i>
                                        </button> 
                                <?php   }   
                                    }
                                ?>
                            </div>
                        </div>            
                        <div class="row m-0 mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn boton3 mt-2 montserrat border-0 text-white bold-5" name="enviar" style="width: 150px;">Filtrar</button>
                            
                        </div> 
                    </form>
                </div>
            </div>
            <div id="menu_filtros_movil" class="col-12  mb-2 f-blanco">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center border-end">
                        <button id="btn_filter" type="button" class="btn border-0 c-gris pb-3 montserrat">
                            <span class="material-symbols-outlined" style="position: relative; top:5px;">filter_alt</span> Filtro
                        </button>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <button id="btn_ordendar" type="button" class="btn border-0 c-gris pb-3 montserrat">
                        <span class="material-symbols-outlined" style="position: relative; top:5px;">filter_list</span> Ordenar
                        </button>
                    </div>

                    <div id="modal_ordenar" class="row p-0 m-0 display-none">
                       <form method="post ">
                            <div class="col-12 d-flex justify-content-center pt-3">
                                <button type="submit" value="1" name="ordenar" class="btn boton-nav-hamburger montserrat border-0">Precio menor a mayor</button> 

                            </div>
                            <div class="col-12 d-flex justify-content-center py-3">
                                <button type="submit" value="0" name="ordenar" class="btn boton-nav-hamburger montserrat border-0 ">Precio mayor a menor</button> 
                            </div>
                       </form> 
                    </div>
                </div>
                
                        
            </div>
            
        <!--FILTRO--> 
        <!--PRODUCTOS-->   
            <div class="col-12 col-xl f-blanco">
                <div id="ordenar2" class="row mt-2 px-3 border-bottom border-3 ">
                    <div class="col-6 ">
                        <button id="btn_ordendar2" type="button" class="btn border-0 c-gris pb-3 montserrat">
                        <span class="material-symbols-outlined" style="position: relative; top:5px;">filter_list</span> Ordenar
                        </button>
                    </div>

                    <div id="modal_ordenar2" class="row p-0 m-0 display-none">
                       <form method="post ">
                            <div class="col-12  pt-3">
                                <button type="submit" value="1" name="ordenar" class="btn boton-nav-hamburger montserrat border-0">Precio menor a mayor</button> 

                            </div>
                            <div class="col-12  py-3">
                                <button type="submit" value="0" name="ordenar" class="btn boton-nav-hamburger montserrat border-0 ">Precio mayor a menor</button> 
                            </div>
                       </form> 
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="card border-0 rounded-0 ">
                        <div class="card-body ">
                            <div id="" class="row m-0 p-0 ">
                                    <?php
                                        include ("../PHP/filtro.php");
                                      
                                        $page = $_GET['page'];
                                        if ($page=="")
                                            $page=1;

                                        $limite_ver=6;
                                        $limite_items=5;


                                        $item = 1;
                                        $limit= (($page-1)*$limite_ver)+1;
                                        
                                        $cant=1;
                                        $cant2=1;
                                        if ($consulta=="")
                                        {
                                            $query = "SELECT * FROM productos";
                                            $resultado = $conexion->query($query);  
                                        }                         
                                        else
                                            $resultado = $conexion->query($consulta); 

                                        
                                        while ($row = $resultado->fetch_assoc())
                                        {
                                            
                                            if ($limit<=$cant && $cant2<=$limite_ver)
                                            {    
                                            $sku = $row['sku'];
                                            $color = $row['color'];
                                            $id_marca = $row['id_marca'];
                                            $query2 = "SELECT * FROM imagenes WHERE sku = '$sku' AND tipo_imagen='i_p' AND color='$color'";
                                            $query3= "SELECT * FROM marca WHERE id_marca = '$id_marca'";
                                            $resultado2 = $conexion->query($query2);
                                            $resultado3 = $conexion->query($query3);
                                            $row3 = $resultado3->fetch_assoc();
                                            $row2 = $resultado2->fetch_assoc();
                                    ?>
                                            <div class="col-12 col-sm-6 col-md-6 col-xl-4 card_productos  ">
                                                <div class="card  mb-5 p-0  shadow-sm border-0" >
                                                    <img src="data:image/*;base64,<?php echo base64_encode($row2['imagen'])?>" class="card-img-top object-1" alt="..." style="height:250px;">
                                                    <div class="card-body ">
                                                        
                                                        <h6 class="card-title montserrat bold-6 " style="height:60px;"><?php echo $row['nombre_producto']?>
                                                        <p class="card-text montserrat bold-5 p-0"><?php echo $row['subtitulo']?></p></h6>

                                                        <div class="row  p-0 m-0 pb-2 mt-3">
                                                            <h4 class="montserrat bold-6 p-0 mt-2 ">$ <?php echo $row['precio'];?></h4>
                                                            <div class="row p-0 m-0 mb-4">
                                                                <div class="col-4 col-sm-5 col-md-4 col-lg-3 col-xl-5 col-xxl-5  etiqueta montserrat bold-6 d-flex justify-content-center py-1 me-2 mb-1" style="">
                                                                    <?php 
                                                                        if ($row['id_marca']==$row3['id_marca'])
                                                                            echo $row3['nombre_marca'];
                                                                    ?>
                                                                </div>
                                                                <div class="col-4 col-sm-8 col-md-5 col-lg-4 col-xl-7 col-xxl-6 etiqueta montserrat bold-6 d-flex justify-content-center py-1 mb-1" style="">
                                                                    <?php echo $row['btu']?> BTU
                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <a href="./producto.php?sku=<?php echo $row['sku'];?>&&color=<?php echo $row['color'];?>" class=" boton2  position-absolute top-100 start-50 translate-middle" style="width: 150px; height: 40px;">
                                                            <h6 class="montserrat text-white text-center bold-5 pt-2 center-text border-0">Ver más +</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>    
                                    <?php       $cant2++;
                                            }
                                            
                                            if ($cant2>$limite_ver)
                                            {
                                                $item++;
                                                //break;
                                            }
                                            $cant++;
                                                    
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-5">
                        <?php 
                        $x=1;
                        $r=1;
                        $r2=1;
                        if ($page!=1 && $page!="")
                        {
                            ?>
                            <a id="" href="./tienda.php?page=<?php if ($page>1)echo $page-1; else{echo 1;} ?>" type="submit" class="" style="width: 40px; border-radius: 10px;">
                            <img src="../imagenes/arrow_back_ios.svg" alt="" style="width: 15px;" class="center-text pt-2"> 
                            </a>
                            <?php
                        }
                       
                        
                        if ($page==($item+1))
                            $limite_items=1;
                        for ($i=$page;$i<=$page+($limite_items-1);$i++){
                            
                            if($page==$i && $page!="")
                            {
                            ?>
                            <a id="" href="./tienda.php?page=<?php echo $i?>" type="submit" class="btn montserrat bold-6 boton3 text-white text-center mx-1" style="width: 40px; border-radius: 10px">
                            <?php echo $i?>
                            </a>
                            <?php 
                            }
                            else if ($page!=$i && $i<=$item){
                            ?>
                                <a id="" href="./tienda.php?page=<?php echo $i?>" type="submit" class="btn montserrat bold-6 text-secondary text-center mx-1" style="width: 40px; border-radius: 10px">
                                <?php echo $i?>
                                </a>
                            <?php  
                            }   
                        }
                        if ($item>$page && $page!=""){
                            ?>
                                    <a id="" href="./tienda.php?page=<?php echo $page+1?>" type="submit" class="" style="width: 40px; border-radius: 10px;">
                                    <img src="../imagenes/arrow_forward_ios.svg" alt="" style="width: 15px;" class="center-text pt-2"> 
                                    </a>
                            <?php }?> 
                                                               
                </div>
            </div>
        <!--PRODUCTOS-->   
    </div>  
    </div>




  </main>
  <footer>
    <div class="container-fluid fd-2">
    <div class="container">
        <?php
            include ("../PHP/conexion.php");
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

  <script type="module" src="../public/ordenar.js"></script>
  <script type="module" src="../public/procedimientos2.js"></script>
  <script type="module" src="../public/fo.js"></script>
</body>



</html>