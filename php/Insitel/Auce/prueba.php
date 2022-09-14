<?php
$externo=2280;
$busqueda1="SELECT * FROM ingresocasos WHERE externoI=$externo";
include("../../../conexion/conexion.php");
$result=mysqli_query($conexion,$busqueda1);
    while($row = mysqli_fetch_array($result)) {

            /*Imprimir campo por indice*/
                   
        if ($externo==$row['externoI']) {
            echo "<br>".$row['consecutivoI'];$consecutivo1=$row['consecutivoI'];            
            echo "<br>".$row['estadoI'];$estado1=$row['estadoI'];
            echo "<br>".$row['externoI'];$externo1=$row['externoI'];
            
            break;
        }
        }
 
?>



















              
             

 

  

