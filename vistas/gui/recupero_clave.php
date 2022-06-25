<?php require('../layout/head.php') ?>
  <link rel="stylesheet" href="../estilos/recupero_clave.css">
  <div class="container">
    <div class="row">
      <p class="col-12 texto-titulo">
        Recuperar contraseña
      </p>
    </div>
    <div class="row my-4">
      <div class="col-3"></div>
      <div class="col-6" id="form0">
        <form>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="input-rut" placeholder="12345678-9" required>
            <label for="input-rut">RUT</label>
          </div>
          <div class="form-floating mt-3">
            <input type="email" class="form-control" id="input-email" placeholder="correo@mail.com" required>
            <label for="input-email">Email</label>
          </div>
        </form>
      </div>
      <div class="col-3"></div>
      <div class="row text-center">
        <a href="recupero_clave.php">
          <button type="button" class="btn btn-primary my-3">Recuperar</button>
        </a>
      </div>
    </div>
  </div>
<?php require('../layout/footer.php') ?>