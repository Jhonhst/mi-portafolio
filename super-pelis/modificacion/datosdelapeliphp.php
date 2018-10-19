<?php
$con=mysqli_connect("localhost","root","","peliculas") or die ("Problemas con la conexión a la base de datos");
$acentos = $con->query("SET NAMES 'utf8'");

$idiomas='';
if(isset( $_REQUEST['idiomas'])){
    $idiomas=implode(',',$_REQUEST['idiomas']);
}

mysqli_query($con,"insert into datos(imagen,imagenho,video,video2,video3,descarga,trailer,titulo,titulo2,anio,duracion,sinopsis,idioma) values 
('$_REQUEST[imagen]','$_REQUEST[imagenho]','$_REQUEST[video]','$_REQUEST[video2]','$_REQUEST[video3]','$_REQUEST[descarga]','$_REQUEST[trailer]','$_REQUEST[titulo]','$_REQUEST[titulo2]','$_REQUEST[anio]',$_REQUEST[duracion],'$_REQUEST[sinopsis]','$idiomas')")   
 or die (mysqli_error($con));
$id_insertado=mysqli_insert_id($con);

foreach($_REQUEST['opcion'] as $idcategoria){
    $consulta= "INSERT INTO relacion SET iddatos='$id_insertado', idcategorias='$idcategoria'";
   mysqli_query($con,$consulta);
}

mysqli_close($con);

echo  'la nueva pelicula se almaceno exitosamente';
echo '<a href="datosdelapeliphp.html.php">volver</a>';
?>