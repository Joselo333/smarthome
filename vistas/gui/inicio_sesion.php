<?php 
    include("../../mer/conexion.php");
    $con=conectar();
    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<div class="container-fluid">
    
    <br><br>
    
    <div class="row">
        <h3 class="col-12 border border-2 border-dark text-center fondo-grupo">
        Iniciar Sesión
        </h3>
    </div>
    
    <div class="row">
       <form id="login" action="../../controladores/validacion.php" method="post">
            <div class="col col-lg-12 col-12 border border-2 border-dark fondo-grupo px-2">
                <br>
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

                <br>
                <div class="col col-lg-12 col-12 text-center">
                    <button id="ingresar" type="submit" form="login" class="btn btn-success border border-dark">
                        Ingresar
                    </button>
                </div> 
                <br> 
            </div>
        </form>
        <div class="col col-lg-12 col-12 text-center mt-3">
            <a type="button" class="text-dark btn btn-warning" data-bs-toggle="modal" data-bs-target="#recuperarContraseña">
                ¡Recuperar Contraseña!
            </a> 
        </div>
        
        <br><br><br>
        <?php require('recupero_contraseña.php') ?>                
                
        
    </div>
</div>