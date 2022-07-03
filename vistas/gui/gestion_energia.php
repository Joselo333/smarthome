<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">

<div class="container mt-4 mr-4">
  <div class="col-1 text-center"></div>
  <div class="col-10 text-center">
    <div class="card p-4 my-3">
      <!-- row 1 -->
      <div class="row">

        <div class="col-md-4">

          <h3 class="text-center texto-titulo">Consumo Total</h3>
        </div>

        <div class="col-md-4">
          <a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php"><img class="img-fluid" width="38px" src="../../imagenes/icons/bars-chart-ascending.png" alt=""></a>
        </div>
        <div class="col-md-4">

          <h3 class="text-center texto-titulo">Ganancia / Pérdida</h3>

        </div>
      </div>

      <br>
      <!--  -->
      <div class="row">
        <div class="col-md-3">
          <p class="fs-6 text-success">Sumistro: 500kWh</p>
        </div>

        <div class="col-md-3 text-success">
          <p class="fs-6 text-danger">Consumo: 450kWh</p>
        </div>

        <div class="col-md-3">
          <p class="fs-6 text-success">Ganancia: $200 / dia </p>
        </div>

        <div class="col-md-3 text-success">
          <p class="fs-6 text-danger">Gasto: $200 / dia</p>
        </div>
      </div>


    </div>
  </div>
</div>

</div>

<?php require('../layout/footer.php') ?>