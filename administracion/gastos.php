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
    <title>Gastos Administración </title>
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
<?php    if(isset($_SESSION["usuario"])): ?>
    <!-- fin de navbar -->
<div class="container">
    <!-- menú -->
    <div class="container mt-1 menu-admin bordee">
        <a href="inversion.php" class="boton-inversion">Inversión</a>
        <a href="gastos.php" class="boton-gastos">Gastos</a>
        <a href="venta.php" class="boton-venta">Venta</a>
    </div>

   

       <!--inicio gastos -->
    <div class="container bordee">
        <h4 class="mt-1 text-center">Gastos del día <span class="el-dia"></span></h4>
        <div class="row mt-2">
                <!-- form de gastos -->
            <form id="gastos" class="col-12">

                <label for="fecha" class=""> fecha:</label>
                <div class="form-inline"> 
                    <input type="date" name="fecha-gastos" class="fecha-inv form-control mr-sm-2  mb-1" id="" value="">
                    <button class="btn btn-danger ml-2 buscar-dia">Buscar día</button>
                </div>

                <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                <input type="text" name="nombre-gastos" class="form-control col-12 col-md-4"  id="nombre-gastos">

                <label for="valor-gastos" class="mb-0 mt-1">Valor:</label>
                <input type="text" name="valor-gastos" class="form-control col-12 col-md-4 comas" id="valor-gastos">

                <input type="hidden" name="id" class="form-control" id="id-gastos">

                <button id="enviar-gastos" class="btn btn-danger mt-2 ml-5  guardar">Guardar</button>

                <button class="btn btn-success mt-2 botones modificar" id="modificar-gastos">Guardar modificación</button>

                <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button> 
                <br><br> 
            </form>
                <!--fin form de gastos -->
            <!-- mensaje que se vera visible al modificar -->
            <p class="mensaje-modificacion mt-3 bordee"><strong>Nota:</strong> Recuerde que si ya registro la venta del día, al hacer una modificación o eliminación se debe ir a venta y actualizarla.</p>

                <!-- lista de gastos del día -->
            <table class="mt-2 table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col-6">Información</th>
                        <th scope="col-5">Cuanto</th>
                        <th scope="col-1">C</th>
                    </tr>
                </thead>
                <tbody id="gastos-dia">

                </tbody>
                <tbody>
                    <tr>
                        <td scope="row" class="text-right">Total gastos del día</td>
                        <td><strong>$ </strong><strong id="total_valor_gastos"> </strong></td>                      
                    </tr>
                </tbody>
            </table>
        </div>
     </div> 
     <!--fin de gastos -->
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