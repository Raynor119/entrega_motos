<?php
session_start();
$temp=file_get_contents("../Cliente/gestion-usuarios/MDatos.html");
print $temp;
?>