<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../Cliente/css/repuestos_administrador.css">

  <title>Repuestos</title>

  <script>
    function getch(){
      var get = document.getElementById("get").value;
      document.getElementById("put").value = get;
    }
  </script>


</head>

<body class="">
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand " href="repuestos_cliente.php">Repuestos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../Cliente/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Cliente/taller.php">Taller</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Cliente/Compras/index.php">Compras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Cliente/contacto.html">Contacto</a>
            </li>
          
          </ul>

        </div>
        <a class="btn btn-light fas fa-user" href="/Servidor/sesion.php"></a>
       
         </div>

    </nav>
    <div class="containe">
      <h3 class="titulo1">Repuestos
        <p href="" class="fas fa-motorcycle"></p>
      </h3>
    </div>

  </header>

  <div class="container">


    <div class="row">
      <div class="izquierdo cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">

        <h5 class="res">Repuestos</h5>
        <br>

        <!-- Search form -->
        <form class="" action="repuestos_cliente_buscador.php" method="POST" >
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search" name="nombre_busqueda" id="nombre_busqueda">
          <i class="fas fa-search" aria-hidden="true"></i> <br> <br>


          <input type="radio" name="marca" id="marca" checked value="todos">Todos<br>
          <input type="radio" name="marca" id="marca" value="honda">Honda <br>
          <input type="radio" name="marca" id="marca" value="suzuki">Suzuki <br>
          <input type="radio" name="marca" id="marca" value="yamaha">Yamaha <br>
          <input type="radio" name="marca" id="marca" value="kawasaki">Kawasaki <br>
          <input type="radio" name="marca" id="marca" value="otro">otro <br>
          <br>

          <p class="repuestos">Precio</p>
          <input class="repuest_input" type="range" name="get" id="get" min="15000" max="250000" onchange="getch();">
          <input type="number" id="put" value="15000" name="rango" id="rango"> <br> <br>

          <input type="submit" class="btn btn-light" value="Filtrar">
        </form>
      </div>


      <!--PARTE DEL ADMIN -->
      <div class="izquierdo2 col-lg-1 col-md-1 col-sm-1 col-xs-1">
      </div>

      <!-- -->

      <div class="derecho col-lg-9 col-md-9 col-sm-9 col-xs-9">


        <!--COLUMNA DEL LADO DERECHO-->
        <div class="row">


          <?php //CONSULTA DE TODOS

          include '../Servidor/conexion.php';
          $i = 1;

          //if($_REQUEST['marca'] == 'todos'){
           // $todos = '*';
          //}else{
          
            $todos = '*';
          $consulta = "SELECT $todos from repuestos";


          $resultado = mysqli_query($mysqli, $consulta);
          if ($resultado) {
            while ($row = $resultado->fetch_array()) {
              $nombre = $row['nombre'];
              $marca = $row['marca'];
              $descripcion = $row['descripcion'];
          ?>


              <div class="cajita_div">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" style="width: 180px;"> <br>
                <?php echo $descripcion; ?> <br>
                <a href="../Cliente/Compras/compras.php" class="fas fa-eye btn btn-light"></a>
              </div>

          <?php
            }
          } ?>

        </div>

      </div>


    </div>
  </div>








  <footer class="container bg-light">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto veritatis cum, hic deleniti saepe amet porro, blanditiis at quo iste nemo fugiat harum provident deserunt illum veniam laudantium pariatur.</p>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <h5> <b> Medios de contacto </b></h5>
        <a href="https://www.facebook.com/MotoGP/" class="btn btn-primary fab fa-facebook"></a>
        <a href="" class="btn btn-success fab fa-telegram"></a>
        <a href="https://twitter.com/motogp" class="btn btn-primary fab fa-twitter"></a>
        <a href="https://api.whatsapp.com/send?phone=+573223390961" class="btn btn-success fab fa-whatsapp"></a>
      </div>
  </footer>





</body>
<script src="../Cliente/js/mododarks.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>