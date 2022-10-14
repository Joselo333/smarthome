<?php require('../layout/head.php') ?>
<div class="container-fluid">
    <?php require('menu_lateral.php') ?>
    
    <div class="row">
        
        <div id="mover2" class=""></div>
        <div id="content2" class="col-12 text-center">
            <br><br>
            <h2>Gestion de Consumo</h2>
            <br><br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 fondo-grupo p-3 border border-dark">
                    <ul class="nav nav-tabs border-bottom border-dark" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-dark bg-light" id="cxd-tab" data-bs-toggle="tab" data-bs-target="#cxd-tab-pane" type="button" role="tab" aria-controls="cxd-tab-pane" aria-selected="true">
                                Dispositivo por tipo de consumo
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark bg-light" id="cxf-tab" data-bs-toggle="tab" data-bs-target="#cxf-tab-pane" type="button" role="tab" aria-controls="cxf-tab-pane" aria-selected="false">
                                Consumo por dispositivo
                            </button>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content " id="myTabContent">
                        <div class="tab-pane fade show active" id="cxd-tab-pane" role="tabpanel" aria-labelledby="cxd-tab" tabindex="0">
                            <table class="table bg-light">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tipo de Consumo</th>
                                    <th scope="col">Consumo [W]</th>
                                    <th scope="col">Dispositivo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>🟢 Bajo</td>
                                    <td>10 W</td>
                                    <td>TV Lg 1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>🟡 Medio</td>
                                    <td>41 W</td>
                                    <td>Cafetera Oster 1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>🟡 Medio</td>
                                    <td>81 W</td>
                                    <td>Cocina Vitrocerámica Bosch 1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">4</th>
                                    <td>🔴 Alto</td>
                                    <td>231 W</td>
                                    <td>Horno Eléctrico Thomas 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="cxf-tab-pane" role="tabpanel" aria-labelledby="cxf-tab" tabindex="0">
                            <table class="table bg-light">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tipo de Consumo</th>
                                    <th scope="col">Consumo [W]</th>
                                    <th scope="col">Dispositivo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>🟢 Bajo</td>
                                    <td>10 W</td>
                                    <td>TV Lg 1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>🟡 Medio</td>
                                    <td>41 W</td>
                                    <td>Cafetera Oster 1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>🟡 Medio</td>
                                    <td>81 W</td>
                                    <td>Cocina Vitrocerámica Bosch 1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">4</th>
                                    <td>🔴 Alto</td>
                                    <td>231 W</td>
                                    <td>Horno Eléctrico Thomas 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>
<br><br>
<script>
        function abrirMenu2(){
            document.getElementById('content2').classList.toggle('col-md-8');
            document.getElementById('mover2').classList.toggle('col-4');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu2();
        }
        function cerrarMenu2(){
            document.getElementById('content2').classList.toggle('col-md-8');
            document.getElementById('mover2').classList.toggle('col-4');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu2();
        }
</script>
<?php require('../layout/footer.php') ?>