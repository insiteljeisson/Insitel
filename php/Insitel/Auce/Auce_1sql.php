<?php 
     include("../../../conexion/conexion.php");    
     date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");  
	 $consecutivo=10000;
     $fecha=(isset($_POST['fecha'])    ? $_POST['fecha']    : '');
     $hoy=date('Y-m-d'); 
     $hora=strftime("%H :%M :%S");

	 $externo=(isset($_POST['externo'])    ? $_POST['externo']    : '');
     $_SESSION['SES_externo'] = $externo;
     $varsesext=$_SESSION['SES_externo'];

     $direccion=(isset($_POST['direccion'])    ? $_POST['direccion']    : '');
     $estado=(isset($_POST['estado'])    ? $_POST['estado']    : '');
	
	 $componente=(isset($_POST['componente'])    ? $_POST['componente']    : '');	
     $descripcionf= (isset($_POST['descripcionf'])    ? $_POST['descripcionf']    : '');
    		   	 
     $detalle= (isset($_POST['detalle'])    ? $_POST['detalle']    : '');
     $descripcions= (isset($_POST['descripcions'])    ? $_POST['descripcions']    : '');
     $consecutivoR= (isset($_POST['consecutivo'])    ? $_POST['consecutivo']    : '');
    
    
     $ultimo ="SELECT * FROM ingresocasos ORDER BY consecutivoI desc";
        $resulta = mysqli_query($conexion,$ultimo);
        $fila = mysqli_fetch_row($resulta);
        if ($fila[0]=="") {            
            $mostrar=10000; 
            $consecutivo=$mostrar+1;
            
        }else{
            $mostrar=$fila[0]; 
            $consecutivo=$mostrar+1;
        }


    $primero ="SELECT * FROM ingresocasos ORDER BY consecutivoI asc";
    $resulta1 = mysqli_query($conexion,$primero);
    
//-------------------------------------------------------------------------------------**//
    $ultimo1 ="SELECT * FROM insertimg ORDER BY Idimagen desc";
        $resulta1 = mysqli_query($conexion,$ultimo1);
        $fila1 = mysqli_fetch_row($resulta1);
        if ($fila1[0]=="") {           
            $mostrar1=90000; 
            $Idimagen=$mostrar1+1;
            $Idimagen1=$mostrar1+2;
            
        }else{
            $mostrar1=$fila1[0]; 
            $Idimagen=$mostrar1+1;
            $Idimagen1=$mostrar1+2;
        }


    $primero1 ="SELECT * FROM insertimg ORDER BY Idimagen asc";
    $resulta1 = mysqli_query($conexion,$primero1);
    
