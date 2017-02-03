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
								<li><a href="observatorioInformacionTuristica.php">Información Turística</a></li>
								<li><a href="observatorioEventos.php">Eventos y Actividades</a></li>
								<li class="current"><a href="observatorioEstadisticas.php">Estadísticas</a></li>
								<li><a href="#" onclick="document.getElementById('id01').style.display='block'">INGRESAR</a></li>
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



		<section class="wrapper style1">
			<div class="container">
			<article>
				<h1 style="text-align:center;">INFORMACIÓN ESTADÍSTICA</h1>
				<br><p align="justify">La estadística resulta fundamental para conocer el comportamiento de ciertos eventos.
				Se usa como un valioso auxiliar y en los diferentes campos del conocimiento y en las variadas ciencias, es un lenguaje que permite comunicar información basada en datos cuantitativos, es tan importante que casi no existe actividad humana en que no esté involucrada la estadística.</p>


<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major 	fa fa-group"></i>
									<h3><a href="">PERFIL DEL TURISTA</a> </h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa fa-area-chart"></i>
									<h3><a href=""> OFERTA Y DEMANDA</a></h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa fa-cloud-download"></i>
									<h3><a href="">DESCARGAS</a> </h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
						</div>
					</div>






<!-- Main -->
				

				<section class="wrapper style1">
					<div class="container" >
						<div class="row">
							<section class="6u 12u(narrower)" style="width: 40%; margin-left: 10%;">
								<div class="box post">
									<br><br><div class="w3-card-12">
									<br><h3 style="text-align:center;">ESTADÍSTICA HOTELERA</h3>
											<br><h4 style="text-align:center;"><img src="../images/p4.jpg" id="estadisticas" style="width: 80%;"> </h4>
											  <div class="w3-container w3-center">
											  <button class="w3-btn w3-green">DESCARGAR PDF</button>
											  </div>
											
								</div>
							</section>
							<section class="6u 12u(narrower)" style="width: 40%;">
								<div class="box post">
										<br><br><div class="w3-card-12">
											<br><h3 style="text-align:center;">ESTADÍSTICA HOTELERA 2016</h3>
											<br><h4 style="text-align:center;"><img src="../images/p3.jpg" id="estadisticas" style="width: 80%;"> </h4>
											  <div class="w3-container w3-center">
											   <button class="w3-btn w3-green">DESCARGAR PDF</button>
											  </div>
											</div>
								</div>
							</section>
						</div>
						<div class="row">
							<section class="6u 12u(narrower)" style="width: 40%; margin-left: 10%;">
								<div class="box post">
										<br><br><div class="w3-card-12">
											<br><h3 style="text-align:center;">ESTADÍSTICA HOTELERA</h3>
											<br><h4 style="text-align:center;"><img src="../images/p3.jpg" id="estadisticas" style="width: 80%;"> </h4>
											  <div class="w3-container w3-center">
											   <button class="w3-btn w3-green">DESCARGAR PDF</button>
											  </div>
											</div>
								</div>
							</section>
							<section class="6u 12u(narrower)" style="width: 40%;">
								<div class="box post">
									<br><br><div class="w3-card-12">
										<br><h3 style="text-align:center;">ESTADÍSTICA HOTELERA</h3>
											<br><h4 style="text-align:center;"><img src="../images/p4.jpg" id="estadisticas" style="width: 80%;"> </h4>
											  <div class="w3-container w3-center">
											  <button class="w3-btn w3-green">DESCARGAR PDF</button>
											  </div>
								</div>
							</section>
						</div>
					</div>
				</section>

											


											
				

											
											

										

							


								</div>
							</div>
						</div>
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