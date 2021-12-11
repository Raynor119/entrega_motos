<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEstado"]) ){
        header('Location: contabilidad.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $estado = $_POST["txtEstado"];
    
    $sentencia = $bd->prepare("INSERT INTO herramientas(nombre,estado) VALUES (?,?);");
    $resultado = $sentencia->execute([$nombre,$estado]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=registrado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }
    
?>