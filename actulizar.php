<?php

$ident=$_GET['ident'];

include 'conexion.php';
$query="SELECT * FROM meseros WHERE identificacion=$ident";

$cons=mysqli_query($conect, $query);
$fila= mysqli_fetch_array($cons);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/boo">
    <style>
        input{
        border-radius: 10px;
        background-color: white;
        height: 24px;
        width: 200px;
        border: 0.3px solid;
       }
       .boton{
        background-color: white;
        color: black;
        width: 64px;
       }
       .boton:hover{
        background-color: black;
        color: white;
       }
        body{
        background-image: url("");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
       }
        div{
        border-radius: 10px;
        width: 1300px;
       }
       img{
        height: 50px;
       }
       h1{
        font-size: 50px;
       }

    

    </style>
    <title>Document</title>
</head>
<body>
<div>   
   
 
    <form action="dosactualizarr.php?id=<?php echo $fila[0]; ?>" method="post"><CEnter>
        <h1><i><b>👩‍🍳FORMULARIO👩‍🍳</i></b></h1></CEnter>    
    <CEnter><h1><i><b>👨‍🍳MESAS👨‍🍳</i></h1></CEnter>
    <CEnter><label for=""><i><b>Identificacion</i></b></label><br><br></CEnter>
    <CEnter><input type="number" value="<?php echo $fila[0] ?>" placeholder="🎫" name="ident" ><br><br></CEnter>
    <CEnter><label for=""><i><b>Nombre</i></b></label><br><br></CEnter>
    <CEnter><input type="text" value="<?php echo $fila[1] ?>" placeholder="🙂" name="nom"><br><br></CEnter>
    <CEnter><label for=""><i><b>Codigo</i></label><br><br></CEnter>
    <CEnter><input type="text" value="<?php echo $fila[2] ?>" placeholder="🔐" name="cod"><br><br></CEnter>
    <CEnter><input type="submit" class="boton" name="btn"><br><br></CEnter>
    <CEnter><a href="mostrarmesa.php">↩</a><br><br></CEnter>
</div>



    </form></CEnter>
</body>
</html>