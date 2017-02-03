<?php 
	class conexion{
		public function get_conexion(){
			$host="localhost";
			$db="observatorio";
			$user="root";
			$pass="";

			$conexion=new PDO("mysql:host=$host; dbname=$db;",$user, $pass);
			return $conexion;
		}
	}
 ?>