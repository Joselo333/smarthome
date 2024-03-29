<?php require('../layout/head.php') ?>
<div class="container-fluid">
    
    <?php require('menu_lateral.php') ?>
    <div class="row">
        
        <div id="mover1" class=""></div>
        <div id="content1" class="col-12">
            <br><br>
            <div class="row">
                <h2 class="text-center texto-titulo">Consumo por Dispositivo</h2>
            </div>
            <br>
            <div class="row p-5">
                
                <div class="col col-lg-4 col-12 card text-center border">
                    <br>
                    <div class="card-body border border-2 border-success">
                        <h3 class="card-title">[LG]</h3>
                        <h3 class="card-title">Tele1</h3>
                        <img id="iconos" class="img-fluid" width="50px" 
                            src="../../imagenes/icons/tv.png" alt="Logo de la UDA">
                        <h3 class="card-text text-muted mt-2 dispositivo-text">500 kWh</h3>
                        <a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php">
                            <img class="img-fluid" width="50px" 
                                src="../../imagenes/icons/bars-chart-ascending.png" alt="">
                        </a> 
                    </div>
                    <br>
                </div>
                
                <div class="col col-lg-4 col-12 card text-center">
                    <br>
                    <div class="card-body border border-2 border-success">
                        <h3 class="card-title">[Mademsa]</h3>
                        <h3 class="card-title">Lavadora</h3>
                        <img id="iconos" class="img-fluid" width="50px" 
                            src="../../imagenes/icons/refrigerator.png" alt="Logo de la UDA">
                        <h3 class="card-text text-muted mt-2 dispositivo-text">300 kWh</h3>
                        <a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php">
                            <img class="img-fluid" width="50px" 
                                src="../../imagenes/icons/bars-chart-ascending.png" alt="">
                        </a> 
                    </div>
                    <br>
                </div>
                
                <div class="col col-lg-4 col-12 card text-center">
                    <br>
                    <div class="card-body border border-2 border-success">
                        <h3 class="card-title">[HP]</h3>
                        <h3 class="card-title">Impresora</h3>
                        <img id="iconos" class="img-fluid" width="50px" 
                            src="../../imagenes/icons/print.png" alt="Logo de la UDA">
                        <h3 class="card-text text-muted mt-2 dispositivo-text">400 kWh</h3>
                        <a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php">
                            <img class="img-fluid" width="50px" 
                                src="../../imagenes/icons/bars-chart-ascending.png" alt="">
                        </a> 
                    </div>
                    <br>
                </div>
                
                <div class="col col-lg-2 col-12"></div>

            </div>

        </div>

    </div>
</div>
<script>
        function abrirMenu1(){
            document.getElementById('content1').classList.toggle('col-md-8');
            document.getElementById('mover1').classList.toggle('col-4');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu1();
        }
        function cerrarMenu1(){
            document.getElementById('content1').classList.toggle('col-md-8');
            document.getElementById('mover1').classList.toggle('col-4');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu1();
        }
    </script>
    
<?php require('../layout/footer.php') ?>