<?php 
    if(!isset($_GET['id'])){
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM transacciones where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: contabilidad.php?mensaje=eliminado');
    } else {
        header('Location: contabilidad.php?mensaje=error');
    }
    
?>