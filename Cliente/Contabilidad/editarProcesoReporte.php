<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: contabilidad.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id = $_POST['id'];
    $descipción = $_POST['txtDescipción'];
    $ganancia = $_POST['txtGanancia'];
    $fecha = $_POST['txtFecha'];

    $sentencia = $bd->prepare("UPDATE transacciones SET descipción = ?, ganancia = ?, fecha = ?  where id = ?;");
    $resultado = $sentencia->execute([$descipción, $ganancia, $fecha,    $id]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=editado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }
    
?>