//-------------------------------------------------------------------------------------**//

   
//delete from usuarios;


       // CREATE TABLE ingresocasos (
       //  consecutivo VARCHAR(20) NOT NULL,          
       //  externo VARCHAR(6) NOT NULL,
       //  estado VARCHAR(40) NOT NULL,         
       //  componente VARCHAR(40) NOT NULL,
       //  descripcionf VARCHAR(200) NOT NULL,
       //  detalle VARCHAR(40) NOT NULL,
       //  descripcions VARCHAR(200) NOT NULL,
       //  fecha date NOT NULL,
       //  hora time NOT NULL,
       //  primary key(consecutivo),
       //  UNIQUE KEY(consecutivo));


    // CREATE TABLE datosauce (
    //     interno VARCHAR(20) NOT NULL,        
    //     externo VARCHAR(6) NOT NULL, 
    //     direccion VARCHAR(40) NOT NULL,
    //     barrio VARCHAR(40) NOT NULL,
    //     enlacemapa VARCHAR(1000) NOT NULL,
    //     coordenadas VARCHAR(200) NOT NULL,
    //     observacion VARCHAR(40) NOT NULL,        
    //     primary key(externo),
    //     UNIQUE KEY(externo));


        // CREATE TABLE insertimg (
        //     Idimagen VARCHAR(10) NOT NULL, 
        //     consecutivo VARCHAR(20) NOT NULL,        
        //     externo VARCHAR(6) NOT NULL, 
        //     name VARCHAR(40) NOT NULL,
        //     tmp VARCHAR(40) NOT NULL,
        //     size VARCHAR(1000) NOT NULL,
        //     ruta VARCHAR(2000) NOT NULL,
        //     creado VARCHAR(40) NOT NULL,        
        //     primary key(Id),
        //     UNIQUE KEY(externo));                      

    // INSERT INTO datosAuce(interno,externo,direccion,barrio,enlacemapa,coordenadas,observacion) VALUES ('223160','2280','trsv 36 # 14-21','nueva deli','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8351774444495!2d-74.1403846852957!3d4.62347834360983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c25bf59daf3de6f!2zNMKwMzcnMjQuNSJOIDc0wrAwOCcxNy41Ilc!5e0!3m2!1ses!2sco!4v1661027176142!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>','4.623718956847319, -74.13813162983024','auce de prueba')";


    // INSERT INTO datosauce(interno,externo,direccion,barrio,enlacemapa,coordenadas,observacion) VALUES ('223165','2285','trsv 37 # 14-99','nueva deli','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8351774444496!2d-74.1403846852957!3d4.62347834360920!2m3!1f0!2f0!3f0!3m2!1i1080!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c25bf59daf3de6f!2zNMKwMzcnMjQuNSJOIDc0wrAwOCcxNy41Ilc!5e0!3m2!1ses!2sco!4v1661027176142!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>','4.623718956847320, -74.13813162983080','auce de prueba1')

 // $insertar1="INSERT INTO ingresocasos(consecutivo,fecha,externo,componente,descripcionf,detalle,descripcions) VALUES ('$consecutivo','$fecha','$externo','$componente','$descripcionf','$detalle','$descripcions')";
 $busqueda1="SELECT * FROM ingresocasos WHERE externoI='$externo'";
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

        // if ($estado1="") {
        //   $estado1=0001;
        //     // code...
        // }
          
      
date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
       //$fecha=strftime("Hoy es %A día %d de %B hora: %H :%M :%S"  );
      $fechaimg=strftime("creado día %d mes %m año %Y hora: %H :%M :%S");
      
       
        //echo '<script type="text/javascript">alert("datos enviados a la base ok")</script>'
      // $fecha1=strftime("%Y-%m-%d");
      // $hora=strftime("%H:%M:%S");


     $archivo = $_FILES['seleccionArchivos']['name'];     
            if (isset($archivo) && $archivo != "") {    
                  $name=$_FILES['seleccionArchivos']['name'];
                  $tmp=$_FILES['seleccionArchivos']['tmp_name'];
                  $size=$_FILES['seleccionArchivos']['size'];}
             

                    
                 
 $archivo1 = $_FILES['seleccionArchivos1']['name'];     
            if (isset($archivo1) && $archivo1 != "") {    
                  $name1=$_FILES['seleccionArchivos1']['name'];
                  $tmp1=$_FILES['seleccionArchivos1']['tmp_name'];
                  $size1=$_FILES['seleccionArchivos1']['size'];}
             

          // mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo,0777,true);       
                      


 // $insertar1="INSERT INTO ingresocasos(consecutivo,estado,fecha,externo,componente,descripcionf,detalle,descripcions) VALUES ('$consecutivo','$estado','$fecha','$externo','$componente','$descripcionf','$detalle','$descripcions')";
 // $insertar2="INSERT INTO insertimg(Idimagen,consecutivo,externo,name,tmp,size,ruta,creado)VALUES('$Idimagen','$consecutivo','$externo','$name','$tmp','$size','$ruta','$fechaimg')";
 // $insertar3="INSERT INTO insertimg(Idimagen,consecutivo,externo,name,tmp,size,ruta,creado)VALUES('$Idimagen1','$consecutivo','$externo','$name1','$tmp1','$size1','$ruta1','$fechaimg')";                    




 

