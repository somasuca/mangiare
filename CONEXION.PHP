<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mangiare2";
 // se crea la conexión
$conect = mysqli_connect($servername, $username, $password, $dbname);

if ($conect->connect_error) {
die("Connection failed: ".$conect->connect_error); 
}
?>