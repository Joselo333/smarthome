<?php require('../layout/head.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">

<div class="container-fluid">
	<?php require('menu_lateral.php') ?>
	<div class="row">
		
		<br><br>
		<div id="mover4" class=""></div>
		<div id="content4" class="col-12">
			<br><br>
			<div class="row">
				<h2 class="text-center texto-titulo">Gestión de Energía<h2>
			</div>

			<!-- Consumo General -->
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10 text-center">
					<div class="card p-4 my-3  border border-dark">
						<div class="row">
							<!-- row 1 -->
							<div class="col-md-4">
								<h3 class="text-center texto-titulo">Consumo Total</h3>
							</div>

							<div class="col-md-4">
								<a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php"><img class="img-fluid" width="38px" src="../../imagenes/icons/bars-chart-ascending.png" alt=""></a>
							</div>
							<div class="col-md-4">
								<h3 class="text-center texto-titulo">Ganancia / Pérdida</h3>
							</div>
						</div>
						<br>
						<!--  -->
						<div class="row ">
							<div class="col-md-3">
								<p class="fs-6 text-success">Sumistro: 500kWh</p>
							</div>

							<div class="col-md-3 text-success">
								<p class="fs-6 text-danger">Consumo: 450kWh</p>
							</div>

							<div class="col-md-3">
								<p class="fs-6 text-success">Ganancia: $200 / dia </p>
							</div>

							<div class="col-md-3 text-success">
								<p class="fs-6 text-danger">Gasto: $200 / dia</p>
							</div>
						</div>

					</div>

				</div>
			</div>
			<br>

			<!-- Consumo por tipo de suministro -->
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10 text-center">

					<!-- Paneles Solares -->
					<div class="card p-4 my-3 border border-dark">
						<div class="row">
							<div class="col-md-4">
								<h3 class="text-center texto-titulo">Paneles Solares</h3>
								<br>
								<br>
								<div class="row">
									<div class="col-md-4">
										<i class=""><img class="rounded-circle mt-2 border border-dark p-2" width="55px" src="../../imagenes/icons/sun.png" alt="Logo de la UDA"></i>
									</div>
									<div class="col-md-6">
										<p class="fs-6 text-success">Sumistro: 500kWh</p>
										<p class="fs-6 text-danger">Consumo: 450kWh</p>
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<p class="fs-4 mt-2">nombre_empresa</p>
								<br>
								<br>
								<p class="fs-6 text-success">Ganancia: $200 / dia </p>
								<p class="fs-6 text-danger">Gasto: $200 / dia</p>
							</div>
							<div class="col-md-4">
								<img class="img-fluid  border border-dark mt-2 p-1" width="220px" src="..\..\imagenes\gestion_energia\green-chart.png" alt="Logo de la UDA">
							</div>
						</div>
					</div>

					<!-- Suministro Eléctrico -->
					<div class="card p-4 my-3 border border-dark">

						<div class="row">
							<div class="col-md-4">
								<h3 class="text-center texto-titulo">Suministro Eléctrico</h3>
								<br>
								<br>
								<div class="row">
									<div class="col-md-4">
										<i class=""><img class="rounded-circle mt-2 border border-dark p-2" width="55px" src="../../imagenes/icons/plug.png" alt="Logo de la UDA"></i>
									</div>
									<div class="col-md-6">
										<p class="fs-6 text-success">Sumistro: 500kWh</p>
										<p class="fs-6 text-danger">Consumo: 450kWh</p>
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<p class="fs-4 mt-2">nombre_empresa</p>
								<br>
								<br>
								<p class="fs-6 text-success">Ganancia: $200 / dia </p>
								<p class="fs-6 text-danger">Gasto: $200 / dia</p>
							</div>
							<div class="col-md-4">
								<img class="img-fluid  border border-dark mt-2 p-1" width="220px" src="..\..\imagenes\gestion_energia\purple-chart.png" alt="Logo de la UDA">
							</div>
						</div>
					</div>

					<!-- Energía Eólica -->
					<div class="card p-4 my-3 border border-dark">
						<div class="row">
							<div class="col-md-4">
								<h3 class="text-center texto-titulo">Energía Eólica</h3>
								<br>
								<br>
								<div class="row">
									<div class="col-md-4">
										<i class=""><img class="rounded-circle mt-2 border border-dark p-2" width="55px" src="../../imagenes/icons/wind.png" alt="Logo de la UDA"></i>
									</div>
									<div class="col-md-6">
										<p class="fs-6 text-success">Sumistro: 500kWh</p>
										<p class="fs-6 text-danger">Consumo: 450kWh</p>
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<p class="fs-4 mt-2">nombre_empresa</p>
								<br>
								<br>
								<p class="fs-6 text-success">Ganancia: $200 / dia </p>
								<p class="fs-6 text-danger">Gasto: $200 / dia</p>
							</div>
							<div class="col-md-4">
								<img class="img-fluid  border border-dark mt-2 p-1" width="220px" src="..\..\imagenes\gestion_energia\yellow-chart.png" alt="Logo de la UDA">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
        function abrirMenu4(){
            document.getElementById('content4').classList.toggle('col-md-8');
            document.getElementById('mover4').classList.toggle('col-4');
        }
        document.getElementById('abrir').onclick = function(){
            abrirMenu4();
        }
        function cerrarMenu4(){
            document.getElementById('content4').classList.toggle('col-md-8');
            document.getElementById('mover4').classList.toggle('col-4');
        }
        document.getElementById('cerrar').onclick = function(){
            cerrarMenu4();
        }
</script>
<?php require('../layout/footer.php') ?>

