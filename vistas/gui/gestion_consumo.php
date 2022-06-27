<?php require('../layout/head.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">
<div class="container">
  <div class="row">
    <p class="col-12 texto-titulo">
      Gestión de Consumo
    </p>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-9">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="gestion_consumo.php">Dispositivo por tipo de consumo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-secondary" href="gestion_consumo-c1.php">Consumo por dispositivo</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="row caja-graficos">
    <div class="col-2"></div>

    <div class="col-8">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="col-2"></div>

  </div>
</div>
<?php require('../layout/footer.php') ?>