$hoy=date('Y-m-d');      
      if($fecha>$hoy) 
      {
        echo "<script>window.location.href = 'Auce_1.php?fechaincorrecta=".$fecha."';</script>";die;
        // echo "<script>alert('la fecha es incorrecta $fecha esta en el futuro');window.location.href = 'Auce_1.php?fechaincorrecta=".$fecha."';</script>";die;
      }else
      {echo "fecha";
             echo "<script>alert('la fecha es correcta $fecha esta en el actual o pasado');</script>";
             if ($estado=="" or $estado=="En Proceso") {
                  echo "<script>alert('el campo estado esta vacio');window.history.back(-1);</script>";
           }else
         {echo "<br>estado blanco";
                 if ($fecha=="" or $externo=="" or $estado==""  or $detalle==""  or $descripcions=="" or $descripcionf==""or $archivo=="" or $archivo1==""){
                    echo "<script>alert('campo vacio revise los datos ingresados');window.history.back(-1);</script>";
                     }else
            {echo "<br>vacios";   
             include("insertarimagen.php") ;                                 
$modificar1="UPDATE ingresocasos SET estadoI='$estado',detalle='$detalle',descripcions='$descripcions',fecha='$fecha',hora='$hora' WHERE externoI='$externo' and estadoI='En Proceso'";

$insertar2="INSERT INTO insertimg(Idimagen,consecutivo,externo,name,tmp,size,ruta,creado)VALUES('$Idimagen','$consecutivoR','$externo','$name','$tmp','$size','$ruta','$fechaimg')";

$insertar3="INSERT INTO insertimg(Idimagen,consecutivo,externo,name,tmp,size,ruta,creado)VALUES('$Idimagen1','$consecutivoR','$externo','$name1','$tmp1','$size1','$ruta1','$fechaimg')"; 
            
                  if (mysqli_query($conexion,$modificar1)) 
                     {
                  if (mysqli_query($conexion,$insertar2))
                     { 
                  if (mysqli_query($conexion,$insertar3))
                     {  
                                        
                         // echo "<script>alert('ingresa a base de datos');</script>";die;    
                         echo "ingresa a base de datos";                   
                         // header("Location: Auce_1.php?externo=$externo");
                         echo "<script type='text/javascript'>window.location'Auce_1.php?Externoget=".$externo."'</script>";
                         // echo'<script> window.location.href = "Auce_1.php?Externoget='.$externo.';</script>';
                     }else{
                         echo "<script>alert('error en base de datos');</script>";die;
                          }}}

           }
         }
       }      
    
$encontrarext="SELECT * FROM datosauce WHERE externo='$externo'";
$resultado=$conexion->query($encontrarext);
if ($resultado->num_rows > 0) {
  ECHO $resultado->num_rows;
  echo "hay datos";
  // code...
}else{
  ECHO $resultado->num_rows;

echo "<script>alert('Auce no existe en la base de datos');window.history.back(-1);</script>";
die;
}


if ($estado=='En Proceso') {
 echo "<script>alert('Cambie el estado $estado a Cerrado y vuelva a intentar');window.history.back(-1);</script>";die;  
}else{
 echo $estado;
$encontrarext="SELECT * FROM ingresocasos WHERE externoI='$externo' and estadoI='En Proceso' and estadoI<>'Cerrado'";
$resultado=$conexion->query($encontrarext);
if ($resultado->num_rows > 0) {
  ECHO $resultado->num_rows."<pre>";
  echo $externo."<br>";
  echo $estado."<br>";  
  echo "<script>alert('caso del ext $externo en proceso existe en base de datos ,gestioné y envié cierre proceso');</script>";
  // code...
 
}else{  
  ECHO $resultado->num_rows."<pre>";
  echo $externo."<br>";
  echo $estado."<br>";
  echo "<script>alert('caso en proceso, no esta en base de datos,error en el envio,intente subir un caso creado primero');</script>";header('Location: Auce_1.php?externo='.$externo.'');
die;
} } 
 
 ?>

 