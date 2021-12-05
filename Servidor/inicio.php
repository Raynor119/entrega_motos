<?php
 $usu = $_POST["usu"];
 $contra = $_POST["contra"];

 $hostname='127.0.0.1';
 $database='motos';
 $username='admin';
 $password='admin';
 $conexion= new mysqli($hostname,$username,$password,$database);   
 if($conexion->connect_errno){
     echo "No se pudo Conectar";
     }else{
  } 
 $query="SELECT * FROM  ADMIN INNER JOIN PERSONA ON ADMIN.ID=PERSONA.CEDULA WHERE EMAIL='".$usu."' AND CONTRA='".$contra."'";
 $consulta = mysqli_query($conexion,$query);
 
 while($row = mysqli_fetch_array($consulta)){
     session_start();
     $_SESSION['usuario']=$usu;
     $_SESSION['cedula']=$row['CEDULA'];
     $_SESSION['tipo']="admin";
     echo 1;
 }

 $query="SELECT * FROM  USUARIO INNER JOIN PERSONA ON USUARIO.ID=PERSONA.CEDULA WHERE EMAIL='".$usu."' AND CONTRA='".$contra."'";
 $consulta = mysqli_query($conexion,$query);
 
 while($row = mysqli_fetch_array($consulta)){
		session_start();
    $_SESSION['usuario']=$usu;
    $_SESSION['cedula']=$row['CEDULA'];
    $_SESSION['tipo']="usu";
     echo 2;
 }
 





?>