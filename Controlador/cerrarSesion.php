<?php 
	require_once('../Modelo/conexion.php');
	require_once('../Modelo/validarSesion.php');

	$consultas= new validarSesion();
	$result=$consultas->cerrarSesion();
 ?>