
<?php 
	class validarSesion{
		public function iniciarSesion($id_usuario){

			$modelo=new conexion();
			$conexion=$modelo->get_conexion();

			$result=$conexion->prepare('SELECT * FROM usuarios WHERE id_usuario= :id_usuario');
			$result->bindParam(':id_usuario', $id_usuario);
			$pass=$_POST['pass'];
			$result->execute();

			if ($f=$result->fetch()){
				if ($pass==$f['pass']){

					session_start();

					$_SESSION['id_usuario']=$f['id_usuario'];
					$_SESSION['pass']=$f['pass'];
					$_SESSION['rol']=$f['rol'];
		
					$_SESSION['autenticada']="SI";


					if ($f['rol']==1){
						echo "<script>alert('BIENVENID@ Administrador')</script>";
						echo "<script>location.href='../Vista/menuAdministrador.php'</script>";
					}

					if ($f['rol']==2){
						echo "<script>alert('BIENVENID@ Operador Turistico')</script>";
						echo "<script>location.href='../Vista/menuOT.php'</script>";
					}

					if ($f['rol']==3){
						echo "<script>alert('BIENVENID@ PIT')</script>";
						echo "<script>location.href='../Vista/menuPIT.php'</script>";
					}

					
				}
				else{
					echo "<script>alert('CONTRASEÑA INCORRECTA')</script>";
					echo "<script>location.href='../index.php'</script>";
				}
			}
			else{

				echo "<script>alert('USUARIO INCORRECTO')</script>";
				echo "<script>location.href='../index.php'</script>";
			}
		}


		public function cerrarSesion(){
			$modelo=new conexion();
			$conexion=$modelo->get_conexion();

			session_start();
			session_destroy();

			echo "<script>location.href='../index.php'</script>";


		}
	}
 ?>