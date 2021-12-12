<?php
$nomb=$_POST["nomb"];
$cedu=$_POST["cedu"];
$tele=$_POST["tele"];
$apelli=$_POST["apelli"];
$emai=$_POST["emai"];
$contra=$_POST["contra"];

 $hostname='127.0.0.1';
 $database='motos';
 $username='admin';
 $password='admin';
 $conexion= new mysqli($hostname,$username,$password,$database);   
 if($conexion->connect_errno){
     echo "No se pudo Conectar";
     }else{
  } 
  $query="INSERT INTO PERSONA(CEDULA,NOMBRE,APELLIDO,TELEFONO,EMAIL,CONTRA) VALUES(".$cedu.",'".$nomb."','".$apelli."',".$tele.",'".$emai."','".$contra."')";
  $consulta = mysqli_query($conexion,$query) or die (error());
  $query2="INSERT INTO USUARIO(ID) VALUES(".$cedu.")";
  $consulta2 = mysqli_query($conexion,$query2) or die (error());
  echo 1;


  function error(){
    echo 0;
  }


?>