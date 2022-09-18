<link rel="stylesheet" href="../../../css/BusquedaCss/busquedacss.css"/>
<?php
include("../../../conexion/conexion.php"); 
                                    
    $Externoget=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
    $Consecutivoget=(isset($_GET['Consecutivoget'])    ? $_GET['Consecutivoget']    : '');
    $fechaget=(isset($_GET['fechaget'])    ? $_GET['fechaget']    : '');
    
                 
    error_reporting(0);
    echo "<script type='text/javascript'>window.location.href='busquedaavanzada.php?Externoget=".$Externoget."&Consecutivoget=".$Consecutivoget."&fechaget=".$fechaget."'</script>"; 
    // header("Location:busquedaavanzada.php?Externoget=$Externoget");
    session_write_close();
        
   ?>
   