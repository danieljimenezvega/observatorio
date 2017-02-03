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
								<li class="current">
									<a href="observatorioQuienesSomos.php">Quienes Somos</a>
									
								</li>
								<li><a href="observatorioMunicipio.php">Municipio</a></li>
								<li><a href="observatorioInformacionTuristica.php">Información Turística</a></li>
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



		



		<!--CONTENIDO-->
		<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="3u 12u(narrower)">
								<div id="sidebar1">

									<!-- Sidebar 1 -->

										<section>
											<h3>OBJETIVO</h3>
											<p align="justify">Diseñar una herramienta estadística de recopilación y generación de información sobre la actividad turística del municipio de Villeta, que permita disponer de datos sistematizados, ordenados y actualizados de la misma, lo cual supone una ventaja competitiva de gran valor para el sector, permitiendo la toma de decisiones a múltiples niveles, asumiendo la realidad turística del municipio de forma dinámica, facilitando un espíritu de innovación y competitividad en el sector turístico en general.
                                            </p>
											
										</section>


										<section>
											<br><br>
											<p><span class="image featured"><img src="../images/sena.png" alt="" /></span></p>
										</section>




								</div>
							</div>
							<div class="6u 12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2 align="center">Nuestro observatorio turístico</h2>
												
											</header>

											<span class="image featured"><img src="../images/corredor.jpg" alt="" /></span>

											<p align="justify">Ofrecemos estadísticas confiables y oportunas a los diferentes usuarios, públicos o privados, con información relevante sobre la estructura y comportamiento del sector turístico del municipio de Villeta.
                                           </p>

								

											<h3><b>BENEFICIOS E IMPACTO</b></h3><br>
											
											<p> • <b>Social:</b> El proyecto beneficiara a toda la comunidad villetana relacionada con el sector turístico.</p>
											<p> • <b>Económico:</b> Permitirá contar con una herramienta a la hora de toma de decisiones, para focalizar inversiones según el perfil de los turistas que visitan el municipio de Villeta.</p>
											<p> • <b>Ambiental: </b> El observatorio permitirá dar a conocer las buenas prácticas ambientales que se llevan a cabo, y mejorar las existentes.</p>
											<p> • <b>Tecnológico: </b> Implementación de las TICS en el sector turístico de Villeta.</p>

									<p></p>
										</article>



								</div>
							</div>
							<div class="3u 12u(narrower)">
								<div id="sidebar2">

									<!-- Sidebar 2 -->

										<section>
											<h3>JUSTIFICACIÓN</h3>
											<p align="justify">Contar con un informe estadístico, de carácter anual, para conocer de una forma completa e integrada las pautas de la visita y el perfil del visitante, tanto turistas como excursionistas, entre otros aspectos. Es decir, se trata de determinar los perfiles del visitante que llega al municipio de Villeta: cuáles son sus motivaciones iniciales, cómo organizan su viaje, qué tipo de actividades realizan durante su estancia, cómo valoran la oferta disponible y el viaje en función de sus expectativas iniciales, entre otros aspectos relevantes.
                                            </p>
											
										</section>


										<section>
											<br><br>
											<p><span class="image featured"><img src="../images/adsi.gif" alt="" /></span></p>
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