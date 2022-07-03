<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">
  <div class="container">
    <div class="row">
      <p class="col-12 texto-titulo">
        Menu
      </p>
    </div>
    <div class="row menu">
        <div class="col-1"></div>
        <div class="col-4 col-md-2 menu-item">
            <a class="enlaces" href="gestion_dispositivo.php">
                <img class="img-fluid" src="../../imagenes/menu/dispositivos.png" alt="">
                <p class="menu-item-text">Gestionar Dispositivos</p>
            </a>
        </div>
        <div class="col-1"></div>
        <div class="col-1"></div>
        <div class="col-4 col-md-2 menu-item">
            <a class="enlaces" href="consumo_dispositivo.php">
                <img class="img-fluid" src="../../imagenes/menu/consumo_de_energia.png" alt="">
                <p class="menu-item-text">Consumo de Energia</p>
            </a>
        </div>
        <div class="col-1"></div>
        <div class="col-1"></div>
        <div class="col-4 col-md-2 menu-item">
            <a class="enlaces" href="gestion_consumo.php">
                <img class="img-fluid" src="../../imagenes/menu/gestion_de_consumo.png" alt="">
                <p class="menu-item-text">Gestion de Consumo</p>
            </a>
        </div>
        <div class="col-1"></div>
        <div class="col-1 col-md-3"></div>
        <div class="col-4 col-md-2 menu-item">
            <a class="enlaces" href="gestion_energia.php">
                <img class="img-fluid" src="../../imagenes/menu/gestion_de_fuente.png" alt="">
                <p class="menu-item-text">Gestion de Fuente Energetica</p>
            </a>    
        </div>
        <div class="col-1"></div>
        <div class="col-4 col-md-1 "></div>
        <div class="col-4 col-md-2 menu-item">
            <a class="enlaces" href="reportes_cxt.php">
                <img class="img-fluid" src="../../imagenes/menu/reportes.png" alt="">
                <p class="menu-item-text">Reportes</p>
            </a>
        </div>
        <div class="col-4"></div>
    </div>
  </div>
<?php require('../layout/footer.php') ?>