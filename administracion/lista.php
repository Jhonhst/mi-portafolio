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
    <title>Lista Administración</title>
    <link rel="stylesheet" href="librerias/bootstarp 4/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/font-awesome/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
</head>
<body class="body">
    <!--inicio navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary bordee">
  <a class="navbar-brand texto-titulo" >Administración</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="inversion.php">Agregar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
<?php if(isset($_SESSION["usuario"])): ?>
    <!-- fin de navbar -->
<div class="lista container">  
    <div class="bordee container mt-5">
        <h4 class="text-center mt-1 mb-5">Lista de ventas y ganancias</h4>
        <select name="tiempo" id="tiempo" class="form-control mr-sm-2 col-12 col-md-4 mb-3">
            <option  value="semana">Ultima Semana</option>
            <option  value="mes">Último mes</option>
            <option  value="todo">todo</option>
        </select>
   
        <form class="form-inline  mb-3">
            <label for="fecha" class="mr-2">Fecha única:</label>
            <input class="form-control mr-sm-2" id="fecha-unica" type="date" >
            <button class="btn btn-success my-2 my-sm-0" id="fecha-buscar" type="buttom">Buscar</button>
        </form>

        <form class="form-inline  mb-5">
            <label for="fecha" class="mr-2">Desde que fecha:</label>
            <input type="date" name="fecha-inicio" id="fecha-inicio" class="form-control mr-sm-2"  id="">
            <label for="fecha" class="mr-2">Hasta que fecha:</label>
            <input type="date" name="fecha-fin" id="fecha-fin" class="form-control mr-sm-2"  id="">
            <button id="fechas" class="btn btn-danger ">Buscar</button>
        </form>

        <p class="mt-2 mb-2 bordee"><strong>Nota:</strong> Solo se verán registros que estén completos, es decir, que se encuentre registrado inversión, gasto y venta.</p>
        <br><br>
    </div>
</div>
<br><br>
<!-- tablas -->
<div class="lista container">
    <table class="table table-striped table-bordered table-primary bordee">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Inversión</th>
          <th scope="col">Gastos</th>
          <th scope="col">Venta</th>
          <th scope="col">Ganancia</th>
          <th scope="col">Ganancia - gastos</th>
        </tr>
      </thead>
      <tbody id="lista-tiempo">
   
      </tbody>
    </table>

    <table class="table table-striped table-dark  table-bordered ">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Inversión</th>
          <th scope="col">Gastos</th>
          <th scope="col">Venta</th>
          <th scope="col">Ganancia</th>
          <th scope="col">Ganancia - gastos</th>
        </tr>
      </thead>
      <tbody id="lista">

      </tbody>
    </table>
    <p id="mayor-30-registros"></p>
    <br><br>
</div>

