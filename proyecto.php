<?php
include 'portada.php'; 

include 'traer.php'; 
?>
<div class="cuerpo">
<div class="container ">
    <div class="row ">
        <div class="col-12">
            <p class="titulo-proyecto mt-3"><?php echo $reg['titulo'] ?></p>
            <p class="primer-parrafo  bordee col-12 "><?php echo $reg['primerpar'] ?></p>
        </div>
               <!--iinicio primer slider para que se vea de tablet en adelante-->
        <div class=" col-6 d-none d-md-block imagen-izquierda">
            <img src="img/<?php echo $reg['imgpctres'] ?>" class="img-fluid mt-2 " id="slider-izquierda" alt="">
        </div>

        <div class=" col-6 d-none d-md-block imagen-derecha">
            <img src="img/<?php echo $reg['imgpcdos'] ?>" class="img-fluid mt-2 " id="slider-derecha" alt="">
        </div>

        <div class=" offset-2 col-8 imagen-central d-none d-md-block">
            <img src="img/<?php echo $reg['imgpcuno'] ?>" class="img-fluid mt-2 " id="slider-centro" alt="">
        </div>
        <div class="fondo-slider d-none d-md-block bordee" >.</div>    
         <!--fin primer slider para que se vea de tablet en adelante -->    
    </div>
          
          <!--inicio primer slider para que se vea en movil -->
    <div id="carouselExampleIndicators" class="carousel slide d-md-none  slider" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/<?php echo $reg['imgpcuno'] ?>" alt="First slide">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/<?php echo $reg['imgpcdos'] ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/<?php echo $reg['imgpctres'] ?>" alt="Third slide">
        </div>
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
    <img src="img/parte-baja.png" class=" d-md-none parte-baja-primer" id="" alt="">
       <!--fin primer slider para que se vea en movil-->   


    <div class="row">
        <div class="col-12 mt-5">
            <p class="primer-parrafo  bordee col-12  "><?php echo $reg['segundopar'] ?></p>
        </div>
             <!-- inicio medio de la pagina  imagenes que se mostraran de tablet en adelante  -->
        
            <div class=" col-6  imagen-izquierda d-none d-md-block">
                <img src="img/<?php echo $reg['imgtablet'] ?>" class="img-fluid tablet-imagen mt-2 " id="tablet-imagen" alt="">
            </div>

            <div class=" col-6  imagen-derecha d-none d-md-block">
                <img src="img/<?php echo $reg['imgpcuno'] ?>" class="img-fluid  pc-imagen " id="pc-imagen" alt="">
            </div>

            <div class=" offset-2 col-8 imagen-central d-none d-md-block">
                <img src="img/<?php echo $reg['imgmovil'] ?>" class="img-fluid mt-2 movil-imagen" id="movil-imagen" alt="">
            </div>

            <div class="fondo-slider2 bordee d-none d-md-block" id="fondo-slider">.</div>
      
            <!-- fin medio de la pagina  imagenes que se mostraran de tablet en adelante  -->
             <!--inicio imagen para mostrar dispositivos, visible en movil -->
            <div class="  ">
                <img src="img/<?php echo $reg['imgtabletmovil'] ?>" class=" d-md-none parte-alta" id="table-y-movil" alt="">
                <img src="img/parte-baja.png" class=" d-md-none parte-baja" id="table-y-movil-fondo" alt="">
            </div>
             <!--inicio imagen para mostrar dispositivos, visible en movil -->
    </div>


       <div class="row">
        <div class="col-12 mt-5">
            <p class="primer-parrafo  bordee col-12 "><?php echo $reg['tercerpar'] ?></p>
        </div>


        <div class="col-12 col-lg-6">
            <img src="img/<?php echo $reg['imgaduno'] ?>" class="img-fluid mt-2 bordee " alt="">
            <img src="img/<?php echo $reg['imgaddos'] ?>" class="img-fluid mt-2 mb-2 bordee" alt="">
        </div>
        
        <div class="col-12 col-lg-6 ">
            <p class="primer-parrafo  bordee "><?php echo $reg['cuartopar'] ?></p>
            <p class="primer-parrafo  bordee "><?php echo $reg['quintopar'] ?></p>
        </div>
       </div>
       <div class="col-12 ">
            <p class="primer-parrafo  bordee col-12 ">Herramientas usadas: <br>
            <?php echo $reg['herramientas'] ?>
            </p>
        </div>

        <div class="col-12">
            <a class="btn visitar-web bordee col-12" href="<?php echo $reg['url'] ?>" id="visitar-web" type="boton">Ir al sitio Web 
                <i class="fas flecha fa-sign-in-alt "></i>
            </a>  

            <a class="btn  visitar-web bordee col-12 mt-2" href="index.php"  type="boton">Más trabajos</a>  
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>