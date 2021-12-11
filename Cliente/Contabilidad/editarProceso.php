<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: contabilidad.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $estado = $_POST['txtEstado'];

    $sentencia = $bd->prepare("UPDATE herramientas SET nombre = ?, estado = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $estado,  $codigo]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=editado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }
    
?>