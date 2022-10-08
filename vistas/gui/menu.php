<?php require('../layout/head.php') ?>
<div class="container-fluid">
    <div class="row p-5">

        <?php require('menu_lateral.php') ?>
        <div id="mover0" class=""></div>
        <div id="content0" class="col col-12 p-5 min-vh-100 border border-dark fondo-seccion p-5 pb-5">
            <nav>
                <div class="nav nav-tabs border-bottom border-dark" id="nav-tab" role="tablist">
                    <button class="nav-link active text-dark" id="sm1-tab" data-bs-toggle="tab" data-bs-target="#sm1" 
                    type="button" role="tab" aria-controls="sm1" aria-selected="true">Refrigerador</button>

                    <button class="nav-link text-dark" id="sm2-tab" data-bs-toggle="tab" data-bs-target="#sm2" 
                    type="button" role="tab" aria-controls="sm2" aria-selected="false">Notebook</button>

                    <button class="nav-link text-dark" id="sm3-tab" data-bs-toggle="tab" data-bs-target="#sm3" 
                    type="button" role="tab" aria-controls="sm3" aria-selected="false">Router</button>

                    <button class="nav-link text-dark" id="sm4-tab" data-bs-toggle="tab" data-bs-target="#sm4"
                    type="button" role="tab" aria-controls="sm4" aria-selected="false">Hervidor</button>

                    <button class="nav-link text-dark" id="sm5-tab" data-bs-toggle="tab" data-bs-target="#sm5"
                    type="button" role="tab" aria-controls="sm5" aria-selected="false">Horno eléctrico</button>

                    <button class="nav-link text-dark" id="sm6-tab" data-bs-toggle="tab" data-bs-target="#sm6"
                    type="button" role="tab" aria-controls="sm6" aria-selected="false">Televisión</button>

                    <button class="nav-link text-dark" id="sm7-tab" data-bs-toggle="tab" data-bs-target="#sm7"
                    type="button" role="tab" aria-controls="sm7" aria-selected="false">SmartSocket 7</button>
                </div>
            </nav>
            <div class="tab-content h-100" id="nav-tabContent">
                <div class="tab-pane fade show active h-100" id="sm1" role="tabpanel"
                aria-labelledby="sm1-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/fthjfJYXlpiN606tp5cUTO0SPAFIePSX"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
                <div class="tab-pane fade h-100" id="sm2" role="tabpanel"
                 aria-labelledby="sm2-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/2turlexzT5PaG4nweK38gk66qp5ZBPtx"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
                <div class="tab-pane fade h-100" id="sm3" role="tabpanel"
                 aria-labelledby="sm3-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/nmH5vyTpoDfkIb0QvF2GNCcK2NO191bM"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
                <div class="tab-pane fade h-100" id="sm4" role="tabpanel"
                 aria-labelledby="sm4-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/grHtt7lDwGhhHBazaxEH56fMqglKei3B"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
                <div class="tab-pane fade h-100" id="sm5" role="tabpanel"
                 aria-labelledby="sm5-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/9rYp7v6sAhEhrK7GXYDyHgtK7Rl86Ros"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
                <div class="tab-pane fade h-100" id="sm6" role="tabpanel"
                 aria-labelledby="sm6-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/peOmz3HGuFWwI0qJrH4BHuEKeHvEXOZj"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
                <div class="tab-pane fade h-100" id="sm7" role="tabpanel"
                 aria-labelledby="sm7-tab" tabindex="0">
                    <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/qGOCZqB72xMYhIf5zg85KkT16wQu78Si"
                    class="w-100 h-100" frameborder="0"></iframe>
                </div>
            </div>
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