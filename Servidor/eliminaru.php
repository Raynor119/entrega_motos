<?php
$cedula=$_POST["cedula"];
 $hostname='127.0.0.1';
 $database='motos';
 $username='admin';
 $password='admin';
 $conexion= new mysqli($hostname,$username,$password,$database);   
 if($conexion->connect_errno){
     echo "No se pudo Conectar";
     }else{
  } 
  $query="DELETE FROM  USUARIO WHERE ID='".$cedula."'";
  $query1="DELETE FROM  PERSONA WHERE CEDULA='".$cedula."'";
  $consulta = mysqli_query($conexion,$query);
  $consulta2 = mysqli_query($conexion,$query1);
  echo 1;


?>