<?php
    include_once "conexion.php";
    require_once "zebra.php";

    $name = ($_GET['name']);
    $query = "SELECT * FROM datos WHERE titulo LIKE '%".$name."%' OR titulo2 LIKE '%".$name."%' OR anio LIKE '%".$name."%'";
    $res = $con->query($query);
    $num_registros = mysqli_num_rows($res);

    $resul_x_pagina = 24;

    $paginacion = new Zebra_Pagination();
    $paginacion->records($num_registros);
    $paginacion->records_per_page($resul_x_pagina);

    $consulta = "SELECT * FROM datos WHERE titulo LIKE '%".$name."%' OR titulo2 LIKE '%".$name."%' OR anio LIKE '%".$name."%' LIMIT " .(($paginacion->get_page() - 1) * $resul_x_pagina). "," .$resul_x_pagina;
    $result = $con->query($consulta);  
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
    <title>Resultados de: <?php echo $name; ?></title>
</head>
<body style="background: rgb(39, 37, 37)">
   <!-- inicio de navbar -->
<!-- aqui cambie todo en navbbar -->
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

     <!-- inicio de vista de peliculas -->
    <div class="container mt-5" id="a">
        <h4 class="d-none d-md-block ">Resultados de: <?php echo $name; ?>      <br>      Se encontraron <?php echo $num_registros ?> coincidencias</h4>
        <h5 class="d-md-none ">Resultados de:  <?php echo $name; ?>     <br>     Se encontraron <?php echo $num_registros ?> coincidencias</h5>
        <div class="row">
            <!--inicio esto para que llama esta pagina en caso de que consiga algo llame a esta parte de la pagina -->
            <?php if($num_registros>=1): ?>
            <?php foreach($result as $dato): ?> 
            <div class="col-4 col-sm-3 col-md-2 p-1">
                <p class="idioma"><?php switch($dato['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?></p>
                <div class = "hovereffect">
                    <a href="pelicula.php?titulo=<?php echo $dato['titulo'] ?>">
                        <img class=" img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                        <div class = "overlay">
                            <h2> <?php echo $dato['titulo'].'<br>'.'('.$dato['anio'].')'; ?> </h2>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
      <!-- fin de vista de peliculas -->

      <!--inicio de botones -->  
 
    <nav aria-label="page navigation example">
        <ul class="pagination justify-content-center mt-5">
            <li class="page-item" > <?php $paginacion->render(); ?></li>       
        </ul>
    </nav>
      <!-- fin de botones -->
                  <!--inicio esto para que llama esta pagina en caso de que consiga algo llame a esta parte de la pagina -->
                <?php endif ?>

      <!-- esto para que llama esta pagina en caso de que no consiga nada llame a esta parte de la pagina -->
    <?php if($num_registros<1): ?>
      <!--inicio de mensaje de error -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h4>Tenemos un problema</h4>
                <h5>No se encuentra esta película en nuestra base de datos</h5>
                <ol>
                    <li>Revise que este bien el nombre e intente de nuevo (intente en colocando el nombre en español o en ingles)</li>
                    <li>Si coloco bien el nombre y aun así no aparece, no se preocupe este problema
                        se soluciona así:
                    </li>
                </ol>
                <!--inicio formulario -->
                <form action="" class='form-group'>
                    <input type='text' name='nombre' id='nombre' placeholder='coloque aquí su nombre' class='form-control input-element'/>
                    <input type='text' name='email' id='email' placeholder='Correo electrónico' class='form-control input-element'/>
                    <input type='text' name='telefono' id='telefono' placeholder='Teléfono' class='form-control input-element'/>
                    <input type='text' name='pelicula' id='pelicula' placeholder='Nombre de la película' class='form-control input-element'/>
                    <button type='button' class='btn btn-primary btn-save form-control'>Enviar</button>
                </form>
                <!-- fin del formulario -->
                <h5>La película la tendremos en nuestra base de datos en menos de 24 horas, se le comunicara por correo o whatsapp lo mas pronto posible</h5>
                <p>Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series. </p>
            </div>
        </div>
    </div>

    <!-- fin de mensaje de error este  endif  va con el mensaje  -->
    <?php endif ?>

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
            <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series.   <a href="contacto.html"> CONTACTO</a></p>
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
            <p class=" text-white mt-3">Si tienes un problema, sugerencia, critica, lo que sea, infórmelo estamos dispuestos a mejorar para su mejor comodidad y ser su página preferida de películas y series.  <a href="contacto.html"> CONTACTO</a></p>
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
