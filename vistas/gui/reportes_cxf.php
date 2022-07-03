<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">
<div 
    style="background-image: url('../../imagenes/header/fondo_seccion.webp');"
    class="container-fluid">
  <div class="row">
    <p class="col-12 texto-titulo">
      Reportes
    </p>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-9">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link bg-secondary" aria-current="page" href="reportes_cxt.php">Consumo por tiempo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-secondary" href="reportes_cxd.php">Consumo por dispositivo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="reportes_cxf.php">Consumo por fuente</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8 caja-graficos">
    <select class="form-select filtro-tiempo" aria-label="Default select example">
      <option>Selecciona tiempo</option>
      <option value="1" selected>Hora</option>
      <option value="2">Dia</option>
      <option value="3">Mes</option>
    </select>
      <img class="img-fluid" src="../../imagenes/reportes/grafico_consumo_fuente.png" alt="Grafico de el consumo por fuente de energia">
    </div>
    <div class="col-2"></div>
  </div>
</div>
</div>
<?php require('../layout/footer.php') ?>