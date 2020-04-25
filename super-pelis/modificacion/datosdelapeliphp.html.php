<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>
    .body{
        color:rgb(255, 255, 255);
        background: rgb(39, 37, 37);
    }
    </style>

    <title> subir datos de la peli</title>

</head>
<body class="body">

    <center class="col-6">
        <form class="form mt-5" action="" method="get">
            <label class="" for="id_movie">id de la pelicula</label>
            <input class="form-control" type="text" name="id_movie">
            <button class="btn btn-success" type="submit">enviar</button>
        </form>
    </center>
        
<?php
    if(isset($_GET['id_movie'])){
        $direccion = $_GET['id_movie'];

        // manda los datos
        $url = "https://api.themoviedb.org/3/movie/".$direccion."?api_key=&language=es";//optener mayoria de datos
        $json = file_get_contents($url);//aqui llama los datos
        $datos = json_decode($json,true);//aqui me decodifica el json
    
        // manda las imagenes
        $urlimg = "https://api.themoviedb.org/3/movie/".$direccion."/images?api_key=";//para optener las imagenes
        $jsonimg = file_get_contents($urlimg);//aqui llama los datos
        $datosimg = json_decode($jsonimg,true);//aqui me decodifica el json

        // manda el trailer
        $urltrailer = "https://api.themoviedb.org/3/movie/".$direccion."/videos?api_key=&language=es";//para optener las imagenes
        $jsontrailer = file_get_contents($urltrailer);//aqui llama los datos
        $datostrailer = json_decode($jsontrailer,true);//aqui me decodifica el json



        $imagenv = "https://image.tmdb.org/t/p/original".$datosimg['posters'][0]['file_path'];
        $imagenh = "https://image.tmdb.org/t/p/original".$datosimg['backdrops'][0]['file_path'];
        $trailer = $datostrailer['results'][0]['key'];
        $titulo = $datos['title'];
        $titulo_orinal = $datos['original_title'];
        $anio = $datos['release_date'];
        $duracion = $datos['runtime'];
        $sinopsis = $datos['overview'];
        $generos = $datos['genres'];

       


    // echo $imagenv;
    // echo '<br>';
    // echo $imagenh;
    // echo '<br>';
    // echo $titulo;
    // echo '<br>';
    // echo $titulo_orinal;
    // echo '<br>';
    // echo $anio;
    // echo '<br>';
    // echo $duracion;
    // echo '<br>';
    //echo $sinopsis;
    // echo '<br>';
    // echo $trailer;
    // echo '<br>';
    // foreach($generos as $value){//para optener el array de otro array
    //     echo $value['name'].'<br>';
    // }
  
    }
?>


<h1 class="text-center "> subir datos de la peli</h1>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="datosdelapeliphp.php" method="post" class="form-group" >

                Url de la imagen:
                <input type="text" class="form-control" name="imagen"  value="<?php echo $imagenv ?>" ><br> 

                Url de la imagen horizontal:
                <input type="text" class="form-control" name="imagenho" value="<?php echo $imagenh ?>"><br> 

                servidor openload:
                <input type="text" class="form-control" name="video" value="https://www.youtube.com/embed/9CO6Ta3xfUA"><br>

                servidor strinmanfo:
                <input type="text" class="form-control" name="video2" value="https://www.youtube.com/embed/sWtQqhYcK1Q"><br>

                servido 3:
                <input type="text" class="form-control" name="video3" value="https://www.youtube.com/embed/VOew9nnVbwI"><br>

                link de descarga:
                <input type="text" class="form-control" name="descarga" value="<?php  ?>"><br>

                Url del trailer:
                <input type="text" class="form-control" name="trailer" value="<?php echo $trailer ?>"><br>

                titulo es español y el que va en el link:
                <input type="text" class="form-control" name="titulo" value="<?php echo $titulo ?>"><br> 

                titulo en ingles se tiene:
                <input type="text" class="form-control" name="titulo2" value="<?php echo $titulo_orinal ?>"><br>

                Año de la pelicula:
                <input type="text" class="form-control" name="anio" value="<?php echo $anio ?>"><br> 

                Duración:
                <input type="text" class="form-control" name="duracion" value="<?php echo $duracion ?>"><br> 

                Idioma:
                <label ><input class="form-control" checked type="checkbox" name="idiomas[]" value="espaniol">||Español latino  </label>
                <label ><input class="form-control" type="checkbox" name="idiomas[]" value="subespaniol">||sub español  </label>
                <label ><input class="form-control" type="checkbox" name="idiomas[]" value="espanioles">||español  </label><br> 

                Sinopsis:
                <textarea class="form-control" name="sinopsis" id="" cols="80" rows="5" value=""><?php echo $sinopsis ?></textarea><br>   
                  
                <input class="btn btn-danger" type="submit" value="Confirmar">
            
        </div>

        <div class="col-4">
            <p> 
            <?php  
            foreach($generos as $value){
                echo $value['name'].'<br>';
            } 
            ?>
            </p>

            <h4>seleccione generos:</h4>
            <br>   
    <?php

$con=mysqli_connect("localhost","root","","peliculas") or die ("Problemas con la conexión a la base de datos");
$acentos = $con->query("SET NAMES 'utf8'");

$registros=mysqli_query($con,"select idcategorias,genero from categorias")    or die (mysqli_error($con));

while($reg=mysqli_fetch_array($registros))
{
    // echo "<option value=\"".$reg['codigo']."\"> ".$reg['genero']."  </option>";
    echo "<label>";
    echo $reg['genero'];
    echo "<input type='checkbox' name='opcion[]' value=\"".$reg['idcategorias']."\">";
    echo "</label>";
    echo "<br>";
}
    ?>

<br>
</form>
</body>
</html>
<!-- Acción:
<input type="checkbox" name="accion" value="1">
animacion:
<input type="checkbox" name="accion" value="2">
terror:
<input type="checkbox" name="accion" value="3">
marvel
<input type="checkbox" name="accion" value="4"> -->
