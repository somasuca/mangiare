<?php
include 'conexion.php';
$query="SELECT  identificacion,nombre FROM meseros";
$consulta=mysqli_query($conect, $query);
$queryy="SELECT id,nombre FROM productos";
$consultaa=mysqli_query($conect, $queryy);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <style>

       h1{
        font-size: 50px;
       }

       body{
        background-color: #5ead70;
       }

       .centrar{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
       }

    </style>
    <title>Document</title>
</head>
<body>
<!-- <div>   
    <CEnter><h1><i><b>FORMULARIO</i></b></h1></CEnter>    
    <CEnter><h1><i><b>MESEROS</b></i></h1></CEnter>
    <form action="regalmesero.php" method="post">
        <div class="form-group">
            <label for="exampleDropdownFormEmail2">Identificacion</label>
            <input type="number" class="form-control" id="exampleDropdownFormEmail2" placeholder="Identificacion" name="ident">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword2">Nombre</label>
            <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Nombre" name="nom">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword2">Codigo</label>
            <input  class="form-control" id="exampleDropdownFormPassword2" placeholder="Codigo" type="text"  name="cod">
        </div>
        <CEnter><input type="submit" class="btn btn-secondary btn-lg" name="btn"><br><br></CEnter>
        <CEnter><a href="index.html">VOLVER</a><br><br></CEnter>
    </form>
</div> -->
<div class="centrar">
    <div class="card">
        <div class="card-header bg-success text-light">
            
            <CEnter><h1><i><b>FORMULARIO MESEROS</b></i></h1></CEnter>
        </div>
        <div class="card-body">
            <form action="regalpedido.php" method="post">
                <div class="form-group">
                <select name="meseros" id="productos" class="form-control">
                    <option selected>seleccione meseros(a)</option>
                <?php
                    while ($v=mysqli_fetch_array($consulta)) {
                        echo "<option value=".$v[0].">".$v[1]."</option>";
                    }   
                ?>
                </select><br>
                <select name="productos" id="productos" class="form-control">
                <option selected>seleccione productos</option>
                <?php
                    while ($s=mysqli_fetch_array($consultaa)) {
                        echo "<option value=".$s[0].">".$s[1]."</option>";
                    }   
                ?>
                </select><br>
                    <label for="exampleDropdownFormEmail2">nombre cliente</label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail2"  name="cliente">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">productos</label>
                    <input type="text" class="form-control" id="exampleDropdownFormPassword2"  name="proct">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">precion del producto</label>
                    <input  class="form-control" id="exampleDropdownFormPassword2"  type="number"  name="prec">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">cantidad de podructos</label>
                    <input  class="form-control" id="exampleDropdownFormPassword2"  type="number"  name="cant">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">estado</label>
                    <input  class="form-control" id="exampleDropdownFormPassword2"  type="text"  name="estado">
                </div>
                <CEnter><input type="submit" class="btn btn-success btn-lg" name="btn"><br><br></CEnter>
                <CEnter><a href="index.html">VOLVER</a><br><br></CEnter>
            </form>
        </div>
        
    </div>
</div>

<!-- {<td 20%> <img src="la_noche_estrellada.jpg" alt="10px"> </td> } -->


</CEnter>

</body>
</html>