<?php 
  include_once 'conexion.php';
  include_once 'llamadapelicula.php';
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
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="icon" href="img/superpelisicon.ico">
  <title>pelis</title>
</head>
<body   style="background: rgb(39, 37, 37)">

    <!-- aqui llega el boton de inicio que esta al final en footer a casi en el footer -->
  <div id="inicio"></div>
    <!-- aqui llega el boton de inicio que esta al final en footer a casi en el footer -->

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

   <!--inicio primera vista con el slider -->
  <div class="container-fluid mt-4">
    <div class="row "> 
       <!-- inicio de peliculas de los lados  -->
      <div class="d-none d-xl-block  col-xl-3 pl-3 pr-0  ml-0 mr-0"> 
        <p class="idioma"><?php switch($numero1['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
        <a href="pelicula.php?titulo=<?php echo $numero1['titulo'] ?>">
          <img src="<?php echo $numero1['imagenho'] ?>" alt="" class="imglados imgizq img-fluid">
        </a>
        <a href="pelicula.php?titulo=<?php echo $numero2['titulo'] ?>">
          <img src="<?php echo $numero2['imagenho'] ?>" alt="" class="imglados2 imgizq img-fluid">
        </a>
      </div>
        <!-- fin de peliculas de lo lados -->
       <!-- de aqui esmpieza el slider -->
      <div class=" col-xs-12 col-md-8 col-lg-8  col-xl-6 p-0 pl-0 pr-0 ml-0 mr-0 mt-2 eslider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>                         
          </ol>
          <div class="carousel-inner ">
              <!-- inicio del uno -->
            <div class="carousel-item active">
              <a href="pelicula.php?titulo=<?php echo $numero3['titulo'] ?>">
                <img class="first-slide img-fluid imgmedio" src="<?php echo $numero3['imagenho'] ?>" alt="First slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 class="d-none d-md-block"><?php echo $numero3['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero3['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div> 
                </div>
              </a>
            </div>
              <!-- fin del uno -->
              <!-- inicio del dos -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero4['titulo'] ?>">
                <img class="second-slide img-fluid imgmedio" src="<?php echo $numero4['imagenho'] ?>" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 class="d-none d-md-block"><?php echo $numero4['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero4['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div>
             <!-- fin del dos -->
              <!-- inicio del tres -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero5['titulo'] ?>">
                <img class="third-slide img-fluid imgmedio" src="<?php echo $numero5['imagenho'] ?>" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1 class="d-none d-md-block"><?php echo $numero5['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero5['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div>
             <!-- fin del tres -->
             <!-- inicio del cuarto -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero6['titulo'] ?>">
                <img class="fourth-slide img-fluid imgmedio" src="<?php echo $numero6['imagenho'] ?>" alt="fourth slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 class="d-none d-md-block"><?php echo $numero6['titulo'] ?></h1> 
                    <p class="idioma"><?php switch($numero6['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>   
                  </div>
                </div>
              </a>
            </div>
             <!-- fin del cuarto -->
             <!-- inicio del quiento -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $listado7['titulo'] ?>">
                <img class="fifth-slide img-fluid imgmedio" src="<?php echo $listado7['imagenho'] ?>" alt="fifth slide">
                <div class="container">
                  <div class="carousel-caption ">
                    <h1 class="d-none d-md-block"><?php echo $numero7['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero7['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>   
                  </div>
                </div>
              </a>
            </div>
              <!-- fin del quinto -->
              <!-- inicio del sexto -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero8['titulo'] ?>">
                <img class="sixth-slide img-fluid imgmedio" src="<?php echo $numero8['imagenho'] ?>" alt="sixth slide">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1 class="d-none d-md-block"><?php echo $numero8['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero8['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div> 
             <!-- fin del sexto -->
             <!-- inicio del septimo -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero9['titulo'] ?>">
                <img class="seventh-slide img-fluid imgmedio" src="<?php echo $numero9['imagenho'] ?>" alt="seventh slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 class="d-none d-md-block"><?php echo $numero9['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero9['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div>
              <!-- fin del septimo -->
              <!-- inicio del octavo -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero10['titulo'] ?>">
                <img class="eighth-slide img-fluid imgmedio" src="<?php echo $listado10['imagenho'] ?>" alt="eighth slide">
                <div class="container">
                  <div class="carousel-caption ">
                    <h1 class="d-none d-md-block"><?php echo $numero10['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero10['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div> 
              <!-- fin del octavo -->
              <!-- inicio del noveno -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero11['titulo'] ?>">
                <img class="nineth-slide img-fluid imgmedio" src="<?php echo $numero11['imagenho'] ?>" alt="nineth slide">
                <div class="container">
                  <div class="carousel-caption text-right">
                    <h1 class="d-none d-md-block"><?php echo $numero11['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero11['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div> 
             <!-- fin del noveno -->
             <!-- inicio del decimo -->
            <div class="carousel-item">
              <a href="pelicula.php?titulo=<?php echo $numero12['titulo'] ?>">
                <img class="tenth-slide img-fluid imgmedio" src="<?php echo $numero12['imagenho'] ?>" alt="tenth slide">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1 class="d-none d-md-block"><?php echo $numero12['titulo'] ?></h1>
                    <p class="idioma"><?php switch($numero12['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
                  </div>
                </div>
              </a>
            </div> 
              <!-- fin del decimo --> 
          </div>
            <!-- inicio de bonotenes -->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
            <!-- fin de botones -->
        </div>
      </div>
        <!-- aqui termina el eslider son 10 images -->

        <!-- inicio imagens de los lados derecha -->
      <div class="d-none d-md-block col-md-4 col-lg-4 col-xl-3 pl-0 mr-0 ml-0"> 
        <p class="idioma"><?php switch($numero13['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p> 
        <a href="pelicula.php?titulo=<?php echo $numero13['titulo'] ?>">
          <img src="<?php echo $numero13['imagenho'] ?>" alt="" class="imglados img-fluid">
        </a>
        <a href="pelicula.php?titulo=<?php echo $numero14['titulo'] ?>">
          <img src="<?php echo $numero14['imagenho'] ?>" alt="" class="imglados2 img-fluid">
        </a>
      </div>
         <!-- fin imagens de los lados derecha -->
    </div>
  </div>
   <!--fin primera vista con el slider -->

   <!-- inicio de segunda vista   -->
   <!--inicio imagenes al lado de las categorias -->
  <div class="container-fluid">
    <div class="row ">  
      <div class="col-xs-12 col-xl-9 mt-3 ">
         <!-- parte de extrenos -->
        <a href="category.php?genero=estrenos" class="titulos"><h4 class="d-md-none text-center">Estrenos <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
        <a href="category.php?genero=estrenos" class="titulos">  <h2 class="d-none d-md-block text-center ">Estrenos <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
        <div class="row  ">
          <?php foreach($ejecucion7 as $dato): ?> 
          <div class="col-4 col-sm-3 col-md-2 p-0 contenedorr">
            <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
            <div class = "hovereffect">
              <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
                <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                <div class = "overlay">
                  <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
         <!-- final de extrenos -->

          <!-- parte de ciencia ficcion -->
        <a href="category.php?genero=ciencia-ficcion" class="titulos"><h4 class="d-md-none text-center">Ciencia ficción <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
        <a href="category.php?genero=ciencia-ficcion" class="titulos">  <h2 class="d-none d-md-block text-center ">Ciencia ficción <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
        <div class="row">
          <?php foreach($ejecucion8 as $dato): ?> 
          <div class="col-4 col-sm-3 col-md-2 p-0">
            <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
            <div class = "hovereffect">
              <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
                <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                <div class = "overlay">
                  <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach ?> 
        </div>
          <!-- final deciencia ficcion  -->

         <!-- inicio de accion  -->
        <a href="category.php?genero=accion" class="titulos"><h4 class="d-md-none text-center">Acción <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
        <a href="category.php?genero=accion" class="titulos">  <h2 class="d-none d-md-block text-center ">Acción <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
        <div class="row">        
          <?php foreach($ejecucion9 as $dato): ?> 
          <div class="col-4 col-sm-3 col-md-2 p-0">
            <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
            <div class = "hovereffect">
              <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
                <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                <div class = "overlay">
                  <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
          <!-- final de accion  -->

         <!-- las que vienen si se ven pero despues de las tablas esto es para cuando esta en lg -->
        <div class="d-xl-none">

         <!-- inicio de comedia -->
        <a href="category.php?genero=comedia" class="titulos"><h4 class="d-md-none text-center">Comedia <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
        <a href="category.php?genero=comedia" class="titulos">  <h2 class="d-none d-md-block text-center ">Comedia <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
        <div class="row  ">
          <?php foreach($ejecucion10 as $dato): ?> 
          <div class="col-4 col-sm-3 col-md-2 p-0">
            <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
            <div class = "hovereffect">
              <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
                <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                <div class = "overlay">
                  <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
          <!-- final de comedia-->

          <!-- parte de terror -->
        <a href="category.php?genero=terror" class="titulos"><h4 class="d-md-none text-center">Terror <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
        <a href="category.php?genero=terror" class="titulos">  <h2 class="d-none d-md-block text-center ">Terror <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
        <div class="row">
          <?php foreach($ejecucion11 as $dato): ?> 
          <div class="col-4 col-sm-3 col-md-2 p-0">
            <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
            <div class = "hovereffect">
              <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
                <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                <div class = "overlay">
                  <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
          <!-- final de terror-->
      </div>
    </div>
      <!-- fin imagenes al lado de las categorias -->

      <!--inicio categorias -->
    <div class="col-xs-12 col-xl-3 mt-0">
       <div class="row">
          <!-- inicio de la primera parte de categorias -->
        <div class="col-6">
          <div class="row">       
            <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th class="text-center bg-info">Géneros</th>
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
                  <th class="text-center bg-info">Superpelis</th>
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
          <!-- fin de segunda vista   -->
   </div>
  </div> 

    <!-- inicio de tercera vista -->

  <div class="col-12 d-none d-xl-block">
      <!-- inicio de comedia -->
    <a href="category.php?genero=comedia" class="titulos"><h4 class="d-md-none text-center">Comedia <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
    <a href="category.php?genero=comedia" class="titulos">  <h2 class="d-none d-md-block text-center ">Comedia <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
    <div class="row ">
      <?php foreach($ejecucion10 as $dato): ?> 
      <div class="col-4 col-sm-3 col-md-2 p-0">
        <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
        <div class = "hovereffect">
          <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
            <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
            <div class = "overlay">
              <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
      <!-- final de comedia-->

     <!-- parte de terror -->
    <a href="category.php?genero=terror" class="titulos"><h4 class="d-md-none text-center">Terror <span class="d-md-none text-right float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h4>
    <a href="category.php?genero=terror" class="titulos">  <h2 class="d-none d-md-block text-center ">Terror <span class="d-none d-md-block float-right mr-4 titulos"> ver <i class="far fa-plus-square"></i></span></a></h2>
    <div class="row  ">
      <?php foreach($ejecucion11 as $dato): ?> 
      <div class="col-4 col-sm-3 col-md-2 p-0">
        <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
        <div class = "hovereffect">
          <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
            <img class="img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
            <div class = "overlay">
              <h4> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?></h4>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
      <!-- final de terror -->
  </div>
      
  <a href="#inicio"> <div class="triangulo down ml-5"><div></div></div></a>
  <a href="catalogo.php" class="myButton float-right p-2 mr-5 mb-5">Ver Catálogo</a><br><br><br>

   <!-- inicio footer pc--> 
  <footer class="footer text-white d-none d-lg-block ">
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-2 ">
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-0 p-4 bg-dark">
          <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
        </div>
      </div>
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
      <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series.  <a href="contacto.html"> CONTACTO</a></p>
      <p>	 © 2018 SuperPelis</p>
      <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuentra almacenada en servidores externos.</p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12  mt-4 pt-5 pb-5 bg-dark">
          <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
        </div>
      </div>
    </div>
  </footer>
   <!-- fin footer tablet-->

   <!-- inicio footer movil-->
  <footer class="footer3 text-white d-sm-none">
    <div class="container">      
      <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series.  <a href="contacto.html"> CONTACTO</a></p>
      <p>	 © 2018 SuperPelis</p>
      <p>No se reproduce ni se almacenan archivos en nuestros servidores, El contenido almacenado en esta web se encuentra almacenada en servidores externos.</p>
    </div>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-12 mt-2 ">
          <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-sm-none mt-4 pt-5 pb-5 bg-dark">
          <a href="#" class=""><i class="fab fa-facebook-f fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-youtube fa-2x"></i></a>
          <a href="" class="ml-1"><i class="fab fa-google-plus-g fa-2x"></i></a>
        </div>
      </div>
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