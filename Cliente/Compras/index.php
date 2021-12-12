<?php 
// Chiphysi programación suscribete -->
// V 0.1 original -->
// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
// Derechos de autor(Suscribete)  -->

session_start();
$_SESSION['detalle'] = array();

require_once 'conexion.php';
require_once 'Producto.php';

$objProducto = new Producto();
$resultado_producto = $objProducto->get();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="libs/js/jquery.js"></script>
    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs/ajax.js"></script>
    <link rel="shortcut icon" href="carro.png">
	

    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/compras_estilos.css">
	

  </head>

  <body>
	  
  <header class="">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand " href="#">Compras</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/Cliente/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../taller.php">Taller</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="../contacto.html">Contacto</a>
              </li>
            </ul>

          </div>
		  <a class="btn btn-light fas fa-user" href="/Servidor/sesion.php"></a>
          
        </div>

      </nav>
      <div class="containe">
        <h3 class="titulo1">Compras
          <p href="" class="fas fa-motorcycle"></p>
        </h3>
      </div>

    </header>
	  
 	<div class="container">
	<h1 style="text-align: left";>Mi Carrito</h1>
    	<hr>
		 	
 		<div class="page-header">
			<center><h1><font color="white" size="10" face="Algerian">Carro De Compras</font></h1></center>
		</div>
		<center>
 		<div class="row">


			<div class="col-md-4">	
				<div><font color="white" size="6" face="Algerian">Producto:</font>
				<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
					<option value="0">Seleccione un producto</option>
					<?php foreach($resultado_producto as $producto):?>
						<option value="<?php echo $producto['id']?>"><?php echo $producto['descripcion']?></option>
					<?php endforeach;?>
				</select>
				</div>
			</div>




			<div class="col-md-4">
				<div><font color="white" size="6" face="Algerian">Cantidad:</font>
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>




			<div class="col-md-1">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary btn-agregar-producto">AGREGAR</button>
				</div>
			</div>
			<div class="col-md-1">
				<a href="index.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-danger ">REFRESH</button>
				</div>
			    </a>
			</div>
			<div class="col-md-1">
				<a href="detalle.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-primary ">DETALLES</button>
				</div>
			    </a>
			</div>



		</div>
		</center>
		<br>
		<center>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title"><font size="6" face="Algerian" >Productos</font></h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
					<table class="table">
					    <thead>
					        <tr>
					            <th>Descripci&oacute;n</th>
					            <th>Cantidad</th>
					            <th>Precio</th>
					            <th>Subtotal</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><?php echo $detalle['precio'];?></td>
					            <td><?php echo $detalle['subtotal'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"><font size="3" face="Algerian" > No hay productos agregados </font></div>
				<?php }?>
			</div>
		</div>
	</center>
 	</div>
 	<center>
 	<div class="col-md-12">
				<a href="detalle2.php">
				<div style="margin-top: 45px;">
				<button type="button" class="btn btn-success "><font size="2" face="Algerian">COMPRAR</font></button>
				</div>
			    </a>
			</div>
	</center>		
  </body>
  <br>
  <hr>
  <footer class="container bg-light">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <p style="text-align: left";>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto veritatis cum, hic deleniti saepe amet porro, blanditiis at quo iste nemo fugiat harum provident deserunt illum veniam laudantium pariatur.</p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <h5> <b> Medios de contacto </b></h5>
                        <a href="" class="btn btn-primary fab fa-facebook"></a>
                        <a href="" class="btn btn-success fab fa-telegram"></a>
                        <a href="" class="btn btn-primary fab fa-twitter"></a>
                        <a href="" class="btn btn-success fab fa-whatsapp"></a>
                    </div>
                </div>            
      
            </footer>
</html>
