<?php 

	require_once('Modelo/conexion.php');
 
 ?>


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
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/galeri.css" />
		<link rel="stylesheet" type="text/css" href="lib/w3.css">


	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

				<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">INICIO</a></li>
								<li>
									<a href="Vista/observatorioQuienesSomos.php">Quienes Somos</a>
					
								</li>
								<li><a href="Vista/observatorioMunicipio.php">Municipio</a></li>
								<li><a href="Vista/observatorioInformacionTuristica.php">Información Turística</a></li>
								<li><a href="Vista/observatorioEventos.php">Eventos y Actividades</a></li>
								<li><a href="Vista/observatorioEstadisticas.php">Estadísticas</a></li>
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

					<!-- BANNER -->
						<h2><img src="images/logo.png" id="escudo" style="width: 16%;margin-right: 4%;">
						<a href="index.php" id="logo">OBSERVATORIO TURÍSTICO <em>VILLETA</em></a><img src="images/escudo.png" id="escudo" style="width: 12%; margin-left: 6%;"></h2>

				</div>


<!--LOGIN-->

		<div class="w3-container">
			<div id="id01" class="w3-modal">
			    <div class="w3-modal-content w3-card-8 w3-animate-zoom">

			      	<div class="w3-center"><br>
				        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
				         <img src="images/avatar_login.jpg" alt="Avatar" class="w3-circle w3-margin-top" >
			     	</div>

				    <form class="w3-container" action="Controlador/iniciarSesion.php" method="POST">
				        <div class="w3-section">

				          	<label><b>USUARIO</b></label>
				          	<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Ingresar Usuario" name="id_usuario" required>
				          	<label><b>CONTRASEÑA</b></label>
				          	<input class="w3-input w3-border" type="password" placeholder="Digitar contraseña" name="pass" required>
				          	<button class="w3-btn-block w3-green w3-section w3-padding" type="submit">INGRESAR</button>
				          	<a href="">SOLICITAR REGISTRO</a>

				        </div>
				    </form>

				    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancelar</button>
				        <span class="w3-right w3-padding w3-hide-small">¿Olvido la <a href="#">contraseña?</a></span>
				    </div>

			    </div>
			</div>
		</div>




			<!-- Banner -->

				<section id="banner">
					
					<header>
						<h2>Villeta: <em>La Ciudad Dulce de Colombia</em></h2>
						<a href="Vista/galeria.php" class="button">Ver Más</a>
					</header>


				
					
				</section>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-soundcloud"></i>
									<h3>CLIMA</h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-tint"></i>
									<h3>HIDROGRAFÍA</h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-globe"></i>
									<h3>RELIEVE</h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2>Productos turísticos de Villeta</h2>
							<p align="justify">Villeta es famosa por su producción de panela; por sus festividades, como el Reinado Nacional de La Panela y el Festival Departamental de Bandas; y por ser el poblado donde da inicio la Ruta del Sol. 
							<br>Es también un importante centro turístico del departamento de Cundinamarca debido a sus senderos ecológicos, cascadas, balnearios, fincas paneleras e infraestructura hotelera.</p>
						</header>
					</div>
				</section>

			<!-- Posts -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/sitio.jpg" alt="" /></a>
									<div class="inner">
										<a href="Vista/observatorioInformacionTuristica.php"><h3>Sitios De Interes</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/evento.jpg" alt="" /></a>
									<div class="inner">
										<a href="Vista/observatorioEventos.php"><h3>Eventos</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/noti.jpg" alt="" /></a>
									<div class="inner">
										<a href="Vista/observatorioMunicipio.php"><h3>Villeta</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
							<section class="6u 12u(narrower)">
								<div class="box post">
									<a href="#" class="image left"><img src="images/estad.jpg" alt="" /></a>
									<div class="inner">
										<a href="Vista/observatorioEstadisticas.php"><h3>Estadísticas</h3></a>
										<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Inventario Turístico</h2>
							<a href="Vista/observatorioInformacionTuristica.php" class="button">Click Aquí</a>
						</header>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>De Interés</h3>
								<ul class="links">
									<li><a href="#">Hoteles</a></li>
									<li><a href="#">Gastronomía</a></li>
									<li><a href="#">Eventos Culturales</a></li>
									<li><a href="#">Ecoturismo</a></li>
									<li><a href="#">Deportes Extremos</a></li>
								</ul>
							</section>
							<section class="3u 6u$(narrower) 12u$(mobilep)">
								<h3>Menú</h3>
								<ul class="links">
									<li><a href="Vista/observatorioQuienesSomos.php">Quienes Somos</a></li>
									<li><a href="Vista/observatorioMunicipio.php">Municipio</a></li>
									<li><a href="Vista/observatorioInformacionTuristica.php">Información turística</a></li>
									<li><a href="Vista/observatorioEventos.php">Eventos y Actividades</a></li>
									<li><a href="Vista/observatorioEstadisticas.php">Estadísticas</a></li>									
								</ul>
							</section>
							<section class="6u 12u(narrower)">
								<h3>CONTÁCTANOS</h3>
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Nombre" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Mensaje" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="ENVIAR" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="https://twitter.com/?lang=es" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/hinestrosadaza?fref=ts" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.google.com/intl/es/mail/help/about.html" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
	

	</body>
</html>