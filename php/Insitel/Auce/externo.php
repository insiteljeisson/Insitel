<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<style type="text/css">
body{

background-repeat: no-repeat;
background-size: 100%;
height: 100%;
zoom: 100%;
}	
.hero {
  background: linear-gradient(rgba(255,255,255,.9), rgba(255,255,255,.9)), url("../../../img/insitel.jpg");
    /*background-image: url("../../../img/insitel.jpg");*/
    /*opacity: 0.75;*/
}
iframe{
width:90%;
height: 400px;

}

td{
padding: 1px 150px 2px 30px;
text-align: center;
}
section{padding: 5px 5px 5px 100px;}

@media only screen and (max-width: 1377px) {
body{
width: 500px;	
zoom: 80%;
}	
iframe{
width:100%;
height: 400px;

}
td{
padding: 1px 1px 1px 1px;
}
h1{
width:5%;
}
section{padding: 5px 5px 5px 5px;
}

}

</style>
<body class="hero">
	<?php 
	include("../../../conexion/conexion.php");

	$exter	=(isset($_GET['exter'])    ? $_GET['exter']    : '');
	$conse	=(isset($_GET['conse'])    ? $_GET['conse']    : '');
	echo $exter;

  $buscarestado="SELECT estadoI from ingresocasos where ConsecutivoI=$conse and externoI=$exter";
  $resultbusqestado=mysqli_query($conexion,$buscarestado);  
  $fila = mysqli_fetch_row($resultbusqestado);
  echo $fila[0];

  
	 

  

   if ($fila[0]=="En proceso"){  
   $busqueda3="SELECT consecutivo,interno,externo,estadoI,requerimiento,descripcionR FROM registrocasos INNER JOIN ingresocasos ON registrocasos.consecutivo=ingresocasos.consecutivoI INNER JOIN datosauce ON registrocasos.externo1=datosauce.externo where externo=$exter and consecutivo=$conse";
   $result1=mysqli_query($conexion,$busqueda3);  
  
  echo ' <br><table border="1" style="margin: 0 auto;">
    
  <tr>
      <th>Casos</th>
      <th>Interno</th>      
      <th>Externo</th>      
      <th>Estado</th>
      <th>Falla</th>
      <th>descripcion</th>     
      
    </tr>';

    while($row = mysqli_fetch_array($result1)) {
    
   echo" 
    <button onclick='history.back()'>Volver</button>
    <tr>
    <!-- <form action='Auce_1.php?Externoget=$row[externo]' method='post' enctype='multipart/form-data'><input class='input1' type='submit' value='VOLVER' onclick=this.form.action='Auce_1.php?Externoget=$row[externo]');?'></input><FORM> -->
      
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td>$row[2]</td>          
      <td>$row[3]</td>
      <td>$row[4]</td>
      <td>$row[5]</td>
      </tr>
      <tr>
      <br>
      
      
      

     
    </tr>
    
    </table>     
    
   ";
 }
 }else{
  $busqueda3="SELECT * FROM ingresocasos INNER JOIN datosauce ON ingresocasos.externoI=datosauce.externo  where externo=$exter and ingresocasos.consecutivoI=$conse";
   $result1=mysqli_query($conexion,$busqueda3);

  while($row = mysqli_fetch_array($result1)) {
      $consecutivo=$row[0];
      $externo=$row[1];
      $estado=$row[2];          
      $componente=$row[3];
      $descripcionf=$row[4];
      $detalle=$row[5];
      $descripcions=$row[6];
      $fecha=$row[7];
      $hora=$row[8];
 

 }
 echo '<br><table border="1" style="margin: 0 auto;"> 
  <tr>
      <th>consecutivo</th>
      <td>'.$consecutivo.'</td>      
   </tr>
   <tr>
      <th>externo</th>
      <td>'.$externo.'</td>     
   </tr>
   <tr>
      <th>estado</th>
      <td>'.$estado.'</td>      
   </tr>
   <tr>
      <th>componente</th>
      <td>'.$componente.'</td>      
   </tr>
   <tr>
      <th>descripcionf</th>
      <td>'.$descripcionf.'</td>      
   </tr>
   <tr>
      <th>detalle</th>
      <td>'.$detalle.'</td>      
   </tr>
   <tr>
      <th>descripcions</th>
      <td>'.$descripcions.'</td>      
   </tr>
   <tr>
      <th>fecha conclusión</th>
      <td>'.$fecha.'</td>      
   </tr>
   <tr>
      <th>hora</th>
     <td>'.$hora.'</td>      
   </tr>
   </table>';

}

    

$busqueda3="SELECT barrio,direccion,coordenadas,enlacemapa,registrocasos.fecha AS fecha1,registrocasos.hora AS hora1 FROM registrocasos INNER JOIN ingresocasos ON registrocasos.consecutivo=ingresocasos.consecutivoI INNER JOIN datosauce ON registrocasos.externo1=datosauce.externo where externo=$exter and consecutivo=$conse";
   $result1=mysqli_query($conexion,$busqueda3);

  

    while($row = mysqli_fetch_array($result1)) {

    $barrio=$row[0];
      $direccion=$row[1];
      $coordenadas=$row[2];
      $mapa=$row[3];          
      $Fecha=$row[4];
      $Hora=$row[5];
      
    
   echo' <br><table border="1" style="margin: 0 auto;"> 
  <tr>
      <th>barrio</th>
      <td>'.$barrio.'</td>      
   </tr>
   <tr>
      <th>direccion</th>
      <td>'.$direccion.'</td>     
   </tr>
   <tr>
      <th>coordenadas</th>
      <td>'.$coordenadas.'</td>      
   </tr>
   <tr>
      <th>Fecha</th>
      <td>'.$Fecha.'</td>      
   </tr>
   <tr>
      <th>Hora</th>
      <td>'.$Hora.'</td>      
   </tr>   
   </table>
    
      
      

   <section><p><b>Mapa<b></p>'.$mapa.'</section>
      
      

     
    ';
   
    

}


	 ?>


</body><a href=""></a>
</html>