<?php require('../layout/head.php') ?>
<div class="container-fluid">
    <div class="row">

        <?php require('menu_lateral.php') ?>
        
        <div id="mover0" class=""></div>
        <div id="content0" class="col col-12 p-5 min-vh-100">
            <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/dTl6Bd7dI8FIRUcC4Edk1vYwhQ4sS8Me"
            class="w-100 h-100" frameborder="0"></iframe>
        </div>

        

    </div>
    <script>
        function abrirMenu0(){
            document.getElementById('content0').classList.toggle('col-md-9');
            document.getElementById('mover0').classList.toggle('col-3');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu0();
        }
        function cerrarMenu0(){
            document.getElementById('content0').classList.toggle('col-md-9');
            document.getElementById('mover0').classList.toggle('col-3');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu0();
        }
    </script>
</div>
    
<?php require('../layout/footer.php') ?>