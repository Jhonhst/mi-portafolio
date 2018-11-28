<!-- inicio del menu y portada -->
<?php include 'portada.php'; ?>
<!-- fin del menu y portada -->

       <!--inicio cuerpo de proyectos slider-->
    <div class="containerr bordee" id="slider">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

                <!-- este ciclo es por que para el eslider se debe crear un li de estos para que vean los cuadritos que indican en slider se encuenta  -->
              <?php foreach($ejecucion as $dato): ?> 
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $dato['id'] ?>" class="<?php echo $dato['id']== 1 ? 'active' : '' ?>"></li>
              <?php endforeach ?>

            </ol>
            <div class="carousel-inner">
                
            <?php foreach($ejecucion as $dato): ?> 
              <div class="carousel-item <?php echo $dato['id']== 1 ? 'active' : '' ?>">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <img class="d-block w-100 " src="<?php echo $dato['imgpf'] ?>" alt="First slide">
                    </div>
                    <div class="col-12 col-md-3 informacion-proyecto">
                        <p class="texto-galeria"><?php echo $dato['titulo'] ?></p>
                        <p class="text-center"><?php echo $dato['descripcion'] ?></p>
                        <a class="btn btn-danger boton-slider" href="proyecto.php?title=<?php echo $dato['titulo'] ?>"  type="boton">Accede</a>
                    </div>  
                </div>
              </div>
              <?php endforeach ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
       <!--fin cuerpo de proyectos slider-->

         <!--inicio cuerpo de proyectos galeria-->
         <!-- para los tres de la parte superios -->
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <?php foreach($ejecucion as $dato): ?> 
            <div class="col-12 col-md-6 col-lg-4 mt-3 fondo-galerias bordee">   

                <p class="texto-galeria"><?php echo $dato['titulo'] ?><span><i id="fas<?php echo $dato['id'] ?>" class="fas fa-bars fass"></i></span></p>

                <img src="<?php echo $dato['imgpf'] ?>" class="img-fluid imagen-galeria bordee" alt="" id="imagen-galeria<?php echo $dato['id'] ?>">

                <p class="descripcion-proyecto text-center" id="descripcion-proyecto<?php echo $dato['id'] ?>"><?php echo $dato['descripcion'] ?></p>

                <a class="btn btn-danger boton-galeria" href="proyecto.php?title=<?php echo $dato['titulo'] ?>" id="boton-galeria<?php echo $dato['id'] ?>" type="button">Accede</a>
            </div>
            <?php endforeach ?>

        </div>
    </div>
     <!-- para los dos de la parte inferior -->
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <?php foreach($ejecucion_dos as $dato): ?> 
            <div class="col-12 col-md-6 col-lg-4  mt-3 ml-lg-5 mb-lg-5 fondo-galerias bordee">   

                <p class="texto-galeria"><?php echo $dato['titulo'] ?><span><i id="fas<?php echo $dato['id'] ?>" class="fas fa-bars fass"></i></span></p>

                <img src="<?php echo $dato['imgpf'] ?>" class="img-fluid imagen-galeria bordee" alt="" id="imagen-galeria<?php echo $dato['id'] ?>">

                <p class="descripcion-proyecto text-center" id="descripcion-proyecto<?php echo $dato['id'] ?>"><?php echo $dato['descripcion'] ?></p>

                <a class="btn btn-danger boton-galeria" href="proyecto.php?title=<?php echo $dato['titulo'] ?>" id="boton-galeria<?php echo $dato['id'] ?>" type="button">Accede</a>
            </div>
            <?php endforeach ?>

        </div>
    </div>
         <!--fin cuerpo de proyectos galeria-->

<!-- inicio del footer -->
<?php  include 'footer.php'?>
<!-- fin del footer -->