<?php
session_start();
?>
<!-- cabecera -->
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/estadisticas.png">
    <title>Venta Administración</title>
    <link rel="stylesheet" href="librerias/bootstarp 4/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/font-awesome/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
</head>
<body>
    <!--inicio navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary bordee">
  <a class="navbar-brand texto-titulo" >Administración</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="inversion.php">Agregar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="lista.php">Lista</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="informacion.html">¿Como funciona?</a>
      </li>
    </ul>
    <?php if(isset($_SESSION["usuario"])): ?>
        <a href="config/cerrar-session.php" type="buttom" id="cerrar-sesion"  class="btn btn-danger " > Cerrar Sesión</a>
    <?php endif ?>

    <?php if(!isset($_SESSION["usuario"])): ?>
        <a href="index.html" type="buttom" id="cerrar-sesion"  class="btn btn-danger "> Iniciar Sesión</a>
    <?php endif ?>
  </div>
</nav>

<?php  if(isset($_SESSION["usuario"])): ?>
    <!-- fin de navbar -->
<div class="container">
    <!-- menú -->
    <div class="container mt-1 menu-admin bordee">
        <a href="inversion.php" class="boton-inversion">Inversión</a>
        <a href="gastos.php" class="boton-gastos">Gastos</a>
        <a href="venta.php" class="boton-venta">Venta</a>
    </div>


       <!--inicio ventas -->
    <div class="container bordee">
        <h4 class="mt-1 text-center">Venta del día <span class="el-dia"></span></h4>
        <div class="row mt-2">
                <!-- form de ventas -->
            <form id="venta" class="col-12">
                   
                    <label for="fecha" class=""> fecha:</label>
                    <div class="form-inline"> 
                        <input type="date" class="fecha-inv form-control mr-sm-2 mb-1" name="fecha-venta" id="" value="">
                        <button class="btn btn-danger ml-2 buscar-dia">Buscar día</button>
                    </div>
                       
                    <input type="hidden" id="id-venta" name="id_venta">

                    <label for="informacion" class="mb-0 mt-1">Efectivo :</label>
                    <input type="text" id="efectivo" name="efectivo-venta" class="form-control input-venta col-12 col-md-4 comas">
           
                    <label for="valor-inversion" class="mb-0 mt-1">Inversión:</label>
                    <input type="text" id="inversion-venta" name="inversion-venta" class="form-control input-venta col-12 col-md-4 comas" readonly>
             
                    <label for="valor-inversion" class="mb-0 mt-1">Gastos:</label>
                    <input type="text" id="gastos-venta" name="gastos-venta" class="form-control input-venta col-12 col-md-4 comas" readonly>
         
                    <label for="valor-inversion" class="mb-0 mt-1">Dinero que se llevo:</label>
                    <input type="text" name="dinerollevo-venta" id="dineroquellevo" class="form-control input-venta col-12 col-md-4 comas">
          
                    <label for="valor-inversion" class="mb-0 mt-1">Dinero extra (que no pertenece al negocio): </label>
                    <input type="text" name="dineroextra-venta" id="dineroextra" class="form-control input-venta col-12 col-md-4 comas">
        
                    <div class="mt-3">
                        <p><strong  id="venta-dia"></strong> </p>
                    </div>

                    <button id="enviar-venta" class="btn btn-danger mt-2 ml-5  guardar-venta">Guardar</button>

                    <button id="pre-modicar-venta" class="btn btn-success mt-2 ml-5  pre-modicar-venta botones">Modificar</button>

                    <button class="btn btn-success mt-2 botones ml-5" id="modificar-venta">Guardar modificación</button>

                    <button class="btn btn-danger mt-2 botones " id="no-modificar-venta">No modificar</button>  
            </form>
                <!--fin form de ventas -->  
        </div>
        <!--fin de ventas -->
        <br><br>
    </div> 

 
    <?php endif ?>
    <?php if(!isset($_SESSION["usuario"])): ?>
     <h1 class="text-center mt-5"> Se debe iniciar sesión</h1>
    <?php endif ?>
    <!-- footer -->
    <br>
    <br>
    <br>
    </div>
    <div class="footer">
        <p class="texto-footer">Unos de los grandes secretos para el éxito es la buena administración</p>
    </div>
    <script src="librerias/bootstarp 4/js/1jquery-3.3.1.slim.min.js"></script>
    <script src="librerias/bootstarp 4/js/2popper.min.js"></script>
    <script src="librerias/bootstarp 4/js/3bootstrap.min.js"></script>
    <script src="librerias/jquery 3/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>