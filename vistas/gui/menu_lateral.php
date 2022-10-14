<?php
    include("../../mer/conexion.php");
    $con=conectar();


    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con,$sql);
    


?>

<div class="offcanvas offcanvas-start border-end border-2 border-dark" data-bs-scroll="true" data-bs-backdrop="false" 
tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" 
style="background-image: url(../../imagenes/menu/fondo_pagina.png);background-repeat: no-repeat;">
    <div class="offcanvas-header">
                <h2>Menú</h2>
          
        <button id="cerrar" type="button" class="btn-close text-reset text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        
    </div>
    <div class="offcanvas-body">
        <div class="row text-center">
            <?php
                if($query){

                while ($row=mysqli_fetch_array($query)) {  
            ?>
            
            <div class="col-12 text-center">
                <h4>Bienvenido/a</h4>
                <h5> <?php echo $row['nombres']?>&nbsp<?php echo $row['apellidos']?></h5>
            </div>
            </div>
           
            <br><br>
            <div class="col col-lg-12 col-12">
                <a href="menu.php?id=<?php echo $row['id']?>">
                    <p class="btn btn-block w-100 border border-2 border-dark fondo-seccion text-light">
                        <i class="bi bi-house-door-fill"></i>
                        Dashboard principal
                    </p>
                </a>
            </div>
            
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-lg-none d-xl-block">
            <br class="d-lg-none d-xl-block">

            <div class="col col-lg-12 col-12">
                <a href="gestion_dispositivo.php?id=<?php echo $row['id']?>">
                    <link rel="icon" href="../../imagenes/menu/dispositivos.png">
                    <p class="btn btn-block w-100 border border-2 border-dark fondo-seccion text-light">
                        Gestionar Dispositivos
                    </p>
                </a>
            </div>
                
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-lg-none d-xl-block">
            <br class="d-lg-none d-xl-block">
            
            <div class="col col-lg-12 col-12">
                <a  href="consumo_dispositivo.php?id=<?php echo $row['id']?>">
                    <p class="btn btn-block w-100 border border-2 border-dark fondo-seccion text-light">
                        Consumo de Energia
                    </p>
                </a>
            </div>
                
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-lg-none d-xl-block">
            <br class="d-lg-none d-xl-block">

            <div class="col col-lg-12 col-12">
                <a href="gestion_consumo.php?id=<?php echo $row['id']?>">
                    <p class="btn btn-block w-100 border border-2 border-dark fondo-seccion text-light">
                        Gestion de Consumo
                    </p>
                </a>
            </div>
                                    
            <br class="d-none d-md-block">
            <br class="d-none d-md-block">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-lg-none d-xl-block">
            <br class="d-lg-none d-xl-block">
                                    
            <div class="col col-lg-12 col-12 ">
                <a href="gestion_energia.php?id=<?php echo $row['id']?>">
                    <p class="btn btn-block w-100 border border-2 border-dark fondo-seccion text-light">
                        Gestion de Fuente Energetica
                    </p>
                </a>   
            </div>
                
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-lg-none d-xl-block">
            <br class="d-lg-none d-xl-block">
                                    
            <div class="col col-lg-12 col-12">
                <a href="reportes.php?id=<?php echo $row['id']?>">
                    <p class="btn btn-block w-100 border border-2 border-dark fondo-seccion text-light">
                        Reportes
                    </p>
                </a>
            </div>
            <?php
                }
            }
            ?>
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-none d-md-block ">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">
            <br class="d-md-none d-lg-block">

            <div class="col col-lg-12 col-12">
                <a href="home.php">
                    <p class="btn btn-block w-100 border border-2 border-dark  bg-danger text-light">
                        Cerrar sesion
                    </p>
                </a>
            </div>    
        </div>
        
    </div>
</div>



    