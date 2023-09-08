<?php 


if (isset($_POST['entrar'])) {
	
	$nombre=$_POST['nombre'];
	$identificacion=$_POST['identificacion'];
	include ('conexion.php');
	$conect=conectar();
	$consulta= "SELECT * FROM meseros WHERE nombre='".$nombre."'";
	$res=mysqli_query($conect,$consulta);
	$filas=mysqli_num_rows($res);

	if($filas>0){
		$u=mysqli_fetch_array($res);
		if ($identificacion==$u['identificacion']) {
			session_start();
				$_SESSION['tipo']=$u['tipo'];
				$_SESSION['name']=$u['nombre'];
				$_SESSION['nombre']=$nombre;
				$_SESSION['user']=$u['identificacion'];
			echo $_SESSION['nombre'];
			echo $_SESSION['tipo'];
			switch ($u['tipo']) {
				case 0:
					header('location:inicioUsuario.php');
					$_SESSION['nombre']=$nombre;
					break;
				case 1:
					header("location:admin.php");
					$_SESSION['nombre']=$nombre;
					break;
				case 2:
					header("location:.php");
					$_SESSION['nombre']=$nombre;
					
				default:
					# code...
					break;
			}
		}
		}

		else{
		Echo "El usuario no existe!";
		}


	}



 ?>