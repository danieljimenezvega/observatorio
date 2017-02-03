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
			<!-- Opciones de Registro de OT-->
				<div class="w3-container">
				<br><br>
				 	<ul class="w3-navbar w3-light-grey w3-border w3-padding">
				 		<h3 style="text-align: center;"><b>OPERADOR TURÍSTICO</b></h3>
					    <li style="width: 20%;"><a href="menuAdministradorRegistrarOT.php" class="w3-green">REGISTRAR</a></li>
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
										<br></p><h3>Registar Sitio Turístico</h3>
						
						<div class="w3-panel w3-card-4 w3-light-grey">
   							<div class="w3-row-padding">

								<div class="form-group">

									<form action="../Controlador/registrar.php" method="POST" enctype="multipart/form-data">

								
											
												<br><label class="w3-label">NOMBRE COMERCIAL</label>
												<input type="text" name="nombres" class="form-control" placeholder="Nombre del Establecimiento">
											
										
												<label class="w3-label">NIT</label>
												<input type="number" name="documento" class="form-control" placeholder="NIT del Establecimiento">
															
												
												<label class="w3-label">CLASIFICACIÓN</label>
												<select name="genero" class="form-control">
													<option value=""></option>
													<option value="FEMENINO">HOSPEDAJE</option>
													<option value="MASCULINO">COMERCIO</option>
												</select>  

										
												<label class="w3-label">DIRECCION</label>
												<input type="text" name="direccion" class="form-control" placeholder="Direccion del Establecimiento">
										
												<label class="w3-label">CELULAR</label>
												<input type="number" name="celular" class="form-control" placeholder="Celular del Establecimiento">
										
												<label class="w3-label">E-MAIL</label>
												<input type="email" name="email" class="form-control" placeholder="E-mail del Alumno">
									
												<label class="w3-label">CONTRASEÑA</label>
												<input type="text" name="pass" class="form-control" placeholder="Contraseña del Alumno">
											
												<label for="imagen" class="w3-label">IMAGEN</label>
												<input type="file" name="avatar" class="form-control">

												<label class="w3-label">DESCRIPCIÓN</label>
												<textarea class="form-control"></textarea>
											

										</div>


											<br><button type="submit" class="btn btn-success">REGISTRAR</button>

				
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
							<h3><b>DIRECTORIO TURISTICO</b></h3>

							<section class="3u 6u(narrower) 12u$(mobilep)">	
								<ul class="links">
									<li><a href="#">Alojamientos</a></li>
									<li onclick="document.getElementById('id01').style.display='block'"><a href="#">Restaurantes</a></li>

									<div class="w3-container">
										  	<div id="id01" class="w3-modal">
										    	<div class="w3-modal-content">
										      		<header class="w3-container w3-teal"> 
										        		<span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
										        		<h2>RESTAURANTES REGISTRADOS</h2>
										      		</header>
										      		<br>

										      		<div class="w3-container">
										       			<ul class="w3-ul w3-card-4">
														    <li class="w3-padding-16">
														    	<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">&times;</span>
														    	<img src="../images/restaurante.jpg" class="w3-left w3-circle w3-margin-right" style="width:100px">
														    	<a href=""><span class="w3-xlarge">Family Cook Off Restaurant</span></a><br>
														    	<span>NIT. 000000000- 00</span>
														    </li>

														    <li class="w3-padding-16">
														    	<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">&times;</span>
														    	<img src="../images/restaurante1.jpg" class="w3-left w3-circle w3-margin-right" style="width:100px">
														    	<a href=""><span class="w3-xlarge">Chilis</span></a><br>
														    	<span>NIT. 000000000- 00</span>
														    </li>

														    <li class="w3-padding-16">
														    	<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">&times;</span>
														    	<img src="../images/restaurante2.jpg" class="w3-left w3-circle w3-margin-right" style="width:100px">
														    	<a href=""><span class="w3-xlarge">Pizza Hut</span></a><br>
														    	<span>NIT. 000000000- 00</span>
														    </li>

														</ul>
										  			</div>
										    
										   			<br>
										    	</div>
										  	</div>
										</div>





								</ul>
							</section>

							<section class="3u 6u$(narrower) 12u$(mobilep)">		
								<ul class="links">
									<li><a href="#">Sitios naturales</a></li>
									<li><a href="#">Comercio</a></li>
								</ul>
							</section>

							<section class="3u 6u(narrower) 12u$(mobilep)">	
								<ul class="links">
									<li><a href="#">Deportes extremos</a></li>
									<li><a href="#">Culturales</a></li>
								</ul>
							</section>
							
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