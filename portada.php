<?php
include_once 'conexion.php';

$sql="SELECT * from registros";
$ejecucion=mysqli_query($con,$sql);

//incluyo esta pagina para poder mostrar el titulo es caso de que entremos a un proyecto éste tenda el nombre de el al lado de el tululo que coloque como principal Jhon Sánchez
include 'traer.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jhon Sanchez <?php if(isset($title)){ echo $title;}?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab|Hind+Vadodara|Rajdhani" rel="stylesheet">
    
</head>
<body >
    <!-- inicio de menu tablets y pc -->
    <div class="container-fluid d-none d-md-block bordee menu-grande">
        <div class="row">
            <div class="col-3 text-center ">
                <p class="borde menus text-center"> 
                    <a href="index.php" class="munu_individual"> Proyectos </a>
                </p>
            </div>
            <div class="col-6 ">
                <p class="logo text-center ">Jhon Sánchez</p> 
                <p class="munu-descripcion text-right">Desarrollador Web Full Stack</p>
            </div>
            <div class="col-3 text-center">
                <p class="borde menus text-center"> 
                    <a href="sobre-mi.php" class="munu_individual"> Sobre mí </a> 
                </p>
            </div>
        </div>
    </div>
       <!-- fin  de menu tablets y pc -->

<!-- inicio de menu movil -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-movil d-md-none bordee">
        <button class="navbar-toggler boton-movil" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <p class="logo-movil text-center ">Jhon Sánchez</p>
            <p class="munu-descripcion-movil text-right">Desarrollador Web Full Stack</p>
        </a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link active " href="index.php" style="color:white">Proyectos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " href="sobre-mi.php" style="color:white">Sobre mí</a>
            </li>
          </ul>
        </div>
    </nav>
       <!-- fin de menu movil -->