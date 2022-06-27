<?php require('../layout/head.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">
<div class="container">
  <div class="row">
    <p class="col-12 texto-titulo">
      Reportes
    </p>
  </div>
  <div class="row ">
    <div class="col-2"></div>
    <div class="col-9">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="reportes_cxt.php">Consumo por tiempo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-secondary" href="reportes_cxd.php">Consumo por dispositivo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-secondary" href="reportes_cxf.php">Consumo por fuente</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php require('../layout/footer.php') ?>