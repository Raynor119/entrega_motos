<?php

session_start();

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
 
 $query="SELECT * FROM  USUARIO INNER JOIN PERSONA ON USUARIO.ID=PERSONA.CEDULA WHERE USUARIO.ID=".$cedula."";
 $consulta = mysqli_query($conexion,$query);
 $data="";
 while($row = mysqli_fetch_array($consulta)){
    $data=$row['CEDULA']."/".$row['NOMBRE']."/".$row['APELLIDO']."/".$row['TELEFONO']."/".$row['EMAIL'];

 }
 echo $data;




?>