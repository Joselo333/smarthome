<?php require('../layout/head.php') ?>



<div class="container-fluid">
  <?php require('menu_lateral.php') ?>
  <?php

    $sql1="SELECT * FROM dispositivos";
    $query1=mysqli_query($con,$sql1);

?>
  <div class="row">
    
    <div id="mover3" class=""></div>
    <div id="content3" class="col-12">
      <br><br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <h2 class="text-center">Gestionar Dispositivos<h2>
          </div>
        </div>
        <br><br>
        <!-- Barra de búsqueda -->
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 border border-bottom-0 border-dark fondo-grupo p-3">
            <div class="input-group w-100">
              <input type="text" class="form-control text-center" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-success" type="button" id="button-addon2">Buscar</button>
            </div>
          </div>
        </div>
        <!-- Tabla de dispositivos -->
        <div class="row">

          <div class="col-md-3"></div>
          <div class="col-md-6 mb-3 border border-top-0 border-dark fondo-grupo p-3">
              <div class="card">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Tipo de uso</th>
                    <th scope="col">Tipo de consumo</th>
                  </tr>
                </thead>
                <?php
                  if($query1){
                    while($row=mysqli_fetch_array($query1)){
                ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['marca'] ?></td>
                    <td><?php echo $row['uso'] ?></td>
                    <td><?php echo $row['consumo'] ?></td>
                    <td> 
                    
                      <button type="button" data-id="<?php echo $row['id'] ?>" class="btn btn-warning editarBtn" data-bs-toggle="modal" data-bs-target="#editarDisp">
                        <i class="bi bi-pencil-square"></i>
                      </button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger borrarBtn" data-bs-toggle="modal" data-bs-target="#borrarDisp">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <?php
                      }
                    }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
          <?php require('modal_CRUD.php') ?>
        </div>
    </div>
  </div>
</div>
<script>
        function abrirMenu3(){
            document.getElementById('content3').classList.toggle('col-md-8');
            document.getElementById('mover3').classList.toggle('col-4');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu3();
        }
        function cerrarMenu3(){
            document.getElementById('content3').classList.toggle('col-md-8');
            document.getElementById('mover3').classList.toggle('col-4');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu3();
        }
</script>
<?php require('../layout/footer.php') ?>