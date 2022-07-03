<?php require('../layout/head.php') ?>

<div 
    style="background-image: url('../../imagenes/header/fondo_seccion.webp');"
    class="container-fluid">
    
    <br>
    <div class="row">
        
        <div class="col col-lg-4 col-12"> </div>
        
        <div class="col col-lg-4 col-12 border border-2 border-success"> 
        
            <h3 class="text-center">
            Recuperar contraseña<br>
            </h3>
        
        </div>
        
        <div class="col col-lg-4 col-12"> </div>
        
       
    </div>
    
    <br>
    <div class="row">
        
        <div class="col col-lg-4 col-12"> </div>
        
        <div class="col col-lg-4 col-12 border border-2 border-success"> 
            <br>
           <form>
          
            <div class="form-floating mb-3">
              <input type="number" class="form-control" 
                     id="input-rut" placeholder="12345678-9" required>
            <label for="input-rut">RUT</label>
          </div>
            
          <div class="form-floating mb-3">
            <input type="email" class="form-control" 
                   id="input-email" placeholder="correo@mail.com" required>
            <label for="input-email">Email</label>
          </div>
            
        </form> 
            
         <div class="row">
            <div class="col col-lg-6 col-12">
                <a href="home.php" class="btn col-12 btn-warning">
                    Atrás<br>
                </a>
            </div>    

            <div class="col col-lg-6 col-12"> 
                <a href="home.php" class="btn col-12 btn-success">
                    Recuperar<br>
                </a>
            </div>
             <br>
          </div>
            <br><br>
        </div>
        
        <div class="col col-lg-4 col-12"> </div>
          
    </div><br><br>
</div>
<?php require('../layout/footer.php') ?>