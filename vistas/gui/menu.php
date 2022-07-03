<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>

<div 
    style="background-image: url('../../imagenes/header/fondo_seccion.webp');"
    class="container-fluid">
    
    <br>
    <div class="row">
        
        <h3 class="text-center">
            <b>Menú</b>
        </h3>
        
    </div>
    <br>
    
    <div class="row text-center">
         
        <div class="col col-lg-1 col-12"></div>
        
        <div class="col col-lg-2 col-12 border border-2 border-success">
            <a class="enlaces" href="gestion_dispositivo.php">
            <img class="img-fluid" src="../../imagenes/menu/dispositivos.png" alt="">
            <p class="btn btn-success btn-block">
                Gestionar Dispositivos
            </p>
            </a>
        </div><br>
        
        <div class="col col-lg-2 col-12"></div>
        
        <div class="col col-lg-2 col-12 border border-2 border-success">
            <a  href="consumo_dispositivo.php">
            <img class="img-fluid" src="../../imagenes/menu/consumo_de_energia.png" alt="">
            <p class="btn btn-success btn-block">
                Consumo de Energia
            </p>
            </a>
        </div>
     
        <div class="col col-lg-2 col-12"></div>
        
        <div class="col col-lg-2 col-12 border border-2 border-success">
            <a href="gestion_consumo.php">
            <img class="img-fluid" src="../../imagenes/menu/gestion_de_consumo.png" alt="">
            <p class="btn btn-success btn-block">
                Gestion de Consumo
            </p>
            </a>
        </div>
        
        <div class="col col-lg-3 col-12"></div>
        
        <div class="col col-lg-2 col-12 border border-2 border-success">
            <a href="gestion_energia.php">
            <img class="img-fluid" src="../../imagenes/menu/gestion_de_fuente.png" alt="">
            <p class="btn btn-success btn-block">
                Gestion de Fuente Energetica
            </p>
            </a>   
        </div><br>
        
        <div class="col col-lg-2 col-12"></div>
        
        <div class="col col-lg-2 col-12 border border-2 border-success">
            <a href="reportes_cxt.php">
            <img class="img-fluid" src="../../imagenes/menu/reportes.png" alt="">
            <p class="btn btn-success btn-block">
                Reportes
            </p>
            </a>
        </div><br>
        
        <div class="col col-lg-3 col-12"></div>
       
    </div> <br><br>

</div>
    
<?php require('../layout/footer.php') ?>