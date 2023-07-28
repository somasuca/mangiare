<?php
include_once('CONEXION.php');
$resul=$_REQUEST['datos'];
$p="SELECT * FROM meseros WHERE identificacion=$resul";
$query =mysqli_query($conect, $p);
if(mysqli_num_rows($query)>0){
    while($bebecita=mysqli_fetch_assoc($query)){
        echo "<table>
        <thead>
            <tr>
                <th>Identificacion</th>
                <th>Nombre</th>
                <th>Codigo</th>
            </tr>
        </thead>
        <tbody>
            <tr>";
                echo "<td>".$bebecita['identificacion']."</td>";
                echo "<td>".$bebecita['nombre']."</td>";
                echo "<td>".$bebecita['codigo']."</td>";
             echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    }
}else{
    echo "Numero de identificacion no encontrado";
}

?>
