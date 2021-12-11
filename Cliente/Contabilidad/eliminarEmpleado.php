<?php 
    if(!isset($_GET['codigo'])){
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM empleados where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=eliminado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
    }
    
?>