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
padding: 50px 150px 50px 30px;
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
    
    <tr>
    <form action='Auce_1.php?Externoget=$row[externo]' method='post' enctype='multipart/form-data'><input class='input1' type='submit' value='VOLVER' onclick=this.form.action='Auce_1.php?Externoget=$row[externo]');?'></input><FORM>
      
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
    

}$busqueda3="SELECT barrio,direccion,coordenadas,enlacemapa,registrocasos.fecha AS fecha1,registrocasos.hora AS hora1 FROM registrocasos INNER JOIN ingresocasos ON registrocasos.consecutivo=ingresocasos.consecutivoI INNER JOIN datosauce ON registrocasos.externo1=datosauce.externo where externo=$exter and consecutivo=$conse";
   $result1=mysqli_query($conexion,$busqueda3);
  echo ' <br><table border="1">
    
  <tr>
      <th>barrio</th>
      <th>direccion</th>
      <th>coordenadas</th>
      <th>Fecha apertura caso</th>
      <th>Hora</th>
      
      
    </tr>';

    while($row = mysqli_fetch_array($result1)) {
    
   echo" 
    
    <tr> 
      
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td><a href='https://www.google.com/search?q=$row[2]' target='_blank'>$row[2]</a></td>          
      <td>$row[4]</td>
      <td>$row[5]</td>
      
      </tr>
      <tr>
      <br>
      
      
      

     
    </tr>
    
    </table>   
      

   <section><p><b>Mapa<b></p>$row[3]</section>
      
      

     
    </table>
   ";
    

}


	 ?>


</body><a href=""></a>
</html>