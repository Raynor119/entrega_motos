<?php 
$contrasena = "admin";
$usuario = "admin";
$nombre_bd = "motos";

try {
	$bd = new PDO (
		'mysql:host=localhost:3306;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>