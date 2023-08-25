<!-- <?php-->
function conectar(){
    $servidor="localhost";
    $user="root";
    $clave="";
    $db="mangiare";
    $con=mysqli_connect($servidor, $user, $clave, $db) or die("error al conectar" .mysqli_error());
return$con;
} 
