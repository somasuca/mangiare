<?php

if (isset($_POST['btn'])) {
include 'conexion.php';


$cliente = $_POST['cliente'];
$producto =$_POST['proct'];
$prec=$_POST['prec'];
$cant = $_POST['cant'];
$total =$prec * $cant;
$estado = $_POST['estado'];


$consulta = "INSERT INTO pedidos (nombre_cliente, producto, precio, cantproductos, total, estado, ) VALUES ('$cliente', '$producto', '$prec', '$cant','$total', '$estado')";
$query =mysqli_query($conect, $consulta);

if ($query) {
    echo "Se guardó el registro " ;
    echo "<a href='index.html'>↩</a>";
}
else{
    echo "Tienes un error en la consulta";
}
}
else{
    echo "por favor llena el formulario";
}



