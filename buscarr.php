<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
    <style>
        button{
            background:white;
            color: black;
            border: 0.3px solid;
            border-radius: 12px;
        }
        button:hover{
            background: black;
            color: white;
        }     
        input{
            border: 0.3px solid;
            border-radius: 12px;
        }  


    </style>
</head>
<body>
    <center>
<h1>Mostrar meseros</h1>


<div class="divazul" id="divid">
<input type="text" id="buscar"><br><br>
<button id="btnBuscar">Buscar</button><br><br>
</div>


<div id="resultados">
<?php
include 'conexion.php';
$consult   = "SELECT * FROM meseros";
$resultado =mysqli_query($conect, $consult);
if(mysqli_num_rows($resultado)>0){
    ?>



    <table>
        <thead>
            <tr>
                <th>Identificacion</th>
                <th>Nombre</th>
                <th>Codigo</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while($meseros=mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                    echo "<td>".$meseros['identificacion']."</td>";
                    echo "<td>".$meseros['nombre']."</td>";
                    echo "<td>".$meseros['codigo']."</td>";

                echo "</tr>";
            }


            ?>
        </tbody>
    </table>
    <?php
}else{
    echo "No existen meseros";
}
?>
</div>
</center>
<script src="buscar.js"></script>
<!-- Esto no se BORRA -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>