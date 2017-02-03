<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>OBSERVATORIO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../lib/w3.css">

	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">


					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="menuAdministrador.php">INICIO</a></li>
								<li><a href="#">Perfil</a></li>
								<li><a href="#">Crear Municipio</a></li>
								<li class="current"><a href="">Registros</a>
									<ul>
										<li><a href="#"></a></li>
										<li><a href="menuAdministradorRegistrarADMI.php">Administrador</a></li>
										<li><a href="menuAdministradorRegistrarOT.php">Operador Turistico</a></li>
										<li><a href="menuAdministradorRegistrarPIT.php">Punto de Informacion</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Estadistícas</a>
									<ul>
										<li><a href="#">Perfil Turista</a></li>
										<li><a href="#">Nacionalidad</a></li>
									</ul>
								</li>
								<li><a href="../Controlador/cerrarSesion.php">SALIR</a></li>
								<li>
									<form action="">
										<input type="search" name="nombre" placeholder="    Buscar">
										
									</form>
								</li>
								<li>
									<select id="idioma">
										<option> ESPAÑOL</option>
									</select></li>
								<li>
								<!-- www.TuTiempo.net - Ancho:212px - Alto:89px -->								
									<div id="TT_RinwrhdhYn4BKQsKjfV1k11Ek6nK8rp1kjzzD">Pronóstico de Tutiempo.net</div>
									<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_RinwrhdhYn4BKQsKjfV1k11Ek6nK8rp1kjzzD"></script>
								</li>
							</ul>
						</nav>


						<?php 
							require_once('banner.php');
						 ?>

				</div>




			<!-- Main -->

			<!-- Opciones de Registro de PIT-->
				<div class="w3-container">
				<br><br>
				 	<ul class="w3-navbar w3-light-grey w3-border w3-padding">
				 		<h3 style="text-align: center;"><b>PUNTO DE INFORMACIÓN TURÍSTICA</b></h3>
					    <li style="width: 20%;"><a href="menuAdministradorRegistrarADMI.php" class="w3-green">REGISTRAR</a></li>
					    <li style="width: 20%;"><a href="#">VER REGISTROS</a></li>
					    <li style="width: 20%;"><input type="text" class="w3-input" placeholder="Search.."></li>
					    <li><button class="button">BUSCAR</button></li>
					 </ul>
				</div>

				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="3u 12u(narrower)">
								<div id="sidebar1">

									<!-- Sidebar 1 -->

										
								</div>
							</div>
							<div class="6u 12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->
						
									<div class="w3-panel w3-card-4 w3-light-grey">
			   							<div class="w3-row-padding">

											<div class="form-group">

												<form action="../Controlador/registrar.php" method="POST" enctype="multipart/form-data">

											
													<br><label class="w3-label">NOMBRES</label>
													<input type="text" name="" class="form-control" placeholder="Nombre del Administrador">

													<br><label class="w3-label">APELLIDOS</label>
													<input type="text" name="" class="form-control" placeholder="Apellidos del Administrador">

													<label class="w3-label">TIPO DOCUMENTO</label>
													<select name="" class="form-control">
														<option value=""></option>
														<option value="CC">CC</option>
														<option value="TI">TI</option>
													</select> 
																					
													<label class="w3-label">DOCUMENTO</label>
													<input type="number" name="documento" class="form-control" placeholder="Numero de documento">
																	
													<label class="w3-label">CELULAR</label>
													<input type="number" name="celular" class="form-control" placeholder="Celular del Establecimiento">
													
													<label class="w3-label">E-MAIL</label>
													<input type="email" name="email" class="form-control" placeholder="E-mail del Alumno">
				
													<label for="imagen" class="w3-label">IMAGEN</label>
													<input type="file" name="avatar" class="form-control">
														
											
											</div>

													<br><button type="submit" class="btn btn-success">REGISTRAR</button><br>

							
												</form>

											</div>

										</div>
									</div>

										

								</div>
							</div>
							<div class="3u 12u(narrower)">
								<div id="sidebar2">

									<!-- Sidebar 2 -->

								</div>
							</div>
						</div>
					</div>
				</section>







			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">	
							
						</div>
					</div>

					<?php 
					require_once('footerAdministrador.php');
					?>

				</div>

		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>