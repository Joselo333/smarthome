<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">

<div class="container mt-4">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <h2 class="text-center texto-titulo">Gestionar Dispositivos<h2>
    </div>
  </div>
  <!-- Botones crud -->
  <div class="row">
    <div class="col-md-5"></div>
    <div class="row my-4 ">
      <div class="text-center">
        <button type="button" class="btn btn-info">Filtrar</button>
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-warning">Editar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
  <!-- Barra de búsqueda -->
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mb-3">
      <div class="input-group w-100">
        <input type="text" class="form-control text-center" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-success" type="button" id="button-addon2">Buscar</button>
      </div>
    </div>
  </div>
  <!-- Tabla de dispositivos -->
  <div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 mb-3">
        <div class="card">
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Marca</th>
              <th scope="col">Nombre</th>
              <th scope="col">Tipo de uso</th>
              <th scope="col">Tipo de consumo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Samsung</td>
              <td>Tele1</td>
              <td>Diario</td>
              <td>Medio</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Oster</td>
              <td>Microondas</td>
              <td>Menor a 5 minutos</td>
              <td>Alto</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Mademsa</td>
              <td>Lavadora</td>
              <td>Cada 4 días</td>
              <td>Alto</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

<?php require('../layout/footer.php') ?>