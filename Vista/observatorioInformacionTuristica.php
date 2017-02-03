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
								<li><a href="../index.php">INICIO</a></li>
								<li>
									<a href="observatorioQuienesSomos.php">Quienes Somos</a>
									
								</li>
								<li><a href="observatorioMunicipio.php">Municipio</a></li>
								<li class="current"><a href="observatorioInformacionTuristica.php">Información Turística</a></li>
								<li><a href="observatorioEventos.php">Eventos y Actividades</a></li>
								<li><a href="observatorioEstadisticas.php">Estadísticas</a></li>
								<li><a href="#" onclick="document.getElementById('id01').style.display='block'">INGRESAR</a></li>
								<li>
									<form action="">
										<input type="search" name="nombre" placeholder="    Buscar">
										
									</form>
								</li>
								<li>
									<select id="idioma">
										<option> ESPAÑOL</option>
									</select>
								</li>
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


<!--LOGIN-->

		<div class="w3-container">
			<div id="id01" class="w3-modal">
			    <div class="w3-modal-content w3-card-8 w3-animate-zoom">

			      	<div class="w3-center"><br>
				        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
				         <img src="../images/avatar_login.jpg" alt="Avatar" class="w3-circle w3-margin-top" >
			     	</div>

				    <form class="w3-container" action="../Controlador/iniciarSesion.php" method="POST">
				        <div class="w3-section">

				          	<label><b>USUARIO</b></label>
				          	<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Ingresar Usuario" name="id_usuario" required>
				          	<label><b>CONTRASEÑA</b></label>
				          	<input class="w3-input w3-border" type="password" placeholder="Digitar contraseña" name="pass" required>
				          	<button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>
				          	<a href="">REGISTRARME</a>

				        </div>
				    </form>

				    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancelar</button>
				    </div>

			    </div>
			</div>
		</div>


		<!-- Banner -->
				<section id="banner">
					
					<header>
						<h2>Villeta: <em>La Ciudad Dulce de Colombia</em></h2>
						<a href="../Vista/galeria.php" class="button">Ver Más</a>
					</header>
					
				</section>


<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(narrower)">
								<div id="sidebar">

									<!-- Sidebar -->


										<section>
											<h3>DIRECTORIO</h3>
											<ul class="links">
												<li><a href="#">Almacenes de Calzado</a></li>
												<li><a href="#">Alquiler de Fincas</a></li>
												<li><a href="#">Atractivos Turísticos</a></li>
												<li><a href="#">Centros de Recreación</a></li>
												<li><a href="#">Deportes Extremos</a></li>
												<li><a href="#">Empresas de Transporte</a></li>
												<li><a href="#">Centros Médicos</a></li>
												<li><a href="#">Ecoturismo</a></li>
												<li><a href="#">Bares</a></li>
												<li><a href="#">Bancos</a></li>



											</ul>

										
										</section>

								</div>
							</div>
							<div class="8u  12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="../images/fulls/06.jpg" alt="" /></a>
									<div class="inner">
										<a href="../Vista/observatorioInformacionTuristica.php"><h3>HOTELES</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="../images/evento.jpg" alt="" /></a>
									<div class="inner">
										<a href="../Vista/observatorioEventos.php"><h3>GASTRONOMÍA</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="../images/noti.jpg" alt="" /></a>
									<div class="inner">
										<a href="../Vista/observatorioMunicipio.php"><h3>ECOTURISMO</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="../images/fulls/03.jpg" alt="" /></a>
									<div class="inner">
										<a href="../Vista/observatorioEstadisticas.php"><h3>DEPORTES EXTREMOS</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
						</div>
									
								
											
										</article>

								</div>
							</div>
						</div>
					</div>
				</section>


					<!-- Posts -->
				<section class="wrapper style1">
					<div class="container">
						
					</div>
				</section>

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Inventario Turístico</h2>
							<a href="#" class="button">DESCARGAR</a>
						</header>
					</div>
				</section>




		






























			<!-- Footer -->
				<?php 
					require_once('footer.php');
				 ?>

		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>