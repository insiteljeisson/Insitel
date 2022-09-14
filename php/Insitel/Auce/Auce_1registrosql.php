    <?php 
 include("../../../conexion/conexion.php");      
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
  $fechaimg=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");  
  $hoy=date('Y-m-d'); 
  $hora=strftime("%H :%M :%S");
  $fecha=(isset($_POST['fecha'])    ? $_POST['fecha']    : '');
  $externo=(isset($_POST['externo'])    ? $_POST['externo']    : '');
  $estado=(isset($_POST['estado'])    ? $_POST['estado']    : '');
  $requerimiento=(isset($_POST['requerimiento'])    ? $_POST['requerimiento']    : '');	
  $descripcionR= (isset($_POST['descripcionR'])    ? $_POST['descripcionR']    : '');

     
	 $consecutivo=10000;     
     $direccion=(isset($_POST['direccion'])    ? $_POST['direccion']    : '');     

      $ultimo ="SELECT * FROM registrocasos ORDER BY consecutivo desc";
        $resulta = mysqli_query($conexion,$ultimo);
        $fila = mysqli_fetch_row($resulta);
        if ($fila[0]=="") {            
            $mostrar=10000; 
            $consecutivo=$mostrar+1;
            
        }else{
            $mostrar=$fila[0]; 
            $consecutivo=$mostrar+1;
        }


    $primero ="SELECT * FROM registrocasos ORDER BY consecutivo asc";
    $resulta1 = mysqli_query($conexion,$primero);
    
//-------------------------------------------------------------------------------------**//

$encontrarext="SELECT * FROM datosauce WHERE externo='$externo'";
$resultado=$conexion->query($encontrarext);
if ($resultado->num_rows > 0) {

  echo "<br>hay datos<br> ";
ECHO $resultado->num_rows."<br>";
 
  // code...
}else{
  ECHO $resultado->num_rows;
echo "<script>alert('Auce no existe en la base de datos');window.history.back(-1);</script>";
die;
}

$encontrarext1="SELECT * FROM ingresocasos WHERE externoI='$externo' and estadoI='En Proceso'";
$resultados=$conexion->query($encontrarext1);
if ($resultados->num_rows > 0) {
  echo "<br>hay datos<br> ";    
  ECHO $resultados->num_rows."<pre>";
  echo $externo."<pre>";
  echo $estado."<pre>";
  echo "<script>alert('caso $externo en proceso existe en base de datos pendiente por concluir y cerrar');window.history.back(-1);</script>";
  // code...
  // die;
  die;
  
}else{
   echo "<br>no hay datos<br> ";   
  ECHO $resultados->num_rows."<pre>";
  echo $externo."/<pre>/";
  echo $estado."/<pre>";
  echo "<script>alert('caso $externo en proceso, no esta en base de datos ');</script>";
  
  

}  



// die;
     // fecha
      $hoy=date('Y-m-d');      
      if($fecha>$hoy) 
      {
        echo "<script>alert('la fecha es incorrecta $fecha esta en el futuro');window.history.back(-1);</script>";die;
      }else{echo "fecha";
             echo "<script>alert('la fecha es correcta $fecha esta en el actual o pasado');</script>";
             if ($estado=="" or $estado=="En Proceso") {
                  echo "<script>alert('el campo estado esta vacio');window.history.back(-1);</script>";
           }else{echo "<br>estado blanco";
                 if ($consecutivo=="" or $externo=="" or $estado=="" or $requerimiento=="" or $descripcionR==""  or $fecha==""){
                     echo "<script>alert('campo vacio revise los datos ingresados');window.history.back(-1);</script>";
                     }else{echo "<br>vacios";
                       $insertar1="INSERT INTO registrocasos(consecutivo,externo1,estado,requerimiento,descripcionR,fecha,hora) VALUES ('$consecutivo','$externo','$estado','$requerimiento','$descripcionR','$fecha','$hora')";
                       $insertar2="INSERT INTO ingresocasos(consecutivoI,externoI,estadoI,componente,descripcionf,detalle,descripcions,fecha,hora) VALUES ('$consecutivo','$externo','En proceso','$requerimiento','$descripcionR','','','','')";
                                          
                          if (mysqli_query($conexion,$insertar1)) 
                             { 
                           if (mysqli_query($conexion,$insertar2))
                             {     
                                                 
                             echo "<script>alert('ingresa a base de datos');</script>";
                             echo "ingresa a base de datos"; 
                              
                                 // header("Location: Auce_1.php?externo=$externo");
                             // echo "<script>window.location'Auce_1.php?Externoget=".''. "'</script>";
                             echo "<script> window.location.href = 'Auce_1.php?Externoget=".''."';</script>";
                             }else{
                                 echo "<script>alert('error en base de datos');</script>";
                             }}

           }
         }
       }
        
          

// CREATE TABLE registrocasos (
//         consecutivo VARCHAR(20) NOT NULL,         
//         externo VARCHAR(6) NOT NULL,        
//         estado VARCHAR(40) NOT NULL,
//         requerimiento VARCHAR(40) NOT NULL,
//         descripcionR VARCHAR(200) NOT NULL,
//           fecha date NOT NULL,
//           hora time NOT NULL,  
//         primary key(consecutivo),
//         UNIQUE KEY(consecutivo));
   

  
 ?>