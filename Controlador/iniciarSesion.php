<?php 
	require_once('../Modelo/conexion.php');
	require_once('../Modelo/validarSesion.php');

	$id_usuario=$_POST['id_usuario'];
	$pass=$_POST['pass'];

	$consultas= new validarSesion();
	$result=$consultas->iniciarSesion($id_usuario);
 ?>