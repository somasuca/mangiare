<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
    </style>
</head>
<body><center>

<?php
//verifico que vengan datos de un formulario
if (isset($_POST['btn'])) {

//incluyo el archivo de conexion para acceder a la vblede conexion
include 'conexion.php';

$id=$_REQUEST['id'];
//capturo los datos que vienen del formulario
$identificacion = $_POST['ident'];
$nombre         = $_POST['nom'];
$codigo         = $_POST['cod'];


$consulta = "UPDATE mesas SET idmesas='$identificacion',numero_mesa='$nombre',meseros_identificacion='$codigo' WHERE idmesas=$id";
$query =mysqli_query($conect, $consulta);

if ($query) {
    echo "<h1>Se actualizo correctamente la mesa</h1>"."<br>"."<img src= >"."<br>" ;
    echo "<a href='mostrarmesa.php'>↩</a>";

}
else{
    echo "Tienes un error en la consulta";

}
}
else{
    echo "por favor llena el formulario";
}

?>






</body></center>
</html>
