<!doctype html>
<html lang="es">
  <head>
    <title>CRUD php y mysql b5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
   


<?php
    if(!isset($_GET['id'])){
        header('Location: contabilidad.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from transacciones where id = ?;");
    $sentencia->execute([$id]);
    $herramientas = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($herramientas);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProcesoReporte.php">
                    <div class="mb-3">
                        <label class="form-label">Descipción: </label>
                        <input type="text" class="form-control" name="txtDescipción" required 
                        value="<?php echo $herramientas->descipción; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ganancia: </label>
                        <input type="text" class="form-control" name="txtGanancia" autofocus required
                        value="<?php echo $herramientas->ganancia; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha: </label>
                        <input type="date" class="form-control" name="txtFecha" autofocus required
                        value="<?php echo $herramientas->fecha; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $herramientas->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

