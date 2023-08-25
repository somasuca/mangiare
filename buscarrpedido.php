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
<h1>Mostrar pedidos</h1>


<div class="divazul" id="divid">
<input type="text" id="buscar"><br><br>
<button id="btnBuscar">Buscar</button><br><br>
</div>


<div id="resultados">
<?php
include 'conexion.php';
$consult   = "SELECT * FROM pedidos";
$resultado =mysqli_query($conect, $consult);
if(mysqli_num_rows($resultado)>0){
    ?>



    <table>
        <thead>
        <tr>
        <th class="">pedidos</th>
        <th class="">cliente</th>
        <th class="">producto</th>
        <th class="">cantidad</th>
        <th class="">precio</th>
        <th class="">total</th>
        <th class="">mesas</th>
        <th class="">estado</th>

    </tr>
        </thead>
        <tbody>
            <?php
            while($pedido=mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                    echo "<td>".$pedido['idpedidos']."</td>";
                    echo "<td>".$pedido['nombre_cliente']."</td>";
                    echo "<td>".$pedido['producto']."</td>";
                    echo "<td>".$pedido['cantproductos']."</td>";
                    echo "<td>".$pedido['precio']."</td>";
                    echo "<td>".$pedido['total']."</td>";
                    echo "<td>".$pedido['mesas_idmesas']."</td>";
                    echo "<td>".$pedido['estado']."</td>";

                echo "</tr>";
            }


            ?>
        </tbody>
    </table>
    <?php
}else{
    echo "No existen el pedido";
}
?>
</div>
</center>
<script src="buscarpedido.js"></script>
<!-- Esto no se BORRA -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>