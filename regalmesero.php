<?php

if (isset($_POST['btn'])) {


include 'conexion.php';


$identificacion = $_POST['ident'];
$nombre         = $_POST['nom'];
$codigo         = $_POST['cod'];

$consulta = "INSERT INTO meseros (identificacion, nombre, codigo) VALUES ($identificacion, '$nombre', '$codigo' )";
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



