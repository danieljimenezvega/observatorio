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
								<li class="current"><a href="menuAdministrador.php">INICIO</a></li>
								<li><a href="#">Perfil</a></li>
								<li><a href="#">Crear Municipio</a></li>
								<li><a href="">Registros</a>
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
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="3u 12u(narrower)">
								<div id="sidebar1">

									<!-- Sidebar 1 -->

										<section>
											<h3>ADMINISTRADOR</h3>
											<p><span class="image featured"><img src="../images/avatar_login.jpg" alt="" /></span></p>
											<footer>
												<a href="#" class="button">IR A PERFIL</a><br><br>
											</footer>
										</section>

										<section>
											<h3>Directorio Turístico</h3>
											<ul class="links">
												<li><a href="#">Alojamientos</a></li>
												<li onclick="document.getElementById('id01').style.display='block'"><a href="#">Restaurantes</a></li>
												<li><a href="#">Sitios naturales</a></li>
												<li><a href="#">Comercio</a></li>
												<li><a href="#">Deportes extremos</a></li>
												<li><a href="#">Culturales</a></li>
											</ul>
											<footer>
												<a href="menuAdministradorRegistrar.php" class="button">REGISTRAR</a>
											</footer>
										</section>



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
														    	<img src="../images/restaurante.jpg" class="w3-left w3-circle w3-margin-right" style="width:80px">
														    	<a href=""><span class="w3-xlarge">Family Cook Off Restaurant</span></a><br>
														    	<span>NIT. 000000000- 00</span>
														    </li>

														    <li class="w3-padding-16">
														    	<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">&times;</span>
														    	<img src="../images/restaurante1.jpg" class="w3-left w3-circle w3-margin-right" style="width:80px">
														    	<a href=""><span class="w3-xlarge">Chilis</span></a><br>
														    	<span>NIT. 000000000- 00</span>
														    </li>

														    <li class="w3-padding-16">
														    	<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">&times;</span>
														    	<img src="../images/restaurante2.jpg" class="w3-left w3-circle w3-margin-right" style="width:80px">
														    	<a href=""><span class="w3-xlarge">Pizza Hut</span></a><br>
														    	<span>NIT. 000000000- 00</span>
														    </li>

														</ul>
										  			</div>
										    
										   			<br>
										    	</div>
										  	</div>
										</div>








								</div>
							</div>
							<div class="6u 12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2></h2>
												<p></p>
											</header>
											<br><br><br><br><br><br><br>
											<span class="image featured"><img src="../images/ad.jpg" alt="" /></span>
											<a href="http://www.freepik.es/foto-gratis/mano-tocando-movil-con-aplicaciones_926540.htm">Diseñado por Freepik</a>

											
										</article>

								</div>
							</div>
							<div class="3u 12u(narrower)">
								<div id="sidebar2">

									<!-- Sidebar 2 -->

										<section>
											<h3>ESTADÍSTICAS</h3>
											<ul class="links">
												<li><a href="#">Perfil del turista</a></li>
												<li><a href="#">Demanda y Oferta</a></li>
												<li><a href="#">Consequat lorem phasellus</a></li>
												<li><a href="#">Amet turpis feugiat amet</a></li>
												<li><a href="#">Semper mod quisturpis nisi</a></li>
											</ul>
											<footer>
												<a href="#" class="button">REGISTRAR</a><br><br>
											</footer>
										</section>

										<section>
											<h3>OBSERVATORIO</h3>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
											<footer>
												<a href="#" class="button">IR</a>
											</footer>
										</section>

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