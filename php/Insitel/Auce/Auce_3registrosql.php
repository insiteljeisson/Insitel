<?php 

 include("../../../conexion/conexion.php");
 $iniciopmt=(isset($_GET['iniciopmt'])    ? $_GET['iniciopmt']    : '');
 
 $consecutivo= (isset($_POST['consecutivo'])    ? $_POST['consecutivo']    : '');
 $externo= (isset($_POST['externo'])    ? $_POST['externo']    : '');
 $Vehiculo=(isset($_POST['Vehiculo'])    ? $_POST['Vehiculo']    : '');
 $estado=(isset($_POST['estado'])    ? $_POST['estado']    : ''); 
 $Placa=(isset($_POST['Placa'])    ? $_POST['Placa']    : '');
 $PMT=(isset($_POST['PMT'])    ? $_POST['PMT']    : '');
 $DPMT=(isset($_POST['DPMT'])    ? $_POST['DPMT']    : '');

  $fecha=(isset($_POST['fecha'])    ? $_POST['fecha']    : '');
     $hoy=date('Y-m-d'); 
     $hora=strftime("%H :%M :%S");

  // $consecutivo=10000;     
  //    $direccion=(isset($_POST['direccion'])    ? $_POST['direccion']    : '');     

  //     $ultimo ="SELECT * FROM registrocasos ORDER BY consecutivo desc";
  //       $resulta = mysqli_query($conexion,$ultimo);
  //       $fila = mysqli_fetch_row($resulta);
  //       if ($fila[0]=="") {            
  //           $mostrar=10000; 
  //           $consecutivo=$mostrar+1;
            
  //       }else{
  //           $mostrar=$fila[0]; 
  //           $consecutivo=$mostrar+1;
  //       }


    // $primero ="SELECT * FROM registrocasos ORDER BY consecutivo asc";
    // $resulta1 = mysqli_query($conexion,$primero);


    $ultimo1 ="SELECT * FROM registroiniciopmt ORDER BY idimagen desc";
        $resulta1 = mysqli_query($conexion,$ultimo1);
        $fila1 = mysqli_fetch_row($resulta1);              
        if ($fila1[0]=="" or $fila1[0]=="null"){           
            $mostrar1=50000; 
            $Idimagen=$mostrar1+1;
            $Idimagen1=$mostrar1+2;
            echo $Idimagen;$Idimagen1 ."g";
            
        }else{
            $mostrar1=$fila1[0]; 
            $Idimagen=$mostrar1+1;
            $Idimagen1=$mostrar1+2;
            echo $Idimagen;$Idimagen1."h";
        
    }


    $primero1 ="SELECT * FROM registroiniciopmt ORDER BY idimagen asc";
    $resulta1 = mysqli_query($conexion,$primero1);

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

// $encontrarext1="SELECT * FROM ingresocasos WHERE externoI='$externo' and estadoI='En Proceso'";
// $resultados=$conexion->query($encontrarext1);
// if ($resultados->num_rows > 0) {
//   echo "<br>hay datos<br> ";    
//   ECHO $resultados->num_rows."<pre>";
//   echo $externo."<pre>";
//   echo $estado."<pre>";
//   echo "<script>alert('caso $externo en proceso existe en base de datos pendiente por concluir y cerrar');window.history.back(-1);</script>";
//   // code...
//   // die;
//   die;
  
