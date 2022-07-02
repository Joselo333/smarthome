<?php require('../layout/head.php') ?>
<?php require('../layout/nav.php') ?>
<link rel="stylesheet" href="../estilos/paginas_generales.css">
<link rel="stylesheet" href="../estilos/iconos_dispositivos.css">

<container class="container mt-4">
	<div class="row">
		<h2 class="text-center texto-titulo">Consumo por Dispositivo<h2>
	</div>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10 text-center">
			<div class="card p-4 my-3">
				<div class="row">
					<!-- Card 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body dispositivo">
								<!-- 3 col -->
								<div class="row">
									<div class="col-5">
										<h3 class="card-title mt-2 dispositivo-titulo">[LG]</h3>
									</div>
									<div class="col-4">
										<h3 class="card-title mt-2 mr-4 dispositivo-titulo">Tele1</h3>
									</div>
									<div class="col-3">
										<i class=""><img id="iconos" class="img-fluid" width="50px" src="../../imagenes/icons/tv.png" alt="Logo de la UDA"></i>
									</div>

								</div>
								<br>
								<br>
								<!-- 2 col -->
								<div class="row">
									<div class="col-sm-6">
										<h3 class="card-text text-muted mt-2 dispositivo-text">500 kWh</h3>
									</div>
									<div class="col-sm-3"></div>
									<div class="col-sm-3">
										<a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php"><img class="img-fluid" width="50px" src="../../imagenes/icons/bars-chart-ascending.png" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card 2 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body dispositivo">
								<!-- 3 col -->
								<div class="row">
									<div class="col-5">
										<h3 class="card-title mt-2 dispositivo-titulo">[Mademsa]</h3>
									</div>
									<div class="col-4">
										<h3 class="card-title mt-2 mr-4">Lavadora</h3>
									</div>
									<div class="col-3">
										<i class=""><img id="iconos" class="img-fluid" width="50px" src="../../imagenes/icons/refrigerator.png" alt="Logo de la UDA"></i>
									</div>

								</div>

								<br>
								<br>
								<!-- 2 col -->
								<div class="row">
									<div class="col-sm-6">
										<h3 class="card-text text-muted mt-2">500 kWh</h3>
									</div>
									<div class="col-sm-3">
									</div>

									<div class="col-sm-3">
										<a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php"><img class="img-fluid" width="50px" src="../../imagenes/icons/bars-chart-ascending.png" alt=""></a>
									</div>
								</div>


							</div>
						</div>
					</div>
					<!-- Card 3 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body dispositivo">
								<!-- 3 col -->
								<div class="row">
									<div class="col-5">
										<h3 class="card-title mt-2 dispositivo-titulo">[HP]</h3>
									</div>
									<div class="col-4">
										<h3 class="card-title mt-2 mr-4 dispositivo-titulo">Impresora</h3>
									</div>
									<div class="col-3">
										<i class=""><img id="iconos" class="img-fluid" width="50px" src="../../imagenes/icons/print.png" alt="Logo de la UDA"></i>
									</div>

								</div>
								<br>
								<br>
								<!-- 2 col -->
								<div class="row">
									<div class="col-sm-6">
										<h3 class="card-text text-muted mt-2 dispositivo-text">500 kWh</h3>
									</div>
									<div class="col-sm-3"></div>
									<div class="col-sm-3">
										<a class="enlaces btn btn-outline-secondary" href="consumo_dispositivo.php"><img class="img-fluid" width="50px" src="../../imagenes/icons/bars-chart-ascending.png" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-1"></div>

	</div>

</container>



<?php require('../layout/footer.php') ?>