<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
 body 
 {
height: 100%;
 background: linear-gradient(rgba(255,255,255,.9), rgba(255,255,255,.9)), url("../../../img/insitel.jpg");
 }     
header{	
 border: #b2b2b2 1px solid;
 width: 100%;
 height: 100px;
 background-color: orange;
       }
section{	
 border: #b2b2b2 1px solid;
 width: 100%;
 height: 100%;
       }
 div{
  border: #b2b2b2 1px solid;
 width: 33%;
 height: 400px;
 float: left;

 }
.divheader{
 border: #b2b2b2 1px solid;
 width: 33%;
 height: 100px;
 } 
 .divheader1{
 border: #b2b2b2 1px solid;
 width: 33%;
 height: 100px;
 } 
 img{
  border: #b2b2b2 1px solid;
 width: 90%; 
 height: 330px;	
 display:block;
margin:auto;


 } 
 input{   
   border: 1px solid #393939;
   border-radius: 5px 5px 5px 5px;   
   font-size: 12px;
   padding: 5px;
}
 @media only screen and (max-width: 1000px) {
form {
height: 1px;
} 
 body 
 {
height: 100%;
 }      
 section{	
 border: #b2b2b2 1px solid;
 width: 100%;
 height: 100%;
       }
 div{
  border: #b2b2b2 1px solid;
 width: 100%;
 height: 400px;
 float: left;
 }

 .divheader{
 border: #b2b2b2 1px solid;
 width: 100%;
 height: 100%;
 } 

 .divheader1{
 border: #b2b2b2 1px solid;
 width: 49.3%;
 height: 100px;
 float: left;
 } 

 input{
  width: 33%;
 height: 20px;
 }

img{
  border: #b2b2b2 1px solid;
 width: 90%; 
 height: 300px;	
 display:block;
margin:auto;


 } 
} 

@media only screen and (max-width: 300px) { 
 .divheader1{
 border: #b2b2b2 1px solid;
 width: 49.1%;
 height: 100px;
 float: left;
 }  
} 
</style>
<?php 
include("../../../conexion/conexion.php");
$Externoget	=(isset($_GET['Externoget'])    ? $_GET['Externoget']    : '');
$Consecutivoget=(isset($_GET['Consecutivoget'])    ? $_GET['Consecutivoget']    : '');
$fechaget=(isset($_GET['fechaget'])    ? $_GET['fechaget']    : '');
	// echo $Externoget;
	// echo $Consecutivoget;
echo "<form action='busquedaavanzada.php?Consecutivoget=$Consecutivoget&Externoget=$Externoget&fechaget=$fechaget' method='post' enctype='multipart/form-data'><input class='input1' type='submit' value='VOLVER' onclick=this.form.action='busquedaavanzada.php?Consecutivoget=$Consecutivoget&Externoget=$Externoget&fechaget=$fechaget');?'></input><FORM>";

 ?>

<body>
	<header><div class="divheader"><h1>Busqueda Imagenes</h1></div><div class="divheader1"><h5>Externo</h5><?php echo'<input type="" name="" value="'.$Externoget.'" type="search">';  ?></div><div class="divheader1"><h5>Consecutivo</h5><?php echo'<input type="" name="" value="'.$Consecutivoget.'" type="search">';  ?></div></header>
	<section>
		<?php $busquedaimagen="SELECT * FROM insertimg WHERE consecutivo='$Consecutivoget' and externo='$Externoget'";
			$resultimg=mysqli_query($conexion,$busquedaimagen);

			 while($row1 = mysqli_fetch_array($resultimg)) {
		    echo '<div><h5>'.$row1["Idimagen"].'</h5><img src="'.$row1["ruta"].'"></div>';
	}

		?>
		<div><h5>Fin imagenes</h5><img src="../../../img/insitel.jpg"></div></section>
		<!-- <div><img src="../../../archivos/Externos/2281/2022-09-02/10013_2Cerrado/90022/WIN_20220206_13_39_18_Pro.jpg"></div>
		<div><img src="../../../img/insitel.jpg"></div></section>
		<section>
		<div><img src="../../../img/insitel.jpg"></div>
		<div><img src="../../../img/insitel.jpg"></div>
		<div><img src="../../../img/insitel.jpg"></div></section>
		<section>
		<div><img src="../../../img/insitel.jpg"></div>
		<div><img src="../../../img/insitel.jpg"></div>
		<div><img src="../../../img/insitel.jpg"></div> --></section>
	
	

</body>
</html>