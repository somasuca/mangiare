<?php

if (isset($_POST['btn'])) {
include 'conexion.php';

// $total=$prec * $cant;

$cliente = $_POST['cliente'];
$producto =$_POST['proct'];
$prec=$_POST['prec'];
$cant = $_POST['cant'];
$total =$prec * $cant;
$estado = $_POST['estado'];
$mesa = $_POST['mesa'];
$mesero =$_POST['mesero'];

$consulta = "INSERT INTO pedidos(nombre_cliente, producto, precio, cantproductos, total, estado, 
mesas_idmesas, meseros_identificacion) VALUES ('$cliente', '$producto', '$prec', '$cant','$total',
'$estado', '$mesa', '$mesero')";
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



