<?php
include 'conexion.php';
$consult   = "SELECT * FROM mesas";
$resultado =mysqli_query($conect, $consult);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       tr, td{
      border: 0.5px solid;

      }
      td{
        width: 281px;
      } */
      
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="">
          <img src="https://cdn-icons-png.flaticon.com/512/1980/1980788.png" alt="" class="m">   MANGIARE</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Volver <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="mostrarmeseros.php">Mostrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buscarr.php">Buscar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formulario.html">Meseros</a>
              </li>

            </ul>
            <!-- <span class="navbar-text">
              Navbar text with an inline element
            </span> -->
          </div>
        </nav>
<!-- <div style="text-align: center;"> -->
<h1>Mostrar mesas</h1>

<div class="container">
<div style="table-responsive">


  <table style="table table-primary">
    <thead>
    <tr>
        <th class="">identificacion</th>
        <th class=""># mesa</th>
        <th class="">mesero encargado</th>
        <th class="">acciones</th>
        <th class="">acciones</th>
    </tr>
    </thead>
     <?php
  
while($vec=mysqli_fetch_array($resultado)){ ?>
<tbody>
  <tr>
      <td><?php echo $vec [0] ?></td>
      <td><?php echo $vec[1] ?></td>
      <td><?php echo $vec [2] ?></td>
      <td><a href="actulizar.php?ident=<?php echo $vec [0]?>">&#10000</a></td>
      <td ><a  href="eliminar.php?iden=<?php echo $vec [0]?>" class="elim">&#128465</a></td>
  </tr>
</tbody>

<?php } ?>

  </table>
 </div>
</div>
<br><br>
<center>
<a href="index.html">↩</a>
</center>
<script src="buscar.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
