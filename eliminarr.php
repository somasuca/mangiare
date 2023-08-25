<?php

//verifico que vengan datos de un formulario
if (isset($_POST['btn'])) {

//incluyo el archivo de conexion para acceder a la vblede conexion
include 'conexion.php';

$identificacion=$_REQUEST['id'];

$consulta = "DELETE FROM `meseros` WHERE identificacion=$identificacion";
$query =mysqli_query($conect, $consulta);

if ($query) {
    echo "se elimino el usuario" ;
    echo "<a href='mostrarmeseros.php'>↩</a>";

}
else{
    echo "el usurio no fue eliminado";
    echo "<a href='mostrarmeseros.php'>↩</a>";
}
}
?>