// }else{
//    echo "<br>no hay datos<br> ";   
//   ECHO $resultados->num_rows."<pre>";
//   echo $externo."/<pre>/";
//   echo $estado."/<pre>";
//   echo "<script>alert('caso $externo en proceso, no esta en base de datos ');</script>";


  $archivovehiculo = $_FILES['seleccionArchivosvehiculo']['name'];     
            if (isset($archivovehiculo) && $archivovehiculo != "") {    
                  $name=$_FILES['seleccionArchivosvehiculo']['name'];
                  $tmp=$_FILES['seleccionArchivosvehiculo']['tmp_name'];
                  $size=$_FILES['seleccionArchivosvehiculo']['size'];}
             

                    
                 
 $archivopmt = $_FILES['seleccionArchivospmt']['name'];     
            if (isset($archivopmt) && $archivopmt != "") {    
                  $name1=$_FILES['seleccionArchivospmt']['name'];
                  $tmp1=$_FILES['seleccionArchivospmt']['tmp_name'];
                  $size1=$_FILES['seleccionArchivospmt']['size'];}


    mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_1Vehiculo/".$Idimagen,0777,true);
      $ruta="../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_1Vehiculo/".$Idimagen."/".$name;


            mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_2PMT_inicio/".$Idimagen1,0777,true);          
            $ruta1="../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_2PMT_inicio/".$Idimagen1."/".$name1; 
                          

   // foreach ($_FILES['seleccionArchivos1']['tmp_name'] as $key => $tmp_name) {
   //        // code... 
   
              if(!file_exists($ruta)){ 
                                                
                    move_uploaded_file($tmp ,$ruta);
                      // echo "<script>alert('archivo 1 agregado correctamente');</script>";
                        // $archivo ="";

                        }else{          
                        
                        echo "<script>alert('ya existe el archivo seleccionado intente con otro');window.history.back(-1);</script>";
                          // $archivo ="";
                          die;
                            }
                          

             
      
              if(!file_exists($ruta1)){ 
                                                
                    move_uploaded_file($tmp1 ,$ruta1);
                      // echo "<script>alert('archivo 2 agregado correctamente');window.history.back(-1);</script>";
                        // $archivo1 ="";
                        
                        }else{          
                        
                         echo "<script>alert('ya existe el archivo seleccionado intente con otro');window.history.back(-1);</script>";
                          // $archivo1 ="";
                          die;
                            }               



  
  $hoy=date('Y-m-d');      
      if($fecha>$hoy) 
      {
        echo "<script>alert('la fecha es incorrecta $fecha esta en el futuro');window.history.back(-1);</script>";die;
      }else{echo "fecha";
             echo "<script>alert('la fecha es correcta $fecha esta en el actual o pasado');</script>";
             if ($estado=="" or $estado=="En Proceso") {
                  echo "<script>alert('el campo estado esta vacio');window.history.back(-1);</script>";
           }else{echo "<br>estado blanco";
                 if ($Vehiculo=="" or $Placa=="" or $PMT=="" or $DPMT=="" or $archivovehiculo==""  or $archivopmt==""){
                     echo "<script>alert('campo vacio revise los datos ingresados');window.history.back(-1);</script>";
                     }else{echo "<br>vacios";
                       $insertar1="INSERT INTO registroiniciopmt(idimagen,consecutivo,externo,componente,detalle,name,tmp,size,ruta,fecha,hora)VALUES('$Idimagen','$consecutivo','$externo','$Vehiculo','$Placa','$name','$tmp','$size','$ruta','$fecha','$hora')";
                       $insertar2="INSERT INTO registroiniciopmt(idimagen,consecutivo,externo,componente,detalle,name,tmp,size,ruta,fecha,hora)VALUES('$Idimagen1','$consecutivo','$externo','$PMT','$DPMT','$name1','$tmp1','$size1','$ruta1','$fecha','$hora')";
                                          
                          if (mysqli_query($conexion,$insertar1)) 
                             {
                               if (mysqli_query($conexion,$insertar2)) 
                             {
                              echo "<script>alert('ingresa a base de datos');</script>";
                              echo "ingresa a base de datos"; 
                              echo "<script> window.location.href = 'mostraractual.php?iniciopmt=$iniciopmt&Externoget=".$externo."';</script>";

                              }else{echo "<script>alert('error en base de datos1');</script>";}                                                   
                            
                             }

                             
                         }

           }
         }
       
        





      // CREATE TABLE registroInicioPmt (
      //   idimagen VARCHAR(20) NOT NULL,
      //   consecutivo VARCHAR(20) NOT NULL,         
      //   externo VARCHAR(6) NOT NULL, 
      //   componente VARCHAR(40) NOT NULL,
      //   detalle VARCHAR(200) NOT NULL,        
      //   name VARCHAR(300) NOT NULL,
      //   tmp  VARCHAR(20) NOT NULL,
      //   size VARCHAR(20) NOT NULL,
      //   ruta VARCHAR(2000) NOT NULL,
      //   fecha date NOT NULL,
      //   hora time NOT NULL,  
      //   primary key(idimagen),
      //   UNIQUE KEY(idimagen));  
// ?>