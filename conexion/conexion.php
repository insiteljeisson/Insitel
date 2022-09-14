<?php
session_start();
date_default_timezone_set ('America/Bogota'); setlocale(LC_ALL,"es_ES");
 
$ip=$_SERVER['REMOTE_ADDR']; 
// echo $ip;
if($ip=="::1"){
    
    $servidor ="localhost";
    $nombreusuario="root";
    $password="";
    $db="insitel";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
      // die("conexion fallida:". $conexion->connect_error);
         }
   }else{
    // $servidor ="localhost";
    // $nombreusuario="id19528894_insitel123";
    // $password="xwm#r0xS8VNi]voT";
    // $db="id19528894_insitel";
    // $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    // if($conexion->connect_error){
    //   die("conexion fallida:". $conexion->connect_error);

    $servidor ="sql204.epizy.com";
    $nombreusuario="epiz_32587197";
    $password="XQYTs6HEEeR";
    $db="epiz_32587197_insitel";
    $conexion = new mysqli($servidor,$nombreusuario,$password, $db);
    if($conexion->connect_error){
      die("conexion fallida:". $conexion->connect_error);
    }

    
   } 

?> 
