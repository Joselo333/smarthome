
<div class="container-fluid">
    
    <br><br>
    
    <div class="row">
        <h3 class="col-12 border border-2 border-success text-center fondo-seccion">
        Iniciar Sesión
        </h3>
    </div>
    
    <div class="row">
       
        <div class="col col-lg-12 col-12 border border-2 border-success fondo-seccion">
            <br>
            <form method="post" action="">
                
                <label class="form-label" for="input-rut">
                    <b>RUT</b>
                </label>
                <input type="number" 
                       class="form-control" 
                       id="input-rut" 
                       placeholder="12345678-9" required>
               
                <br><br>
                <label for="input-email">
                    <b>Email</b>
                </label>
                <input type="email" 
                       class="form-control" 
                       id="input-email" 
                       placeholder="email@mail.com" required>

                <br><br>
                <label for="input-email">
                    <b>Contraseña</b>
                </label>
                <input type="password" 
                       class="form-control" 
                       id="input-pass" 
                       placeholder="Contraseña" required>
              
            </form>
            <br><br>
        </div>

        
        <div class="col col-lg-12 col-12 text-center">
            <br>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#recuperarContraseña">
                ¡Recuperar Contraseña!
            </button>
            
            <?php require('recupero_contraseña.php') ?>

            <a href="menu.php">
                <button type="button" 
                        class="btn btn-success">
                    Ingresar
                </button>
            </a>
            <br><br>
            
            
        </div>
    </div>
</div>