<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/repuestos_estilos.css">
    
    <title>Repuestos</title>
</head>
<body>
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand " href="#">Repuestos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="taller.html">Taller</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="compras.php">Compras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                  </li>
                </ul>
              
              </div>
              <a class="btn btn-light fas fa-user" href="login.html"></a>
              <a class="btn btn-light fas fa-shopping-cart"></a>
              <a class="btn btn-light"> DARK</a>
            </div>
          
          </nav>
          <div class="containe">
            <h3 class="titulo1" >Repuestos
                <p href="" class="fas fa-motorcycle"></p>
            </h3>
          </div>
                    
    </header>

    <aside >
    <div class="container">
        <div class="row">
        <div class="izquierdo cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">
       
        <h5 class="res">Repuestos</h5>
        <!-- Search form -->
        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
        aria-label="Search">
        <i class="fas fa-search" aria-hidden="true"></i>
         </form>
         <br>
         <input type="radio" name="" id="">Todas<br>
         <input type="radio" name="" id="">Honda<br>
         <input type="radio" name="" id="">Suzuki<br>
         <input type="radio" name="" id="">Yamaha<br>
         <input type="radio" name="" id="">Kawasaki<br>
         <input type="radio" name="" id="">Royal enfield<br>
         <input type="radio" name="" id="">Ktm<br>
         <br>
        <p class="repuestos">Precio</p>
        <input class="repuest_input" type="range" name="" id="">
         <label for="">Cantidad</label> <br>
    
         
        </div>
        
       
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> 
        <a class="btn btn-success">+</a> <br> <br>
        <a class="btn btn-primary">A</a> <br> <br>
        <a class="btn btn-danger">-</a> <br>
        </div>

        <div class="derecho cajas col-lg-8 col-md-8 col-sm-8 col-xs-8">
            

          <!--COLUMNA DEL LADO DERECHO-->
          <div class="row">
            <div class="derechito col-lg-3 col-md-3 col-sm-3 col-xs-3">  
              <p><b>Aceite motul</b></p>
              <p>Descripcion y precio</p>
              
              <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
              <p><b>Aceite motul</b></p>
              <p>Descripcion y precio</p>
              <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
              <p>Aceite motul</p>
              <p>Descripcion y precio</p>
              <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
              <p>Aceite motul</p>
              <p>Descripcion y precio</p>
              <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
            </div>
          </div>       

          <br> <!--Salto de linea en cajitas-->

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
            <p>Aceite motul</p>
            <p>Descripcion y precio</p>
            <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
            <p>Aceite motul</p>
            <p>Descripcion y precio</p>
            <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
            <p>Aceite motul</p>
            <p>Descripcion y precio</p>
            <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">  
            <p>Aceite motul</p>
            <p>Descripcion y precio</p>
            <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
          </div>
        
        </div>       
        <br>
        </div>

    </div>
    </aside>
    
    

    <br>  
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
      </footer>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>