<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>
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
          <a class="nav-link bg-secondary" aria-current="page" href="gestion_consumo.php">Dispositivo por tipo de consumo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="gestion_consumo-c1.php">Consumo por dispositivo</a>
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
              <th scope="col">Tipo de Consumo</th>
              <th scope="col">Consumo [W]</th>
              <th scope="col">Dispositivo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>🟢 Bajo</td>
              <td>10 W</td>
              <td>TV Lg 1</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>🟡 Medio</td>
              <td>41 W</td>
              <td>Cafetera Oster 1</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>🟡 Medio</td>
              <td>81 W</td>
              <td>Cocina Vitrocerámica Bosch 1</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>🔴 Alto</td>
              <td>231 W</td>
              <td>Horno Eléctrico Thomas 1</td>
            </tr>
          </tbody>
        </table>
    </div>

    <div class="col-2"></div>

  </div>

</div>
<?php require('../layout/footer.php') ?>
