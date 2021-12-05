<?php
session_start();
$_SESSION['usuario']="";
$_SESSION['cedula']="";
$_SESSION['tipo']="";
$temp=file_get_contents("../Cliente/gestion-usuarios/InicioS.html");
print $temp;

?>