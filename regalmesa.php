<?php
//verifico que vengan datos de un formulario
if (isset($_POST['btn'])) {

//incluyo el archivo de conexion para acceder a la vblede conexion
include 'conexion.php';

//capturo los datos que vienen del formulario
$nombre = $_POST['nom'];
$estado = $_POST['est'];

$consulta = "INSERT INTO mesas ( num_mesa, estado) VALUES ( '$nombre', '$estado' )";
$query =mysqli_query($conect, $consulta);

if ($query) {
    echo "Se guardó el registro<br>" ;
    echo "<a href='index.html'>↩</a>";

}
else{
    echo "Tienes un error en la consulta";

}
}
else{
    echo "por favor llena el formulario";
}



