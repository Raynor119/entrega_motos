<?php 
$contrasena = "root";
$usuario = "root";
$nombre_bd = "contabilidad";

try {
	$bd = new PDO (
		'mysql:host=localhost:3307;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>