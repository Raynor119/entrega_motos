<?php
session_start();
$nomb=$_POST["nombre"];
$tele=$_POST["telef"];
$apelli=$_POST["apelli"];
$cedula=$_SESSION['cedula'];


 $hostname='127.0.0.1';
 $database='motos';
 $username='admin';
 $password='admin';
 $conexion= new mysqli($hostname,$username,$password,$database);   
 if($conexion->connect_errno){
     echo "No se pudo Conectar";
     }else{
  } 
  $query="UPDATE PERSONA SET NOMBRE='".$nomb."', APELLIDO='".$apelli."', TELEFONO=".$tele." WHERE CEDULA=".$cedula."";
  $consulta = mysqli_query($conexion,$query);
  echo 1;


?>