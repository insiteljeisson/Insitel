<?php
 include("../../../conexion/conexion.php");   

 $id=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
 $_SESSION['Externoget']=$id ;
 $id1session= $_SESSION['Externoget']; ;

 $id1=(isset($_GET['consecutivoget'])    ? $_GET['consecutivoget']    : '');
 $_SESSION['consecutivoget']=$id1 ;
 $id2session= $_SESSION['consecutivoget'];

 $encontrarext1="SELECT * FROM datosauce WHERE externo='$id1session'";
// $encontrarext="SELECT * FROM registrocasos WHERE externo='$id' and estado='Creado' and consecutivo='$id1' " ;
$resultado1=$conexion->query($encontrarext1); 
$fila1 = mysqli_fetch_row($resultado1);

 


echo $id."<pre>";
echo "<pre>--------------------------------------------------";

$encontrarext="SELECT * FROM registrocasos INNER JOIN ingresocasos ON registrocasos.consecutivo=ingresocasos.consecutivoI WHERE externoI='$id1session' and estado='Creado' and estadoI='En Proceso'";
// $encontrarext="SELECT * FROM registrocasos WHERE externo='$id' and estado='Creado' and consecutivo='$id1' " ;
$resultado=$conexion->query($encontrarext); 
$fila = mysqli_fetch_row($resultado);




if ($resultado->num_rows > 0) {
  ECHO $resultado->num_rows."<pre>";
  echo $id."<pre>";
  $mostrar00=$fila[0];  
  echo $mostrar0=$fila[1];
  $mostrar=$fila[3];
  $mostrar1=$fila[4]; 
 
 
 
  echo "<script>alert('caso $mostrar00 del ext $mostrar0 en proceso existe en base de datos');location.href = 'Auce_1.php?Componenteget=$mostrar&detalladaget=$mostrar1&Externoget=$mostrar0&Consecutivoget=$mostrar00';</script>";


  // header("Location: Auce_1.php?Componenteget=$mostrar&detalladaget=$mostrar1&externoget=$mostrar0");
  // code...
  
}else{ 
  $fila = mysqli_fetch_row($resultado);
  // $mostrar0=$fila[1];
  // echo $mostrar0+"2";     
  ECHO $resultado->num_rows."<pre>";
  echo $externo."<pre>";

  if ($resultado1->num_rows > 0) {
     echo $id1session; 
  ECHO $resultado1->num_rows;
  echo $id1session;
  echo "<script>window.location.href = 'Auce_1.php?Externoget=".$id."';</script>";die;
 
}else{
 echo $id1session; 
  ECHO $resultado1->num_rows;
  
 echo "<script>window.location.href = 'Auce_1.php?Externoincorrecto=".$id."';</script>";die;
}
  


}  

            
             

 

        
    //          echo "<pre>Auce existe en la base de datos";

    //     if ($externo<>$row1['externo']) {
    //      echo "<script>alert('Auce existe en la base de datos')</script>"; 
    //       echo "<pre>Auce existe en la base de datos";             
    //         break;
    //     }else{
    //         echo "<script>alert('Auce no existe en la base de datos')</script>";
    //          echo "<pre>Auce existe en la base de datos";
    //           break;
    //     }
    // }
 

?>