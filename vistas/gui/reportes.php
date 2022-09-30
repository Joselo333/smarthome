<?php require('../layout/head.php') ?>
<div class="container-fluid">
    <div class="row">
        <?php require('menu_lateral.php') ?>
        <div class="col-9">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="cxd-tab" data-bs-toggle="tab" data-bs-target="#cxd-tab-pane" type="button" role="tab" aria-controls="cxd-tab-pane" aria-selected="true">
                        Consumo por Dispositivo
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cxf-tab" data-bs-toggle="tab" data-bs-target="#cxf-tab-pane" type="button" role="tab" aria-controls="cxf-tab-pane" aria-selected="false">
                        Consumo por Fuente
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cxt-tab" data-bs-toggle="tab" data-bs-target="#cxt-tab-pane" type="button" role="tab" aria-controls="cxt-tab-pane" aria-selected="false">
                        Consumo por Tiempo
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cxd-tab-pane" role="tabpanel" aria-labelledby="cxd-tab" tabindex="0">
                    <select class="form-select" aria-label="Default select example">
                        <option>Selecciona tiempo</option>
                        <option value="1" selected>Hora</option>
                        <option value="2">Dia</option>
                        <option value="3">Mes</option>
                    </select>
                    <img class="img-fluid" src="../../imagenes/reportes/grafico_consumo_dispositivo.png" alt="Grafico de el consumo por dispositivo">
                </div>
                <div class="tab-pane fade" id="cxf-tab-pane" role="tabpanel" aria-labelledby="cxf-tab" tabindex="0">
                    <select class="form-select" aria-label="Default select example">
                        <option>Selecciona tiempo</option>
                        <option value="1" selected>Hora</option>
                        <option value="2">Dia</option>
                        <option value="3">Mes</option>
                    </select>
                    <img class="img-fluid" src="../../imagenes/reportes/grafico_consumo_fuente.png" alt="Grafico de el consumo por fuente de energia">
                </div>
                <div class="tab-pane fade" id="cxt-tab-pane" role="tabpanel" aria-labelledby="cxt-tab" tabindex="0">
                    <select class="form-select" aria-label="Default select example">
                        <option>Selecciona tiempo</option>
                        <option value="1" selected>Hora</option>
                        <option value="2">Dia</option>
                        <option value="3">Mes</option>
                    </select>
                    <img class="img-fluid" src="../../imagenes/reportes/grafico_consumo_hora.png" alt="Grafico de el consumo por tiempo">
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('../layout/footer.php') ?>