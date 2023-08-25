<?php
include '../conexion.php';
//$conect=conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet" href="estilosmenuL.css">
    <style type="text/css">

        img{
            width:100px ;
        }
    </style>


</head>
<body>
    <header>
        <h1>Menu</h1>

        <div class="container-icon">
            <div class="container-cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                  </svg>
                  <div class="count-products">
                    <span id="contador-productos">0</span>
                </div>
            </div>

              <div class="container-cart-products hidden-cart">
                <div class="row-product">
                    <div class="cart-product">
                        <div class="info-cart-product">
                            <span class="cantidad-producto-carrito"></span>
                            <p class="titulo-producto-carrito"></p>
                            <span class="precio-producto-carrito"> </span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                          
                    </div>
                </div>

                 <div class="cart-total">
                    <h3>total</h3>
                    <span class="total-pagar"></span>
                 </div>
              </div>

              
        </div>
        </header><br>
        <FORM Action="" Method="POST">
            <SELECT name="campo">
                <option value="referencia">Referencia</option>
                <option Value="nombre">nombre</option>
            </SELECT>
            <input type="" name="dato">
            <input type="submit" name="Enviar" Value="Buscar">
        </FORM><br><br>
 <?php
if(isset($_POST['Enviar']) and !($_POST['dato']=="") ){
     $filtro=" where ".$_POST['campo']." like '%".$_POST['dato']."%'";
}else{
    $filtro="";
}
$consulta   = " SELECT * FROM productos".$filtro ;

$resultado =mysqli_query($conect, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
 $n=0;
 echo "<table>";
 $linea=$filas%4;

if($linea==0){
    if($n>0){echo "</tr><tr>";}
 }
else{
    {echo "<tr>"; }
}
$n++;
while($vec=mysqli_fetch_array($resultado)){ ?>
<td width="25%">
<div class="container-items"><center>
    <div class="item">
        <figure>
        <img src="<?php echo $vec ['imagen']; ?>" width="90%" alt="producto" >
        </figure>
        <h2><?php echo $vec['nombre']; ?></h2>
        <p><?php echo "$ ".$vec ['valor']; ?></p>
        <button class="btn-add-cart">Añadir al carrito</button>
    </center></div>
</div>
</td>
    <?php }
    echo "</tr></table>";
}
     ?>

    
   <a href="../index.html"  ><img src="../imagenes/descargas.png" ></a>


    <script src="menu.js"></script>
</body>
</html>
