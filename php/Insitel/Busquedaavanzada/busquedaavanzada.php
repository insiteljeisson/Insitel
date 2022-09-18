<?php 
include("../../../conexion/conexion.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../../css/BusquedaCss/busquedacss.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>    
	<title>Busqueda</title>
</head>
<header>
 <?php $Externoget1=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');     
echo ' <a href="../Auce/Auce_1.php?Externoget="'.$Externoget1.'"><input type="submit" name="" type="button" value="Volver" class="input1"></a>'  ?>  
Busqueda por auce
</header>
<body class="hero">
	<script>
			 function myFunction()
			                       {
			  var x = document.getElementById("externo").value;
					  // document.getElementById("externo2").innerHTML = x; 			   		  		
               window.location.href = "busqueda1.php?Externoget="+ x;

							       }
	         function myFunction1()
			                       {
			  var y = document.getElementById("consecutivo").value;
					  // document.getElementById("externo2").innerHTML = x; 			   		  		
               window.location.href = "busqueda1.php?Consecutivoget="+ y;

							       }
			function myFunction2()
			                       {
			  var z = document.getElementById("fecha").value;
					  // document.getElementById("externo2").innerHTML = x; 			   		  		
               window.location.href = "busqueda1.php?fechaget="+ z;

							       }

	</script>

   
     
	<aside><label>Externo</label>
		<input  name="externo" list="externo1" id="externo"  onchange="myFunction()"  class="col-12" type="search"  title="busqueda por Externo"  placeholder="Busqueda por Externo" value='<?php echo $Externoget1; ?>'>

       <datalist  id="externo1" class="col-12">
                   <b></b> 
			 <?php
                 $busqueda= "SELECT * FROM datosauce where externo";
                 $result = mysqli_query($conexion,$busqueda);   
                 $numero=1;             
                     while ($valores = mysqli_fetch_array($result)) {
                            $numero=$numero+1; 
                            echo '<option value="'.$valores['externo'].'">
                                  <table class="default">  
                                     <tr>
                                     <td>'.$valores["externo"].'/</td>
                                     <td>'.$valores["interno"].'/</td>
                                     <td>'.$valores["direccion"].'/</td>
                                     <td>'.$valores["barrio"].'/</td>                                     
                                     </tr>                                    
                                     </table>
                                     </option>';
                             }
             ?>           </datalist></aside>

<?php $Consecutivoget1=(isset($_GET['Consecutivoget'])    ? $_GET['Consecutivoget']    : ''); ?> 
         <aside><label>Consecutivo</label>
		<input name="consecutivo" list="consecutivo1" id="consecutivo"  onchange="myFunction1()" onfocus="this.value=''" class="col-12" type="search"  title="busqueda por Externo"  placeholder="Busqueda por Consecutivo" value='<?php $Consecutivoget1 ?>'>

       <datalist  id="consecutivo1" class="col-12"> 
                   <b></b> 
			 <?php
                 $busqueda2= "SELECT * FROM ingresocasos where externoI";
                 $result2 = mysqli_query($conexion,$busqueda2);   
                 $numero=1;             
                     while ($valores2 = mysqli_fetch_array($result2)) {
                            $numero=$numero+1; 
                            if ($Externoget1==$valores2['externoI']) {  
                            
                            echo '<option value="'.$valores2['consecutivoI'].'">
                                  <table class="default">  
                                     <tr>
                                     <td> </td>
                                     <td>'.$valores2["consecutivoI"].'/</td>                                                                       
                                     </tr>                                    
                                     </table>
                                     </option>';
                                     }
                             }
             ?> </datalist> </aside>


  <?php

// $Externoget=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
// $busqueda1= "SELECT * FROM ingresocasos where externoI='$Externoget'";

$Consecutivoget=(isset($_GET['Consecutivoget'])    ? $_GET['Consecutivoget']    : '');
$busqueda1= "SELECT * FROM ingresocasos where ConsecutivoI='$Consecutivoget'";


    $result1 = mysqli_query($conexion,$busqueda1); 
	echo"<table> <tr> 
            <th>Consecutivo</th>
            <th>Externo</th>
            <th>Estado</th>
            <th>Componente</th>
            </tr>"; 
   
            
         while ($valores1 = mysqli_fetch_array($result1)) {
         	$Externoget=$valores1["externoI"];
                $Consecutivoget=$valores1["consecutivoI"];
                
                echo '<tr>
                      <td><a href="busquedaimg.php?Consecutivoget='.$Consecutivoget.'&Externoget='.$Externoget.'">'.$valores1["consecutivoI"].'</a></td>
                      <td><a href="../Auce/externo.php?exter='.$Externoget.'&conse='.$Consecutivoget.'">'.$valores1["externoI"].'</a></td>  
                      <td>'.$valores1["estadoI"].'</td>
                      <td>'.$valores1["componente"].'/</td>                      
                      </tr>';                                 

                 }
                 echo '</table>';

                 $result2 = mysqli_query($conexion,$busqueda1); 

            echo"<table> <tr>             
                        <th>Falla descripcion</th>
                        <th>detalle</th>
                        <th>Solución descripcion</th> </tr>";
             while ($valores2 = mysqli_fetch_array($result2)) {
                        $Externoget=$valores2["externoI"];
                            $Consecutivoget=$valores2["consecutivoI"];
                            
                            echo '<tr>                     
                                  <td>'.$valores2["descripcionf"].'</td> 
                                  <td>'.$valores2["detalle"].'</td> 
                                  <td>'.$valores2["descripcions"].'</td>
                                  </tr>';                                 

                             }
                             echo '</table>';             

                    
?> 


<?php $fechaget1=(isset($_GET['fechaget'])    ? $_GET['fechaget']    : ''); ?> 
        <br><br><br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        <aside><label>Fecha</label>
		<input  name="fecha" list="fecha1" id="fecha"  onchange="myFunction2()" onfocus="this.value=''" class="col-12" type="date"  title="busqueda por Externo"  placeholder="Busqueda por Usuarios" value='<?php $fechaget1 ?>'>

       <datalist  id="consecutivo1" class="col-12"> 
                   <b></b> 
			 <?php
                 $busqueda3= "SELECT * FROM ingresocasos where externoI";
                 $result3 = mysqli_query($conexion,$busqueda3);   
                 $numero=1;             
                     while ($valores3 = mysqli_fetch_array($result3)) {
                            $numero=$numero+1; 
                            if ($Externoget1==$valores3['externoI']) {  
                            
                            echo '<option value="'.$valores3['fecha'].'">
                                  <table class="default">  
                                     <tr>
                                     <td> </td>
                                     <td>'.$valores3["fecha"].'/</td>                                                                       
                                     </tr>                                    
                                     </table>
                                     </option>';
                                     }
                             }
             ?> </datalist> </aside>




	<aside>

	<?php
// $Externoget=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
// $busqueda1= "SELECT * FROM ingresocasos where externoI='$Externoget'";

// $Consecutivoget=(isset($_GET['Consecutivoget'])    ? $_GET['Consecutivoget']    : '');
// $busqueda1= "SELECT * FROM ingresocasos where ConsecutivoI='$Consecutivoget'";

$fechaget=(isset($_GET['fechaget'])    ? $_GET['fechaget']    : '');
$busqueda1= "SELECT externoI,consecutivoI,registrocasos.fecha,estadoI,registrocasos.hora AS hora1,componente,ingresocasos.fecha as fecha1 FROM registrocasos INNER JOIN ingresocasos ON registrocasos.consecutivo=ingresocasos.consecutivoI WHERE ingresocasos.fecha='$fechaget'";
// $busqueda1= "SELECT * FROM ingresocasos where fecha='$fechaget'";

    $result1 = mysqli_query($conexion,$busqueda1); 
	echo"<table><tr>
            <th>fecha apertura</th> 
	        <th>fecha cierre</th>  
            <th>Consecutivo</th>
            <th>Externo</th>
            <th>Estado</th>
            <th>Componente</th>
            </tr>"; 
   
            
         while ($valores1 = mysqli_fetch_array($result1)) {
                $Externoget=$valores1["externoI"];
                $Consecutivoget=$valores1["consecutivoI"];
                $fechaget=$valores1["fecha"];
                echo '<tr>
                     <td>'.$valores1["fecha"].'</td>
                     <td>'.$valores1["fecha1"].'</td>';
                      if ($valores1["estadoI"]=='Cerrado') {
                         echo '<td><a href="busquedaimg.php?Consecutivoget='.$Consecutivoget.'&Externoget='.$Externoget.'&fechaget='.$fechaget.'">'.$valores1["consecutivoI"].'</a></td>';
                      }else{
                        echo '<td><a href="../Auce/Auce_1.php?Externobus='.$Externoget.'">'.$valores1["consecutivoI"].'</a></td>';
                        
                      }
                      

                      echo'<td><a href="../Auce/externo.php?exter='.$Externoget.'&conse='.$Consecutivoget.'">'.$valores1["externoI"].'</a></td>
                      <td>'.$valores1["estadoI"].'</td>
                      <td>'.$valores1["componente"].'</td>
                      
                      </tr>';                                 

                 }
                 echo '</table><br><br><br><br>Busqueda por externo-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------';


  $Externoget=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
$busqueda3="SELECT * FROM ingresocasos where externoI='$Externoget'";


    $result3 = mysqli_query($conexion,$busqueda3); 
    echo"<table> <tr> 
            <th>Consecutivo</th>
            <th>Externo</th>
            <th>Estado</th>
            <th>Componente</th>
            </tr>"; 
   
            
         while ($valores5 = mysqli_fetch_array($result3)) {
            $Externoget=$valores5["externoI"];
                $Consecutivoget=$valores5["consecutivoI"];
                
                echo '<tr>
                      <td><a href="busquedaimg.php?Consecutivoget='.$Consecutivoget.'&Externoget='.$Externoget.'">'.$valores5["consecutivoI"].'</a></td>
                      <td><a href="../Auce/externo.php?exter='.$Externoget.'&conse='.$Consecutivoget.'">'.$valores5["externoI"].'</a></td>  
                      <td>'.$valores5["estadoI"].'</td>
                      <td>'.$valores5["componente"].'/</td>                      
                      </tr>';                                 

                 }
                 echo '</table>';

            //      $result3 = mysqli_query($conexion,$busqueda3); 

            // echo"<table> <tr>             
            //             <th>Falla descripcion</th>
            //             <th>detalle</th>
            //             <th>Solución descripcion</th> </tr>";
            //  while ($valores6 = mysqli_fetch_array($result3)) {
            //             $Externoget=$valores6["externoI"];
            //                 $Consecutivoget=$valores6["consecutivoI"];
                            
            //                 echo '<tr>                     
            //                       <td>'.$valores6["descripcionf"].'</td> 
            //                       <td>'.$valores6["detalle"].'</td> 
            //                       <td>'.$valores6["descripcions"].'</td>
            //                       </tr>';                                 

            //                  }
            //                  echo '</table>'; ?> 
               
</aside>


</body>
</html>