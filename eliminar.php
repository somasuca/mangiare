<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input{
        border-radius: 10px;
        background-color: white;
        height: 50px;
        width: 100px;

       }
       .boton{
        background-color: white;
        color: black;
       }
       .boton:hover{
        background-color: red;
        color: white;
       }
       .boto{
        background-color: white;
        color: black;
       }
       .boto:hover{
        background-color: green;
        color: white;
       }
       img{
        height: 200px;
       }
    </style>



</head>
<body>
<?php
    $id=$_REQUEST['iden'];
?>
<center><h1>¿ESTAS SEGURO DE ELIMINAR ESTE USUARIO?</h1>
<img src="unicornio.png " alt="" ><br><br><br><br><br>
<form action="eliminarr.php?id=<?php echo $id; ?>" method="POST">
<input type="submit" value="aceptar" class="boto" name="btn">
<input type="submit" value="cancelar" class="boton" >
</form>
</center>


</body>
</html>