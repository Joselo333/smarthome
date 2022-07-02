<link rel="stylesheet" href="../estilos/paginas_generales.css">
  <div class="container">
    <div class="row">
      <p class="col-12 texto-titulo mt-3">
        Ingresa a tu cuenta
      </p>
    </div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10 mt-4" id="form_forgot_pass">
        <form>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="input-rut" placeholder="12345678-9" required>
            <label for="input-rut">RUT</label>
          </div>
          <div class="form-floating" >
            <input type="email" class="form-control" id="input-email" placeholder="correo@mail.com" required>
            <label for="input-email">Email</label>
          </div>
        </form>
      </div>

      <div class="col-3"></div>
      <div class="row text-center mt-3">
        <a class="enlaces" href="recupero_clave.php">
          ¡Recuperar Clave!
        </a>
        <a href="menu.php">
          <button type="button" class="btn btn-primary my-3 btn btn-primary btn-lg btn btn-success">Ingresar</button>
        </a>
       
      </div>
    </div>
  </div>
