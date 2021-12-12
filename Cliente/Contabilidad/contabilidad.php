<?php 

	$conexion=mysqli_connect('localhost:3306','admin','admin','motos');

 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="css/estiloo.css" class="rel">
    <link rel="stylesheet" href="css/estilo.css">
    <link type="text/css" rel="stylesheet" href="css/stylee.css">
    <link rel="icon" href="imgs/motocross.ico">
    
</head>
<body>
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand " href="contabilidad.php">Contabilidad</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../taller.php">Taller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Compras/index.php">Compras</a>
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
            <h3 class="titulo1">Contabilidad
                <p href="" class="fas fa-motorcycle"></p>
            </h3>
        </div>

    </header>


    <style>
    .ex1 {
      background-color: lightblue;
      width: 700px;
      height: 300px;
      overflow: scroll;
    }
    </style>
    

    
        
        <div class="container">

            <h1>Reportes de transacciones</h1>
            <hr>
            <?php
                include_once "model/conexion.php";
                $sentencia = $bd -> query("select * from herramientas");
                $herramientas = $sentencia->fetchAll(PDO::FETCH_OBJ);

                $sentencia1 = $bd -> query("select * from herramientas WHERE estado LIKE '%Mal Estado%';");
                $herramientas1 = $sentencia1->fetchAll(PDO::FETCH_OBJ);

                $sentencia2 = $bd -> query("select * from empleados ORDER BY MONTH(fecha) DESC , fecha DESC;");
                $herramientas2 = $sentencia2->fetchAll(PDO::FETCH_OBJ);

                $sentencia3 = $bd -> query("select * from transacciones ORDER BY MONTH(fecha) DESC , fecha DESC;");
                $herramientas3 = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                
                
            ?>

                <div class="container mt-2">
                    <div >
                        <div class="col-md-7">
                        
                            <div style="width: 1000px;" class="card">
                                <div " class="card-header">
                                    Lista de herramientas
                                </div>
                                <div class="p-2">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Ganancia</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col" colspan="2">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                foreach($herramientas3 as $dato){ 
                                            ?>

                                            <tr>
                                                <td scope="row"><?php echo $dato->id; ?></td>
                                                <td><?php echo $dato->descipción; ?></td>
                                                <td><?php echo $dato->ganancia; ?></td>
                                                <td><?php echo $dato->fecha; ?></td>
                                                <td><a class="text-success" href="editarReporte.php?id=<?php echo $dato->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminarReporte.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"></i></a></td>
                                            </tr>

                                            <?php 
                                                }
                                            ?>

                                        </tbody>
                                    </table>

                            
                                        
                                        <?php 
                                        $sql="SELECT * from transacciones ORDER BY MONTH(fecha) DESC , fecha DESC;";               
                                        $sql2="SELECT * from transacciones WHERE MONTH(fecha)='12' ";  
                                        $result=mysqli_query($conexion,$sql);
                                        $result2=mysqli_query($conexion,$sql2);
                                        
                                        $qty= 0;
                                        while($mostrar=mysqli_fetch_array($result)){
                                            ?>
                                                        
                                            <?php 
                                            $qty += $mostrar['ganancia'];                   
                                        }

                                        $qty2= 0;
                                        while($mostrar=mysqli_fetch_array($result2)){
                                            ?>
                                                    
                                            <?php 
                                            $qty2 += $mostrar['ganancia'];                   
                                            }
                                            ?>
                                        
                                        
                                        <h4>Ganancia Total</h4>
                                        <input name="total" value=<?php echo $qty; ?> disabled>
                                    

                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            <div class="container mt-2">
                <div class="row justify-content-center">
                    <div style="width: 1000px;" class="col-md-7">
                    
                        
                    </div>
                    
                </div>
            </div>
            
    


                <h1>Estadisticas</h1>
                <hr>

                <div  class="row">

        
                    <div style="width: 500px;" class="col-md-6">
                        <h2>Ganancia ultimo mes</h2>
                        <hr>
                        <div  class="caja"><?php echo $qty2; ?></div>
                        
                    </div>

                    <div style="width: 500px;" class="col-md-6">
                        <h2>Detalle financiero</h2>
                        <hr>
                        <div  class="caja">Las ganancias han aumentado un 20% mas en comparación con el mes anterior</div>
                    </div>
                    

                    <div style="width: 1000px;" class="col-md-6">
                        <div  id="myfirstchart"></div>
                    </div>
        
                </div>

                
                
                <hr>
                <h1 >Herramientas de reparacón</h1>
                <hr>

                <?php
                    include_once "model/conexion.php";
                    $sentencia = $bd -> query("select * from herramientas");
                    $herramientas = $sentencia->fetchAll(PDO::FETCH_OBJ);

                    $sentencia1 = $bd -> query("select * from herramientas WHERE estado LIKE '%Mal Estado%';");
                    $herramientas1 = $sentencia1->fetchAll(PDO::FETCH_OBJ);

                    $sentencia2 = $bd -> query("select * from empleados ORDER BY MONTH(fecha) DESC , fecha DESC;");
                    $herramientas2 = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                    
                    
                ?>

                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                        
                            <div class="card">
                                <div class="card-header">
                                    Lista de herramientas
                                </div>
                                <div class="p-2">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre de la herramienta</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col" colspan="2">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                foreach($herramientas as $dato){ 
                                            ?>

                                            <tr>
                                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                                <td><?php echo $dato->nombre; ?></td>
                                                <td><?php echo $dato->estado; ?></td>
                                                <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                                            </tr>

                                            <?php 
                                                }
                                            ?>

                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Ingresar datos:
                                </div>
                                <form class="p-4" method="POST" action="registrar.php">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre: </label>
                                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Estado: </label>
                                        <input type="text" class="form-control" name="txtEstado" autofocus required>
                                    </div>
                                    <div class="d-grid">
                                        <input type="hidden" name="oculto" value="1">
                                        <input style="background-color:#0b62a5;" type="submit" class="btn btn-primary" value="Registrar">
                                    </div>
                                </form>
                            </div>
                            <br>                           
                            <div class="card">
                                <div class="card-header">
                                    Invertir en esta herramientas 
                                </div>
                                <form class="p-2" method="POST" action="registrar.php">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre de la herramienta</th>
                                                <th scope="col">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                foreach($herramientas1 as $dato){ 
                                            ?>

                                            <tr>
                                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                                <td><?php echo $dato->nombre; ?></td>
                                                <td><?php echo $dato->estado; ?></td>
                                                
                                            </tr>

                                            <?php 
                                                }
                                            ?>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    

                <hr>
                <h1>Trabajadores del taller</h1>
                <hr>

                

                <div class="container mt-5">
                    <div class="row justify-content-center">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Ingresar datos:
                                </div>
                                <form class="p-4" method="POST" action="registrarEmpleado.php">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre: </label>
                                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Estado: </label>
                                        <input type="text" class="form-control" name="txtEstado" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Fecha: </label>
                                        <input style="width: 270px;" type="date" class="form-control" name="txtFecha" autofocus required >
                                    </div>
                                    <div class="d-grid">
                                        <input type="hidden" name="oculto" value="1">
                                        <input style="background-color:#0b62a5;" type="submit" class="btn btn-primary" value="Registrar">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header">
                                    Lista de Trabajadores del taller
                                </div>
                                <div class="p-4">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre del trabajador</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">fecha</th>
                                                <th scope="col" colspan="2">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                foreach($herramientas2 as $dato){ 
                                            ?>

                                            <tr>
                                                <td><?php echo $dato->nombre; ?></td>
                                                <td><?php echo $dato->estado; ?></td>
                                                <td><?php echo $dato->fecha; ?></td>
                                                <td><a class="text-success" href="editarEmpleado.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminarEmpleado.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                                            </tr>

                                            <?php 
                                                }
                                            ?>

                                        </tbody>
                                    </table>                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>



            <footer class="container bg-light">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto veritatis cum, hic deleniti saepe amet porro, blanditiis at quo iste nemo fugiat harum provident deserunt illum veniam laudantium pariatur.</p>

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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/morris.min.js"></script>
<script type="text/javascript" src="js/lineas.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/script2.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
