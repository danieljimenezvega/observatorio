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
								<li class="current"><a href="observatorioMunicipio.php">Municipio</a></li>
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
				          	<a href="">REGISTRARME</a>

				        </div>
				    </form>

				    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancelar</button>
				    </div>

			    </div>
			</div>
		</div>


		



<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="3u 12u(narrower)">
								<div id="sidebar1">

									<!-- Sidebar 1 -->
                                 
										<section>
										<h3 align="center">ESCUDO</h3>
											<div class="w3-card-12">
											  <img src="../images/escudo.png" alt="ESCUDO"  style="width: 45%; margin-left: 25%;">
											  <div class="w3-container w3-center">
											    <p>Por medio del Acuerdo N° 014 del 21 de Diciembre de 1974,
												  el Concejo adoptó como escudo nobiliario para Villeta.</p>
                                       
                                          </div>

                                        


<div class="w3-container">

<div id="escude" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-green"> 
   <span onclick="document.getElementById('escude').style.display='none'" 
   class="w3-closebtn w3-padding-top">&times;</span>
   <h2>ESCUDO</h2>
  </header>

  

  <div id="London" class="w3-container city">
  <h2><img src="../images/escudo.png" style="width: 35%; margin-left: 30%;"></h2>
   
   <p align="justify">El propuesto por el doctor Jorge Cleves Vargas y en el que ostentan desde ese momento
    en sus banderas, estandarte, edificios y documentos públicos las siguientes armas: 
    Escudo cortado por una faja en gules (rojo) que lleva un caduceo de oro; su parte superior en oro, 
    con el águila de sable (negro) coronada de la ciudad de Bogotá, y en su parte inferior, 
    el Escudo de Armas de la ciudad de Honda. En la cinta superior se leen las palabras "Ciudad Turística"
     zanjadas por un casco de guerra adornado con los colores de la Bandera de Colombia.</p>
  </div>

  

  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-btn w3-right w3-white w3-border" 
   onclick="document.getElementById('escude').style.display='none'">Cerrar</button>
  </div>
 </div>
</div>

</div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>

										</section>

										<section>
											
											<footer>

												<button onclick="document.getElementById('escude').style.display='block'" class="button"style="width: 50%; margin-left: 23%; margin-top: 8%" class="button">Ver más</button>
											</footer>
										</section>

								</div>
							</div>
							<div class="6u 12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h1 align="center">RECORRIDO VIRTUAL</h1>
			
											</header>

											<span ><iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2s!4v1480450043105!6m8!1m7!1s0oMpuCH-761sdw7SRPHnZg!2m2!1d5.011674000149384!2d-74.4701411891306!3f30.95!4f-11.200000000000003!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></span>
                                             <p>
											<p align="justify">A tan solo 90 minutos de recorrido en automóvil desde Bogotá se encuentra Villeta Cundinamarca,
											 el sitio de descanso ideal para quienes buscan disfrutar de la naturaleza y descansar del ruido y el estrés de la cuidad,
											 nuestra gran variedad de hoteles, bares, discotecas y restaurantes le proporcionan a los turistas gran variedad de opciones de diversión y descanso,
											 o si es amante de la aventura en Villeta podrá disfrutar de nuestras cascadas más conocidas como los saltos de los micos con saltos y caídas de altura,
											 paseos ecológicos a los trapiches y granjas paneleras, avícolas y piscícolas Villetanas, en donde conocerá el proceso de producción de la panela y productos derivados de la caña, 
											 motocross, enduro, escalada, trekking, rafting, rapel, paintball, canoping, reinados, muestras culturales, gastronómicas y muchas atracciones más….</p>

								

												<h1 align="center"> ¿CÓMO LLEGAR?</h1>
											<p><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d103837.48004009412!2d-74.478173!3d4.999254!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d5.011706!2d-74.470362!5e1!3m2!1ses!2ses!4v1480542812285" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>



										</article>
								</div>
							</div>
							<div class="3u 12u(narrower)">
								<div id="sidebar2">

									<!-- Sidebar 2 -->

										<section>

											 <h3 align="center"> BANDERA </h3>
											<div class="w3-card-12">
											  <img src="../images/Bandera.png" alt="ESCUDO" style="width: 50%; margin-left: 25%;">
											  <div class="w3-container w3-center">
											    <p>El Concejo Municipal, por Acuerdo No. 049 de julio 7 de 1.977, 
											      conformó la bandera de la ciudad de Villeta.</p>
										</section>

										<section>
											<!-- modal -->
											 <div class="w3-container">
<div id="bandera" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-green"> 
   <span onclick="document.getElementById('bandera').style.display='none'" 
   class="w3-closebtn w3-padding-top">&times;</span>
   <h1>BANDERA</h1>
  </header>

  

  <div id="London" class="w3-container city">
  <h2><img src="../images/Bandera.png" style="width: 40%; margin-left: 30%;"></h2>
         <p align="justify">Con los siguientes colores representativos:
           Una franja verde de cuarenta centímetros de ancho, que representa la fertilidad de su suelo
            y la producción agrícola. Una franja de color amarillo, de cuarenta centímetros de ancho,
             que representa la riqueza del Municipio y una franja de igual dimensión de color rojo, que
              representa el sacrificio de sus hijos, quienes desde la independencia han ofrendado su vida
               por la libertad. La bandera de Villeta lleva en el centro el escudo del Municipio. El largo
                es entonces de dos metros con cincuenta centímetros (2.50 cm) por un ancho de 1,2 metros con
                 el escudo del Municipio bordado en el Centro.</p>
  </div>

 

  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-btn w3-right w3-white w3-border" 
   onclick="document.getElementById('bandera').style.display='none'">Cerrar</button>
  </div>
 </div>
</div>

</div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>

								<footer>
												<button onclick="document.getElementById('bandera').style.display='block'" style="width: 50%; margin-left: 23%; margin-top: 8%" class="button">Ver más</button>
											</footer>
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