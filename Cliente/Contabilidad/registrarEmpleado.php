<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEstado"]) || empty($_POST["txtFecha"])  ){
        header('Location: contabilidad.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $estado = $_POST["txtEstado"];
    $fecha = $_POST["txtFecha"];

    
    $sentencia = $bd->prepare("INSERT INTO empleados(nombre,estado,fecha) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$estado,$fecha]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=registrado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }
    
?>


