<?php
//Chiphysi programación suscribete 
//V 0.1 original
//Autor: Chiphysi  Autor: Jhonatan Cardona  
//Derechos de autor(Suscribete)

$manejador="mysql";
$servidor="localhost:3307";
$usuario="root";
$pass="root";
$base="dbcarrito";
$cadena="$manejador:host=$servidor;dbname=$base";
$cnx = new PDO($cadena,$usuario,$pass);
?>