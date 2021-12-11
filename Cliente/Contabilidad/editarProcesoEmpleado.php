<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: contabilidad.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $estado = $_POST['txtEstado'];
    $fecha = $_POST['txtFecha'];

    $sentencia = $bd->prepare("UPDATE empleados SET nombre = ?, estado = ?, fecha = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $estado, $fecha, $codigo]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=editado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }
    
?>