<?php 
    include("../../controladores/conexion.php");
    $con=conectar();
    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<div class="container-fluid">
    
    <br><br>
    
    <div class="row">
        <h3 class="col-12 border border-2 border-success text-center fondo-seccion">
        Iniciar Sesión
        </h3>
    </div>
    
    <div class="row">
       <form id="login" action="../../controladores/validacion.php" method="post">
            <div class="col col-lg-12 col-12 border border-2 border-success fondo-seccion px-2">
                <br>
                <label class="form-label" for="input-rut">
                    <b>RUT</b>
                </label>
                <input  name="rut" type="text" class="form-control"
                        id="input-rut" placeholder="12345678-9" required>
                        
                <br><br>
                <label for="input-email">
                    <b>Email</b>
                </label>
                <input  name="correo" type="email" class="form-control" 
                        id="input-email" placeholder="email@email.com" required>

                <br><br>
                <label for="input-email">
                    <b>Contraseña</b>
                </label>
                <input  name="clave" type="password" class="form-control" 
                        id="input-pass" placeholder="Contraseña" required>

                <br><br>   
            </div>
        </form>
        <div class="col col-lg-12 col-12 text-center">
            <a type="button" class="text-warning" data-bs-toggle="modal" data-bs-target="#recuperarContraseña">
                ¡Recuperar Contraseña!
            </a> 
        </div>
        <div class="col col-lg-12 col-12 text-center">
            
            <button  type="submit" form="login" class="btn btn-success">
                Ingresar
            </button>
            <br>
        </div>
            
        <?php require('recupero_contraseña.php') ?>                
                
        
    </div>
</div>