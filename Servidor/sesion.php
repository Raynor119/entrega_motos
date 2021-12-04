<?php
session_start();

$usu=$_SESSION['usuario'];
$tipo=$_SESSION['tipo'];

if($usu!=""){
    if($tipo=="usu"){
        $temp=file_get_contents("../Cliente/gestion-usuarios/DatosU.html");
        print $temp;

    }
    if($tipo=="admin"){
        $temp=file_get_contents("../Cliente/gestion-usuarios/Admin.html");
        print $temp;
    
    }



}else{
    $temp=file_get_contents("../Cliente/gestion-usuarios/InicioS.html");
    print $temp;

}

?>