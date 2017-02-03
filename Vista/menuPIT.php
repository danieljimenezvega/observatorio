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
								<li class="current"><a href="menuPIT.php">INICIO</a></li>
								<li><a href="menuPITRegistrarNoticia.php">Registrar Noticias</a></li>
								<li><a href="menuPITRegistrarEvento.php">Registrar Eventos</a></li>
				
								<li><a href="../Controlador/cerrarSesion.php">SALIR</a></li>
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

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2>EVENTOS Y ACTIVIDADES</h2>
												<p>Cultura, deporte, fiestas y mucho mas.</p>
											</header>

											<span class="image featured"><img src="../images/eventos.jpg" alt="" /></span>

											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
											consequat etiam lorem ipsum dolor sit amet nullam.</p>

											<h3>CALENDARIO</h3>
											

											<div class="month">
												<ul>
												    <li class="prev">❮</li>
												    <li class="next">❯</li>
												    <li style="text-align:center">
											    	  NOVIEMBRE<br>
											     	 <span style="font-size:18px">2016</span>
											    	</li>
											  	</ul>
											</div>

											<ul class="weekdays">
											  	<li>Mo</li>
											  	<li>Tu</li>
												<li>We</li>
											  	<li>Th</li>
											  	<li>Fr</li>
											  	<li>Sa</li>
											  	<li>Su</li>
											</ul>

											<ul class="days">
											  <li>1</li>
											  <li>2</li>
											  <li>3</li>
											  <li>4</li>
											  <li>5</li>
											  <li>6</li>
											  <li>7</li>
											  <li>8</li>
											  <li>9</li>
											  <li>10</li>
											  <li>11</li>
											  <li>12</li>
											  <li>13</li>
											  <li>14</li>
											  <li>15</li>
											  <li>16</li>
											  <li>17</li>
											  <li>18</li>
											  <li>19</li>
											  <li>20</li>
											  <li>21</li>
											  <li><span class="active">22</span></li>
											  <li>23</li>
											  <li>24</li>
											  <li>25</li>
											  <li>26</li>
											  <li>27</li>
											  <li>28</li>
											  <li>29</li>
											  <li>30</li>
											  <li>31</li>
											</ul>

											
										</article>

								</div>
							</div>
							<div class="4u 12u(narrower)">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h3>NOTICIAS</h3>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
											Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
											Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
											<footer>
												<a href="#" class="button">REGISTRAR</a>
											</footer>
										</section>

										<section>
											<h3>EVENTOS</h3>
											<ul class="links">
												<li><a href="#">Reinado de la panela</a></li>
												<li><a href="#">Ornare in hendrerit in lectus</a></li>
												<li><a href="#">Semper mod quis eget mi dolore</a></li>
												<li><a href="#">Consequat etiam lorem phasellus</a></li>
												<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
												<li><a href="#">Semper mod quisturpis nisi</a></li>
											</ul>
											<footer>
												<a href="#" class="button">REGISTRAR</a>
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
			<script src="../assets/js/main.js"></script>

	</body>
</html>