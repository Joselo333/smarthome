<?php require('../layout/head.php') ?>
<div class="container-fluid">
  
        <?php require('menu_lateral.php') ?>
    <div class="row p-5">
        <div id="mover0" class=""></div>
        <div id="content0" class="col col-12 p-5 min-vh-100 border border-dark p-5 fondo-grupo shadow-lg p-3 mb-5 bg-body rounded">
            <iframe src="https://app.dashboard.smartelectric.cl/d/SmartCity/dispositivos-smartcity?orgId=1&refresh=5s&from=now-5m&to=now&theme=light"
            class="w-100 h-100" frameborder="0"></iframe>
        </div>   
    </div>
    <script>
        function abrirMenu0(){
            document.getElementById('content0').classList.toggle('col-md-8');
            document.getElementById('mover0').classList.toggle('col-4');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu0();
        }
        function cerrarMenu0(){
            document.getElementById('content0').classList.toggle('col-md-8');
            document.getElementById('mover0').classList.toggle('col-4');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu0();
        }
        
    </script>
</div>
    
<?php require('../layout/footer.php') ?>