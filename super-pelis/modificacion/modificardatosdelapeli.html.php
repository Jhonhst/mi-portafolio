<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> editar datos</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","peliculas") or die ("Problemas con la conexión a la base de datos");
$consulta="SELECT * FROM datos";
$listado=mysqli_query($con,$consulta);
?>
<ul>
<?php 
while ($informacion=mysqli_fetch_assoc($listado)){
    echo '<li>'.$informacion['titulo'].'<a href="modificardatosdelapeli.html.php?id='.$informacion['iddatos'].'">editar</a></li>';
}
?>
</ul>
    <h1> editar datos aqui solo salen los tados que tienen lo bueno son los checkbox que salen tambien tildados</h1>
    <form action="datosdelapeliphp.php" method="post">
<?php
if(isset($_GET['id'])){
    $iddatos=$_GET['id'];
    $consulta="SELECT * FROM datos WHERE iddatos='$iddatos'";
    $filas_datos=mysqli_query($con,$consulta);
    $informacion_datos=mysqli_fetch_assoc($filas_datos);
    // var_dump($informacion_datos);
    $idiomas= explode(',',$informacion_datos['idioma']);
//    $rta=in_array('espaniol',$idiomas);
//    var_dump($rta);

$consulta2="SELECT idcategorias FROM relacion WHERE iddatos='$iddatos'";
$resultados=mysqli_query($con,$consulta2);
$categorias=array();
while($c =mysqli_fetch_assoc($resultados)){
    $categorias[]=$c['idcategorias'];
}
// var_dump($categorias);
?>


   Url de la imagen:
   <input type="text" name="imagen" value="<?php echo $informacion_datos['imagen']; ?>"  required >
   <br> 
   Url del video:
   <input type="text" name="video" value="<?php echo $informacion_datos['video']; ?>" required>
   <br>
   titulo:
   <input type="text" name="titulo" value="<?php echo $informacion_datos['titulo']; ?>" required>
   <br> 
   Año de la pelicula:
   <input type="text" name="anio" value="<?php echo $informacion_datos['anio']; ?>" required>
   <br> 
   Duración:
   <input type="text" name="duracion" value="<?php echo $informacion_datos['duracion']; ?>" required>
   <br>  
   Sinopsis:
   <input type="text" name="sinopsis" value="<?php echo $informacion_datos['sinopsis']; ?>" required>
   <br>  
   Idioma:
   <label ><input type="checkbox" name="idiomas[]" value="espaniol" <?php if (in_array('espaniol',$idiomas)){ echo 'checked="checked"';} ?>>Español latino</label>
   <label ><input type="checkbox" name="idiomas[]" value="subespaniol" <?php if (in_array('subespaniol',$idiomas)){ echo 'checked="checked"';} ?>>sub español</label>

   <br>  
seleccione generos:
<br>  
    <?php

$con=mysqli_connect("localhost","root","","peliculas") or die ("Problemas con la conexión a la base de datos");

$registros=mysqli_query($con,"select idcategorias,genero from categorias")    or die (mysqli_error($con));

while($reg=mysqli_fetch_array($registros))
{
    // echo "<option value=\"".$reg['codigo']."\"> ".$reg['genero']."  </option>";
    echo "<label>";
    echo $reg['genero'];
    if(in_array($reg['idcategorias'],$categorias)){ 
    echo "<input type='checkbox' name='opcion[]' value=\"".$reg['idcategorias']."\" checked>";
    }
    else{
        echo "<input type='checkbox' name='opcion[]' value=\"".$reg['idcategorias']."\" >"; 
    }
    echo "</label>";
    echo "<br>";
}

    ?>
    <!-- //esto se supene que va dentro del checkbox pero no se como colocarlo dentro de hatml que esta dentro de php -->
<input type="checkbox" value="1"<?php if(in_array('1',$categorias)){ echo 'checked="checked"';} ?> name="opcion[]" >programcion
<br>
   <input type="submit" value="Confirmar">
</form>
<?php } ?>
</body>
</html>
<!-- if (in_array('$reg['idcategorias']',$categorias))
{echo 'checked="checked"';} -->