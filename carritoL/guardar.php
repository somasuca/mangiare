<doctype HMTL!>
<!DOCTYPE html>
<html>
<head>

	<title>Productos</title>
</head>
<body>
<style type="text/css">

        img{
            wnombreth:100px ;
        }
    </style>

		<FORM ACTION="" Method="POST" enctype="multipart/form-data">
				<input type="Text" name="nombre" > <br>
				<input type="Text" name="tipo" ><br>
				<input type="Text" name="precio" ><br>
				<input type="Text" name="tama" ><br>
				<input type="Text" name="descripcion" ><br>
				<input type="File" name="imagen"><br>
				<input type="submit" name="Enviar" value="Guardar"><br><br>
			    <a href=""  ><img src="" ></a>
		</FORM>
</body>
</html>
<?php
if (isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
	$tipo=$_POST['tipo'];
	$precio=$_POST['precio'];
	$tama=$_POST['tama'];
	$descripcion=$_POST['descripcion'];
	include ("../conexion.php");
	// $conect=conectar();
	$verif="select * from productos where nombre='".$nombre."'"; //Consulta para ver si la nombre ya existe
	//echo $verif;
	$exist=mysqli_query($conect,$verif);
	$reg=mysqli_num_rows($exist);
	//print_r($_FILES);
	if ($reg==0){				//Si la nombre es nueva
			$nombre_arch=$_FILES['imagen']['name']; 	//toma el nombre del archivo Original del archivo
	 		$tmp_arch=$_FILES['imagen']['tmp_name'];	 //Ubicacion temporal del  archivo a cargar
			$tipo_arch=$_FILES['imagen']['type'];		//Tipo de archivo a subir
			$len=strlen($nombre_arch);				// Mnombree la longitun en de acracteres del nombre original	
			$pos=stripos($nombre_arch,".");			// Ubicoa el punto para saber cual es la extencion del archivo
			$lenext=$len-$pos;						//Calcula la longitud de caracteres de la extension
			$ext=substr($nombre_arch,$pos);			//Extrae la cadena de caracteres de la extension del archivo
			$nombrea=$nombre.$ext;					//Renombra el arvhico con el texto de la nombre

			if (!file_exists("../imagenes/basedatos/")){ //Verifica si la carpeta existe
				mkdir("../imagenes/basedatos/");	
			}			//Crea una carpeta nueva
			$ub_archivo="../imagenes/basedatos/".$nombrea;	//Define la ubicacion del archivo
			move_uploaded_file($tmp_arch,$ub_archivo);	//Copia el arvhico en la ubicacion indicada
			$sql="insert into productos (nombre, tipo, precio, tama, descripcion, imagen) values ('".$nombre."','".$tipo."','".$precio."','".$tama."','".$descripcion."','".$ub_archivo."')";
			// Echo $sql;
			$res=mysqli_query($conect,$sql);
			echo "Producto registrado!";

			header('Refresh: 2 URL=../index.html');
	}
		else{
			echo "La nombre ya existe!";
			//header('Refresh: 2 URL=Funcion1.php');
	}
}
?>