<?php require('../layout/head.php') ?>

    <div class="container-fluid">
        <div 
            style="background-image: url('../../imagenes/header/fondo_seccion.webp');
            background-repeat: no-repeat;background-size: cover;"
            class="row">
            
            <div class="col col-lg-6 col-6">
                <?php require('../layout/slider.php') ?>
            </div>
            
            <div class="col col-lg-6 col-6">
                <?php require('inicio_sesion.php') ?>
            </div>
        </div>
    </div>

<?php require('../layout/footer.php') ?>
