<?php require('../layout/head.php') ?>
<div class="container-fluid">
    <div class="row">
        <?php require('menu_lateral.php') ?>
        <div id="mover5" class=""></div>
        <div id="content5" class="col-12 text-center">
            <br><br>
            <h2>Reportes</h2>
            <br><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 fondo-grupo p-5 border border-dark shadow-lg p-3 mb-5 bg-body rounded" style="height: 600px">
                    <ul class="nav nav-tabs border-bottom border-dark" id="myTab" role="tablist">
                        <li class="nav-item bg-light" role="presentation">
                            <button class="nav-link active text-dark" id="cxd-tab" data-bs-toggle="tab" data-bs-target="#cxd-tab-pane" type="button" role="tab" aria-controls="cxd-tab-pane" aria-selected="true">
                                Consumo por Dispositivo
                            </button>
                        </li>
                        <li class="nav-item bg-light" role="presentation">
                            <button class="nav-link text-dark" id="cxf-tab" data-bs-toggle="tab" data-bs-target="#cxf-tab-pane" type="button" role="tab" aria-controls="cxf-tab-pane" aria-selected="false">
                                Consumo por Fuente
                            </button>
                        </li>
                        <li class="nav-item bg-light" role="presentation">
                            <button class="nav-link text-dark" id="cxt-tab" data-bs-toggle="tab" data-bs-target="#cxt-tab-pane" type="button" role="tab" aria-controls="cxt-tab-pane" aria-selected="false">
                                Consumo por Tiempo
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-5 h-100" id="myTabContent">
                        <div class="tab-pane fade show active h-100" id="cxd-tab-pane" role="tabpanel" aria-labelledby="cxd-tab" tabindex="0">
                            <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/z657OxL2Qy6ONOPp70MDMtnmaJ9t4N2t"
                            class="w-100 h-100" frameborder="0"></iframe>
                        </div>
                        <div class="tab-pane fade h-100" id="cxf-tab-pane" role="tabpanel" aria-labelledby="cxf-tab" tabindex="0">
                            <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/qg7Komlr44bx1x18AEJMk3fCm7cN62vO"
                            class="w-100 h-100" frameborder="0"></iframe>
                        </div>
                        <div class="tab-pane fade h-100" id="cxt-tab-pane" role="tabpanel" aria-labelledby="cxt-tab" tabindex="0">                            
                            <iframe src="https://app.dashboard.smartelectric.cl/dashboard/snapshot/DobXEEx9hWus7FnpK6tECNwtuH65gcfT"
                            class="w-100 h-100" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>
<script>
        function abrirMenu5(){
            document.getElementById('content5').classList.toggle('col-md-9');
            document.getElementById('mover5').classList.toggle('col-3');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu5();
        }
        function cerrarMenu5(){
            document.getElementById('content5').classList.toggle('col-md-9');
            document.getElementById('mover5').classList.toggle('col-3');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu5();
        }
</script>
<br>
<?php require('../layout/footer.php') ?>