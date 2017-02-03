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
									<ul>
										<li><a href="#">Objetivos</a></li>
										<li><a href="#">Justificación</a></li>
										<li>
											<a href="#">Identidad</a>
											<ul>
												<li><a href="#">Vision</a></li>
												<li><a href="#">Mision</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="observatorioMunicipio.php">Municipio</a></li>
								<li><a href="observatorioInformacionTuristica.php">Información Turística</a></li>
								<li class="current"><a href="observatorioEventos.php">Eventos y Actividades</a></li>
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



<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(narrower)">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h3>Eventos</h3>
											<p>Aquí se encuentran los eventos más destacados.</p>
											
										</section>

										<section>
										
											<ul class="links">
												<li><a id="a" onclick="document.getElementById('reinado').style.display='block'">XXXVIII Reinado Nacional e Internacional de la Panela y Muestra Folclórica.</a></li>
												<li><a id="a" onclick="document.getElementById('bandas').style.display='block'">XXXIX FESTIVAL DEPARTAMENTAL DE BANDAS.</a></li>
												<li><a href="#">Festival de la Panela 2016</a></li>
												<li><a href="#">Consequat etiam lorem phasellus</a></li>
												<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
												<li><a href="#">Semper mod quisturpis nisi</a></li>
											</ul>
											
													<div class="month">
												<ul>
												    <li class="prev">❮</li>
												    <li class="next">❯</li>
												    <li style="text-align:center">
											    	  DICIEMBRE<br>
											     	 <span style="font-size:18px">2016</span>
											    	</li>
											  	</ul>
											</div>

											<ul class="weekdays">
											  	<li>Lu</li>
											  	<li>Ma</li>	
												<li>Mi</li>
											  	<li>Ju</li>
											  	<li>Vi</li>
											  	<li>Sa</li>
											  	<li>Do</li>
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
											  <li>22</li>
											  <li>23</li>
											  <li>24</li>
											  <li>25</li>
											  <li>26</li>
											  <li>27</li>
											  <li>28</li>
											  <li>29</li>
											  <li><span class="active"><a onclick="document.getElementById('reinado').style.display='block'">30</a></span></li>
											  <li>31</li>
											</ul>
											



											<br>
										</section>

								</div>
							</div>
							<div class="8u  12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>

											<header>
												<h2> <strong>Reinado De La Panela</strong></h2>
												
											</header>
											<div class="w3-container">
												<div class="w3-tooltip">
													<span class="image featured" onclick="document.getElementById('reinado').style.display='block'"><img id="img" src="../images/reinado.jpg" alt="" /></span>
													<p class="w3-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti pariatur error, 
													aperiam. Error cupiditate, harum maxime id dignissimos labore suscipit, eius aspernatur deserunt, 
													perspiciatis eligendi dolores itaque laboriosam provident debitis recusandae delectus totam dolor magni
										    		in fugiat explicabo. Optio ex itaque possimus! Rem natus, blanditiis cum praesentium laboriosam, quibusdam sint.</p>
	 											</div>										
											</div>  
										</article>
										<article>
											<header>
												<h2> <strong>Concurso Departamental De Bandas.</strong></h2>
												
											</header>
											<div class="w3-container">
												<div class="w3-tooltip">
													<span class="image featured" onclick="document.getElementById('bandas').style.display='block'"><img id="img" src="../images/bandas.jpg" alt="" /></span>
													<p class="w3-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti pariatur error, 
													aperiam. Error cupiditate, harum maxime id dignissimos labore suscipit, eius aspernatur deserunt, 
													perspiciatis eligendi dolores itaque laboriosam provident debitis recusandae delectus totam dolor magni
										    		in fugiat explicabo. Optio ex itaque possimus! Rem natus, blanditiis cum praesentium laboriosam, quibusdam sint.</p>
	 											</div>										
											</div>  
										</article>

								</div>
							</div>
						</div>
					</div>
				</section>










<!--VENTANAS  modales -->

<div class="w3-container">
 

  <div id="reinado" class="w3-modal">
      <div class="modal-content">">
    <div  class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('reinado').style.display='none'" 
        class="w3-closebtn">&times;</span>
        <h2>Reinado De La Panela</h2>
      </header>
      <div class="w3-container">
      <br>
      <img src="../images/reinadom.jpg" style="width:100%;" alt="">
      <p></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore enim, obcaecati quam iusto tenetur sunt id omnis, impedit nobis soluta, laboriosam neque accusantium rerum voluptates porro tempora. Dolores adipisci accusamus perspiciatis ipsam enim maxime, placeat nesciunt, repudiandae qui amet quidem, voluptates cum fugiat magni, accusantium nulla aliquam quisquam molestiae impedit.</p>
        <p>Lugar:</p>
        <p>Fecha: </p>
        <p>Hora:</p>
      </div>
      <footer class="w3-container w3-teal">
        <p><center>Villeta</center></p>
      </footer>
    </div>
  </div>
</div>
</div>
<div class="w3-container" style="width=80%;">
 

  <div id="bandas" class="w3-modal">
      <div class="modal-content">">
    <div  class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('bandas').style.display='none'" 
        class="w3-closebtn">&times;</span>
        <h2>Concurso Departamental De Bandas.</h2>
      </header>
      <div class="w3-container">
      <br>
      <img src="../images/bandasm.jpg" style="width:100%;" alt="">
      <p></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore enim, obcaecati quam iusto tenetur sunt id omnis, impedit nobis soluta, laboriosam neque accusantium rerum voluptates porro tempora. Dolores adipisci accusamus perspiciatis ipsam enim maxime, placeat nesciunt, repudiandae qui amet quidem, voluptates cum fugiat magni, accusantium nulla aliquam quisquam molestiae impedit.</p>
        <p>Lugar:</p>
        <p>Fecha: </p>
        <p>Hora:</p>
      </div>
      <footer class="w3-container w3-teal">
        <p><center>Villeta</center></p>
      </footer>
    </div>
  </div>
</div>
</div>
































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