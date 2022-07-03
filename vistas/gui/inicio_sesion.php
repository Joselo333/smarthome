<link rel="stylesheet" href="../estilos/paginas_generales.css">
<div class="container-fluid">
    
    <br><br>
    
    <div class="row">
        <h3 class="col-12 border border-2 border-success text-center">
        Iniciar Sesión
        </h3>
    </div>
    
    <div class="row">
       
        <div class="col col-lg-12 col-12 border border-2 border-success">
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
                       placeholder="correo@mail.com" required>
              
            </form>
            <br><br>
        </div>

        
        <div class="col col-lg-12 col-12 text-center">
            <br>
            <a class="btn btn-warning" 
               href="recupero_clave.php">
            ¡Recuperar Clave!
            </a>
            
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