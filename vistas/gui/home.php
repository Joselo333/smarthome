<!doctype html>
<html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link href="../estilos/home.css" rel="stylesheet">
        <title>
            Smarthome
        </title>
    </head>

    <body>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
        </script>
  
        <div class="container-fluid">
            
        <div class="row text-center p-4 fondo-seccion">
                
                <div class="col col-lg-2 col-12 text-light">
                    <a href="http://www.fi.uda.cl/">
                        <img 
                            class="img-fluid"
                            src="../../imagenes/header/Logo_Facultad.png"
                            alt="logo uda"    
                        ></a>
                </div>
                <div class="col col-lg-2 col-12 text-light">
                        <a href="https://www.utem.cl/">  
                            <img 
                                class="img-fluid"
                                src="../../imagenes/header/Logo_UTEM3.png"
                                alt="logo utem">
                        </a> 
                </div>
                
                <div class="col col-lg-4 col-12 text-light">
                    <h2>Smart Home</h2>
                </div>
                
                <div class="col col-lg-2 col-12 text-light">
                    <a href="http://www.diicc.uda.cl/">
                        <img 
                            
                            class="img-fluid"
                            src="../../imagenes/header/Logo_DIICC5.png"
                            alt="logo diicc"><br>
                    </a>
                </div>
                <div class="col col-lg-2 col-12 text-light">
                    <a href="http://www.fiuda2030.uda.cl/">
                        <img 

                            class="img-fluid"
                            src="../../imagenes/header/logo_fiuda1.png"
                            alt="logo fiuda">
                    </a>    
                </div>
            </div>
            <div class="row fondo-grupo p-1">
                <div class="col col-lg-12 col-12 text-center text-dark"
                >
                    <h5 style="text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff,
                     0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">
                        Proyecto desarrollado por el Grupo de Investigación Smart City
                    </h5>
                </div>
                
            </div>
            
        </div>
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="col col-lg-9 col-9 ">
                <?php require('../layout/slider.php') ?>
            </div>
            
            <div class="col col-lg-3 col-3 ">
                <?php require('inicio_sesion.php') ?>
            </div>
        </div>
        <br><br><br>
    </div>
<?php require('../layout/footer.php') ?>
