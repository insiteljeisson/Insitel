<?php
include("../../../conexion/conexion.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
 $_SESSION['Externoget']=$id;

if ($externosession1=$id) {
    // echo 'externo <br>';
    // echo $externosession1."<br>".$id;
     $externosession1=$_SESSION['Externoget']; 
}else{
	// echo 'Bienvenido suscriptor a la mejor web de programación';
	unset($_SESSION['Externoget']);
	// echo $externosession1;$id;
}

   

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../../css/InsitelCss/AuceCss/Auce.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../../../js/insitel/Auce/Auceimg/Auceimg.js"></script>
	<script src="../../../js/insitel/Auce/Auceimg/Auceimg1.js"></script>
	<script src="../../../js/insitel/Auce/Auceimg/vehiculo.js"></script>
	<script src="../../../js/insitel/Auce/Auceimg/pmt.js"></script>
	<title>Ingreso Casos</title>
</head>
 <?php
       $Externobus=(isset($_GET['Externobus'])    ? $_GET['Externobus']    : '');
       $iniciopmt=(isset($_GET['iniciopmt'])    ? $_GET['iniciopmt']    : '');

         if ($Externobus!=""){ ?>
         	<body onmousemove="myFunction()">
         	<?php }else{ ?> 
            <body>
            <?php }?> 		
	<a href="../Busquedaavanzada/busquedaavanzada.php"><input type="submit" name="" type="button" value="Administrador" class='input1'></a>
	<header><a href="../../../index.html"><img class="imgprin" src="../../../img/insitel.jpg"><img class="img" src="../../../img/etb.jpg"></header></a>

	<nav><h1><b>Ingreso de Datos</b></h1></nav>

	<aside>
		<form action='Auce_1sql.php' method="post" enctype="multipart/form-data">
		<section style="background-color: silver;">
			

		<div class="div1">

       <?php

       $Externobus=(isset($_GET['Externobus'])    ? $_GET['Externobus']    : '');
         if ($Externobus!=""){ ?> 
         <label>Externo</label>
		<input  name="externo" list="externo1" id="externo"  onclick="myFunction()"  onfocus="this.value='<?php echo $Externobus ?>'" class="btn-toolbar col-12" type="search"  title="busqueda por Externo"  placeholder="Busqueda por Usuarios"  style="width: 100%;float: center;word-break: break-all;" value='<?php echo "$Externobus"; ?>'>

       <datalist  id="externo1" class="col-12"> 
                   <b></b> 
			 <?php
                 $busqueda= "SELECT * FROM datosauce where externo";
                 $result = mysqli_query($conexion,$busqueda);   
                 $numero=1;             
                     while ($valores = mysqli_fetch_array($result)) {
                            $numero=$numero+1; 
                            echo '<option value="'.$valores['externo'].'"
                                ><table class="default">  
                                     <tr>
                                     <td> </td>
                                     <td>'.$valores["externo"].'/</td>
                                     <td>'.$valores["interno"].'/</td>
                                     <td>'.$valores["direccion"].'/</td>
                                     <td>'.$valores["barrio"].'/</td>                                     
                                     </tr>                                    
                                     </table></option>';
                             }
                             
             ?>            
        </datalist>
        <?php }else{ ?> 

		<?php $hoy=date('Y-m-d');
         $fechaincorrecta=(isset($_GET['fechaincorrecta'])    ? $_GET['fechaincorrecta']    : '');
         if ($fechaincorrecta>$hoy or $fechaincorrecta<>""){ ?>

		<label>Fecha</label><b style='color:red;'>*la fecha esta vacia ó se encuentra en un futuro</b><input type='date' name='fecha' class='inputfecha' value='<?php echo $fechaincorrecta;?>'>
		
		<?php }else{ ?> 


		<label>Fecha</label> <input type='date' name='fecha' class='inputfecha' value='<?php 
         date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,'es_ES'); echo date('Y-m-d');?>'>
		
         
         <?php }?> 
         

         <?php ;         
         $Externoincorrecto=(isset($_GET['Externoincorrecto'])    ? $_GET['Externoincorrecto']    : '');         
         if ($Externoincorrecto==""){ ?>

         <label>Externo</label>
		<input  name="externo" list="externo1" id="externo"  onchange="myFunction()" onfocus="this.value=''" class="btn-toolbar col-12" type="search"  title="busqueda por Externo"  placeholder="Busqueda por Usuarios"  style="width: 100%;float: center;word-break: break-all;" value='<?php echo "$externosession1"; ?>'>

       <datalist  id="externo1" class="col-12"> 
                   <b></b> 
			 <?php
                 $busqueda= "SELECT * FROM datosauce where externo";
                 $result = mysqli_query($conexion,$busqueda);   
                 $numero=1;             
                     while ($valores = mysqli_fetch_array($result)) {
                            $numero=$numero+1; 
                            echo '<option value="'.$valores['externo'].'"
                                ><table class="default">  
                                     <tr>
                                     <td> </td>
                                     <td>'.$valores["externo"].'/</td>
                                     <td>'.$valores["interno"].'/</td>
                                     <td>'.$valores["direccion"].'/</td>
                                     <td>'.$valores["barrio"].'/</td>                                     
                                     </tr>                                    
                                     </table></option>';
                             }
             ?>            
        </datalist>
      <?php }else{?>
      	<label>Externo</label><b style='color:red;'>*El Externo no esta en base de datos</b>
      	<input  name="externo" list="externo1" id="externo"  onchange="myFunction()" onfocus="this.value=''" class="btn-toolbar col-12" type="search"  title="busqueda por Externo"  placeholder="Busqueda por Usuarios"  style="width: 100%;float: center;word-break: break-all;" value='<?php echo "$Externoincorrecto"; ?>'>

       <datalist  id="externo1" class="col-12"> 
                   <b></b> 
			 <?php
                 $busqueda= "SELECT * FROM datosauce where externo";
                 $result = mysqli_query($conexion,$busqueda);   
                 $numero=1;             
                     while ($valores = mysqli_fetch_array($result)) {
                            $numero=$numero+1; 
                            echo '<option value="'.$valores['externo'].'"
                                ><table class="default">  
                                     <tr>
                                     <td></td>
                                     <td>'.$valores["externo"].'/</td>
                                     <td>'.$valores["interno"].'/</td>
                                     <td>'.$valores["direccion"].'/</td>
                                     <td>'.$valores["barrio"].'/</td>                                     
                                     </tr>                                    
                                     </table></option>';
                             }
             ?>            
        </datalist>

<?php }?>
<?php }?> 
              
            <!-- busqueda de externo para poner en casilla externo -->
            <script>
			 function myFunction()
			                       {
			  var x = document.getElementById("externo").value;			  			 						  
					  document.getElementById("externo2").innerHTML = "Externo "+ x;
					  document.getElementById("externo").innerHTML = x;
			  var y = document.getElementById("consecutivo").value;

			  var z = document.getElementById("consecutivo").value;  
			   		  		
               window.location.href = "mostraractual.php?Externoget="+ x +"&consecutivoget="+ y;
							       }	
			</script>
            
            <!-- suma del consecutivo-->
				<label>Datos</label>
				<p id="externo2">
                <div class="div3">
                	<?php 
                     $ultimo ="SELECT * FROM ingresocasos ORDER BY consecutivoI desc";
				        $resulta = mysqli_query($conexion,$ultimo);
				        $filaconsecutivo = mysqli_fetch_row($resulta);
				        if ($filaconsecutivo[0]=="") {            
				            $mostrar=10000; 
				            $consecutivo=$mostrar+1;
				            global $consecutivo;
				            
				        }else{
				            $mostrar=$filaconsecutivo[0]; 
				            $consecutivo=$mostrar+1;
				            global $consecutivo;
				        }


				    $primero ="SELECT * FROM ingresocasos ORDER BY consecutivoI asc";
				    $resulta1 = mysqli_query($conexion,$primero);                    
				    ?>
                      

                    <!-- elegir boton de envio-->  
					<?php 


					 $Consecutivoget=(isset($_GET['Consecutivoget'])    ? $_GET['Consecutivoget']    : '');
					  if (isset($_GET['Componenteget'])=="") {	 
	                 echo '<label>Formulario #</label><input readonly type="" id="consecutivo" name="consecutivo" value="';?><?php echo $consecutivo; echo '">';
	                ?>	

					<?php }else{

				       echo '<label>Formulario #</label><input readonly  type="" id="consecutivo" name="consecutivo" value="';?><?php if ($Consecutivoget==''){}else{ echo $Consecutivoget;} echo '">';}
				      

				    ?>

				   
						

					<?php
					function vacio(){
                     echo "this.value=''"; 
					}

					
					function externoda(){
                     echo $consecutivo; 
					}



					function agregaform(){
					   if (isset($_GET['Componenteget'])=="") {							   	
						echo '<label>Requerimiento</label><select onchange="componentes()"  onfocus="vacio()"id="requerimiento" name="requerimiento" class="select1">
						<option></option><option>corrosion</option><option>falta aislamiento</option><option>picaporte</option><option>adptador 12v</option><option>cinta led</option><option>ventiladores</option><option>chapa</option><option>terminales</option><option>Tornilleria</option><option>puertas</option><option>estructura</option></select>
					    <label>Descripcion Requerimiento detallada de la falla</label><input type="" name="descripcionR" class="select1">';}
						else{
				        echo '' ;}
						}
						?> 

						<?php  agregaform();?>	  

			             

			            





						<!-- <?php			  
			               
			               // include("mostrarultimo.php"); 


			             ?>  -->
                    
						
			            </p>

				            <p id="externo3">

				        <?php function agregaoption(){
				         $iniciopmt=(isset($_GET['iniciopmt'])    ? $_GET['iniciopmt']    : '');						 
						if ($iniciopmt=="") {
				        echo '<label>Estado</label><select id="estado" name="estado"><option>Creado</option></select>';
				        }else{	
						   if (isset($_GET['Componenteget'])=="") {
							echo '<label>Estado</label><select id="estado" name="estado"><option>Creado</option></select>';}
							else{
					        echo '<label>Estado</label><select id="estado" name="estado"><option style="display:none">En Proceso</option><option>Cerrado</option></select>';
					          }
							}
                           }
							?> 
                   </a>
                     
                     <?php 
                     function crearbotones(){
					 $iniciopmt=(isset($_GET['iniciopmt'])    ? $_GET['iniciopmt']    : '');

					 if (isset($_GET['Componenteget'])=="") {
						   	$id5=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
							echo '<input class="input1" type="submit" value="Enviar requerimiento" onclick=this.form.action="Auce_1registrosql.php?Externoget='.$id5.'"></input>' ;

						}else{
							if ($iniciopmt=="") {							
							echo '<input class="input1" type="submit" value="Enviar Pmt y parqueo" onclick=this.form.action="Auce_3registrosql.php?iniciopmt=iniciopmt"></input>';
						    }else{
					        echo '<input class="input1" type="submit" value="cerrar Casos"></input>' ;
					         }
							}
						   }

                      ?>


							    	


				        


				        	      <?php  agregaoption();?>
				        	     <!--  <option>Creado</option>
				                  <option>En proceso</option>
				                  <option>Cerrado</option> -->

				       <br><br>
						
						<?php crearbotones(); ?>
						

                
			
			</div>
			<!-- <div class="div2">
				optra columna
			<label>Grupo</label> <input type="" name="grupo">
			
			</div> -->

		</section>
      <?php function agregabloqueocomp(){
	   if (isset($_GET['Componenteget'])=="") {
		echo '<select onclick="componentes();" id="componente" name="componente" class="select1">' ;}
		else{
        echo '<select onclick="componentes();" id="componente" name="componente" class="select1" disabled>' ;}
		}
        
	   function agregabloqueodes(){
	   $iddetalleget=(isset($_GET['detalladaget'])    ? $_GET['detalladaget']    : '');
	   if (isset($_GET['Componenteget'])=="") {
	   	
		echo'<input  type="" name="descripcionf" class="select1" value="'.$iddetalleget.'">';}
		else{
       echo'<input readonly  type="" name="descripcionf" class="select1" value="'.$iddetalleget.'">';
		}
	}

?>	


<?php 
if ($externosession1==""){
echo'<section class="barra">';include("busqueda.php");echo'</section>'.'<section>'.'<img class="img1" src="../../../img/insitel.jpg">'.'"</section>';
}else{	
$busqueda5="SELECT enlacemapa  FROM datosauce WHERE externo=$externosession1";
  $result3=mysqli_query($conexion,$busqueda5);
   $fila5 = mysqli_fetch_row($result3);

if (isset($_GET['Componenteget'])==""){
	echo'<section><h1>Sitio en Maps '.$externosession1.'</h1>'.$fila5[0].'</section><section class="barra">';include("busqueda.php");'"</section>';
      }
      else{
      	// echo'<script> alert("'.$externosession1.$Consecutivoget.'");</script>';
      	$iniciopmtbus="SELECT * FROM registroiniciopmt WHERE consecutivo='$Consecutivoget' and externo='$externosession1' and componente='pmt'";
      	
      	 $resultados=$conexion->query($iniciopmtbus);
      	 $rowcount=mysqli_num_rows($resultados);
			if ($resultados->num_rows > 0) {
             echo "1";}else{echo "0";}
						  

      	 $iniciopmt=(isset($_GET['iniciopmt'])    ? $_GET['iniciopmt']    : '');						 
			if ($iniciopmt=="" and $resultados->num_rows==0) {
				include("auce_2pmt.php");
      		
      	        }else{
      	        	// echo'<script> alert("'.$iniciopmt.'");</script>';
      	        	include("Auce_2.php");
      	        	 }
}
}

 ?>
 
		
</form>		
	</aside>

</body>
</html>