<!-- historial historial  historial  historial  historial  historial  historial -->
 
     <!-- se vera solo cuando se pida ver algun registro con su historial de manera individual -->
     <div class="individual container">
      <p class="container bordee mt-3"><strong>Nota:</strong> ¡Recuerde! que al hacer una modificación o eliminación se debe ir a venta y actualizarla.</p>
  
         <!--inicio inversión -->
      <div class="container bordee">
  
          <h4 class="mt-1 text-center">Inversión del día <span class="fecha-individual-titulo" > </span></h4>
          <div class="row mt-2">
                  <!-- form de inversión -->
              <form id="inversion" class="col-12">
                  <label for="fecha" class=""> fecha:</label>
                  <input type="date"  name="fecha-inversion" class="fecha-individual  form-control mb-1" id="" value="2018-11-10" readonly>
  
                  <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                  <input type="text" name="nombre-inversion" class="form-control" id="nombre-inversion">
  
                  <label for="valor-inversion" class="mb-0 mt-1">Valor:</label>
                  <input type="text" name="valor-inversion" class="form-control comas" id="valor-inversion">
  
                  <input type="hidden" name="id" class="form-control" id="id-inversion">
  
                  <button id="enviar-inversion" class="btn btn-danger mt-2 guardar">Guardar</button>  
                  <button class="btn btn-success mt-2 botones" id="modificar-inversion">Guardar modificación</button> 
                  <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button>              
              </form>
                  <!--fin form de inversión -->
      
                  <!-- lista de inversión del día -->
              <table class="mt-4 table table-striped table-bordered ">
                  <thead>
                      <tr>
                          <th scope="col-6">Información</th>
                          <th scope="col-5">Cuanto</th>
                          <th scope="col-1">C</th>
                      </tr>
                  </thead>
                  <tbody id="inversion-dia">
  
                  </tbody>
                  <tbody>
                      <tr>
                          <td scope="row" class="text-right">Total inversión del día</td>
                          <td><strong>$ </strong><strong id="total_valor_inversion"> </strong></td>                      
                      </tr>
                  </tbody>
              </table>
                  <!-- lista de inversión del día -->
          </div>
      </div> 
  
         <!--fin de inversión -->
  
         <!--inicio gastos -->
         <div class="container mt-5 bordee">
          <h4 class="mt-1 text-center">Gastos del día <span class="fecha-individual-titulo" > </span></h4>
          <div class="row mt-2">
                  <!-- form de gastos -->
              <form id="gastos" class="col-12">
  
                  <label for="fecha" class=""> fecha:</label>
                  <input type="date" name="fecha-gastos" class="fecha-individual  form-control  mb-1" id="" value="2018-11-10" readonly>
  
                  <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                  <input type="text" name="nombre-gastos" class="form-control" id="nombre-gastos">
  
                  <label for="valor-gastos" class="mb-0 mt-1">Valor:</label>
                  <input type="text" name="valor-gastos" class="form-control comas" id="valor-gastos">
  
                  <input type="hidden" name="id" class="form-control" id="id-gastos">
  
                  <button id="enviar-gastos" class="btn btn-danger mt-2 guardar">Guardar</button>
  
                  <button class="btn btn-success mt-2 botones modificar" id="modificar-gastos">Guardar modificación</button>
  
                  <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button>  
              </form>
                  <!--fin form de gastos -->
      
                  <!-- lista de gastos del día -->
              <table class="mt-4 table table-striped table-bordered ">
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
                  <!-- lista de gastos del día -->
          </div>
      </div> 
         <!--fin de gastos -->
  
      
         <!--inicio ventas -->
         <div class="container mt-5 bordee">
          <h4 class="mt-1 text-center">Venta del día <span class="fecha-individual-titulo" > </span></h4>
          <div class="row mt-2">
                  <!-- form de ventas -->
              <form id="venta" class="col-12 ">
                     
                      <label for="fecha" class=""> fecha:</label>
                      <input type="date" class="fecha-individual  form-control mb-1" name="fecha-venta" id="" value="2018-11-10" readonly>
                         
                      <input type="hidden" id="id-venta" name="id_venta">
  
                      <label for="informacion" class="mb-0 mt-1">Efectivo :</label>
                      <input type="text" id="efectivo" name="efectivo-venta" class="form-control input-venta comas" id="" >
             
                      <label for="valor-inversion" class="mb-0 mt-1">Inversión:</label>
                      <input type="text" id="inversion-venta" name="inversion-venta" class="form-control input-venta comas" readonly>
               
                      <label for="valor-inversion" class="mb-0 mt-1">Gastos:</label>
                      <input type="text" id="gastos-venta" name="gastos-venta" class="form-control input-venta comas" readonly>
           
                      <label for="valor-inversion" class="mb-0 mt-1">Dinero que se llevo:</label>
                      <input type="text" name="dinerollevo-venta" id="dineroquellevo" class="form-control input-venta comas">
            
                      <label for="valor-inversion" class="mb-0 mt-1">Dinero extra que no pertenece al negocio:</label>
                      <input type="text" name="dineroextra-venta" id="dineroextra" class="form-control input-venta comas" placeholder="opcional">
          
                      <div class="mt-3">
                          <p><strong  id="venta-dia"></strong> </p>
                      </div>
  
                      <button id="enviar-venta" class="btn btn-danger mt-2 guardar-venta">Guardar</button>
  
                      <button id="pre-modicar-venta" class="btn btn-success mt-2 pre-modicar-venta botones">Modificar</button>
  
                      <button class="btn btn-success mt-2 botones" id="modificar-venta">Guardar modificación</button>
  
                      <button class="btn btn-danger mt-2 botones " id="no-modificar-venta">No modificar</button> 
                      <br><br> 
              </form>
                  <!--fin form de ventas -->  
          </div> 
      </div> 
         <!--fin de ventas -->
  
    <?php endif ?>
    <?php if(!isset($_SESSION["usuario"])): ?>
        <h1 class="text-center mt-5"> Se debe iniciar sesión</h1>
    <?php endif ?>
      <!-- footer -->
      <br>
      <br>
      <br>
      </div>

    <!-- footer -->
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