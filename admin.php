<?php
session_start();
if (isset($_SESSION['tipo'])) {
	if ($_SESSION['tipo']==1) {
		?>
		<!DOCTYPE html>
		<html>
		<head>
		<meta charset="utf-8">
			<title></title>
			<style type="text/css">
		  input{
		        border-radius: 7px;
		        border: 7px;
		        background: #DC8936;
		    }
		    .boton{
		      background-color:  white;
		    }
		    .boton:hover{
		      background-color: #DC8936;
		      color: white; 
		    }
		    div{
		        
		        margin: 100.4px;
		        border-radius: 52.3px;
		        }
		    .cj{

		        margin: -1.4px;
		        border-radius: 24.3px;
		        background: beige;
		        width: 203px;
		        height: 400px;
		    }
		    body{
		      background: white;
		    }
		    table{
		    margin: -5.6px;
		    border-radius: 18.3px;
		    }
		    .barra{
		    background: beige;
		    border-radius: 10px;
		    height: 43px;
		    }
		    a{
		    	color: black;
		    }
		    a:hover{
		      color: #1C2833; 
		    }

		    .l{
		    	border-radius: 15px;
		    	width: 200px;
		    	    height: 292px;
		    }


		    </style>
		</head>
		<body><center> 
		<table class="sup" style="background: #566573" >
					<tbody><tr>


						<td width="10%">
							<center><img class="logo" src="../imagen/nn.png" width="78%"></center>
						</td>
						<td width="90%">
							<center><p class="titulo"><h1 style="width: 90%">К Н І Г А</h1>
							<h4>A D M I N I S T R A D O R</h4></p></center>
						</td>



						<td id="aside">
							<center>
								<style type="text/css">
									

								</style>
								 <br>
								 <a href=""><img src="" style=" width: 85%;"></a>  
								<br><br>
													


								</div>	
								
							<br><br><center><img src="" width="200px"></center>
						</td>
					</tr>

				</tbody></table></center><br>
				<table class="barra">
					<tr>
						<td width="5%">
						<a href="mostrar.php">usuarios   📔</a> 
						</td>
						<td width="5%">

						<a href="mostrarPrestamos.php">Prestamos  📖</a>
						</td>
						<td width="5%">

						<a href="mostrarlibros.php">libros  📚</a>	
						</td>
						<td width="5%">

						<a href="salir.php"> volver 📓</a> 
						</td>
					</td>


					</tr>



				</table>

				<br>

		<td width="20%">
					
						
		</div></CENTER>

		</td>
		</body>
		</html>

		<?php
	}
	else{
		echo "el usuario no esta autorizado";
	}
}
else{
	echo "Inicie session primero";
}

?>
