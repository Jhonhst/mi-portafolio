<?php
include_once "conexion.php";
include_once 'parteextrenos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/1estilos.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar-top-fixed.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="icon" href="img/superpelisicon.ico">
  <title>Categorias</title>
</head>
<body style="background: rgb(39, 37, 37)">
 
     <!-- inicio de navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bordeenav">
    <a class="navbar-brand " href="portada.php">SuperPelis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="categorias.php" >Géneros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="category.php?genero=estrenos" >Estrenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="catalogo.php" >Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contacto.html">Contacto</a>
        </li>
      </ul>
      <form action="resultados.php" method="GET" class="form-inline mt-2 mt-md-0">
        <input name="name" class="form-control mr-sm-2" type="text" placeholder="Buscar (titulo o año)" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <div class="d-md-none mt-2">
        <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
        <a href="" class="ml-3"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="" class="ml-3"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="" class="ml-3"><i class="fab fa-youtube fa-2x"></i></a>
        <a href="" class="ml-3"><i class="fab fa-google-plus-g fa-2x"></i></a>
     </div>
    </div>
  </nav>
     <!-- fin de navbar -->

      <!-- inicio categorias todo-->
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="d-none d-sm-block col-sm-3 ">
        <p class="idioma"><?php switch($numero12['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
        <a href="pelicula.php?titulo=<?php echo $numero12['titulo'] ?>">
          <img src="<?php echo $numero12['imagen'] ?>" alt="" class="img-fluid imgmedio" style="width: 100%; height: 50%;"></a>
          <a href="pelicula.php?titulo=<?php echo $numero11['titulo'] ?>">
            <img src="<?php echo $numero11['imagen'] ?>" alt="" class="img-fluid imgmedio" style="width: 100%; height: 50%;"></a>
      </div>
       <!--inicio categorias -->
      <div class="col-xs-12 col-sm-6 mt-5">
        <div class="row  ">
          <!-- inicio de la primera parte de categorias -->
          <div class="col-6">
            <div class="row ">
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th class="text-center bg-primary">Géneros</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=estrenos" style="color:white;">Estrenos</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=destacadas" style="color:white;">Destacadas</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=Ciencia-ficcion" style="color:white;">Ciencia ficción</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=Comedia" style="color:white;">Comedia</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=culto" style="color:white;">Culto</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=documental" style="color:white;">Documental</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=fantasia" style="color:white;">Fantasía</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=guerra" style="color:white;">Guerra</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=historia" style="color:white;">Historia</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=marvel" style="color:white;">Marvel</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=suspense" style="color:white;">Suspence</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=terror" style="color:white;">Terror</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=uncategorized" style="color:white;">Uncategorized</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=pelicula-de-la-television" style="color:white;">Película de la tv</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=thriller" style="color:white;">Thriller</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=western" style="color:white;">Western</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="catalogo.php" style="color:white;">Catálogo</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
           <!-- fin de la primera parte de categorias -->

           <!-- inicio de segunda parte de categorias -->
          <div class="col-6">
            <div class="row  ">
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th class="text-center bg-primary">Superpelis</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=proximos-estrenos" style="color:white;">Próximos Est</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=anime" style="color:white;">Anime</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=accion" style="color:white;">Acción</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=animacion" style="color:white;">Animación</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=aventura" style="color:white;">Aventura</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=coches" style="color:white;">Coches</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=crimen" style="color:white;">Crimen</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=drama" style="color:white;">Drama</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=familia" style="color:white;">Familia</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=foreign" style="color:white;">Foreign</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=hindu" style="color:white;">Hindú</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=infantil" style="color:white;">Infantil</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=misterio" style="color:white;">Misterio</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=navidad" style="color:white;">Navidad</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=romance" style="color:white;">Romance</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="category.php?genero=suspenso" style="color:white;">Suspenso</a></td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="catalogo.php" style="color:white;">--------</a></td>
                  </tr>  
                </tbody>
              </table>
            </div>
          </div>
            <!-- fin de segunda parte -->
        </div>
      </div>      
        <!-- fin de categorias -->
      <div class="d-none  d-sm-block col-sm-3">
     <p class="idioma"><?php switch($numero14['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
     <a href="pelicula.php?titulo=<?php echo $numero14['titulo'] ?>">
        <img src="<?php echo $numero14['imagen'] ?>" alt="" class="img-fluid imgmedio" style="width: 100%; height: 50%;">
      </a>
     <a href="pelicula.php?titulo=<?php echo $numero13['titulo'] ?>">
        <img src="<?php echo $numero13['imagen'] ?>" alt="" class="img-fluid imgmedio" style="width: 100%; height: 50%;">
    </a>
      </div>
    </div>
  </div>
    <!-- fin de categorias todo-->

    <!--inicio algunas pelis de interes parte baja-->
  <div class="container-fluid mt-5 mb-3">
    <h3 class="text-center">Podria interesarte</h3>
    <div class="row">
      <?php foreach($ejecucion7 as $dato): ?>   
      <div class="col-4 col-sm-3 col-md-2 p-0">
        <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
        <div class = "hovereffect">
          <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
            <img class=" img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
            <div class = "overlay">
              <h2> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?>  </h2>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach ?> 
    </div>
  </div>
     <!--fin algunas pelis de interes parte baja-->
      <!-- inicio footer pc-->
  <footer class="footer text-white d-none d-lg-block">
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-2">
            <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
          </div>
        </div>
      </div>
      <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series. <a href="contacto.html"> CONTACTO</a></p>
      <p>	 © 2018 SuperPelis</p>
      <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuentra almacenada en servidores externos.</p>
    </div>
  </footer>
   <!-- fin footer pc-->

    <!-- inicio footer tablet-->
  <footer class="footer2 text-white d-none d-sm-block d-lg-none">
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-2">
            <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
          </div>
        </div>
      </div>
      <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series.   <a href="contacto.html"> CONTACTO</a></p>
      <p>	 © 2018 SuperPelis</p>
      <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuentra almacenada en servidores externos.</p>
    </div>
  </footer>
    <!-- fin footer tablet-->

   <!-- inicio footer movil-->
  <footer class="footer3 text-white d-sm-none">
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-2">
            <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
            <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
          </div>
        </div>
      </div>
      <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series. <a href="contacto.html"> CONTACTO</a></p>
      <p>	 © 2018 SuperPelis</p>
      <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuentra almacenada en servidores externos.</p>
    </div>
  </footer>
   <!-- fin footer movil-->

   <!-- js -->
  <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
</body>
</html>