<?php 
  // conecion
  include_once "conexion.php";
  // estos fue para llamar de la tabla datos los datos
  // dependiendo el id que llegue es que la base datos envia la informacion
  if(isset($_GET['titulo'])){
    $titulo=$_GET['titulo'];
    $consulta1="SELECT * FROM datos WHERE titulo='$titulo'";
    $filas_datos1=mysqli_query($con,$consulta1);
    $reg1=mysqli_fetch_assoc($filas_datos1);

    $iddatos=$reg1['iddatos'];
    // echo $iddatos;
    $consulta="SELECT * FROM datos WHERE iddatos='$iddatos'";
    $filas_datos=mysqli_query($con,$consulta);
    $reg=mysqli_fetch_assoc($filas_datos);
   
    // esto fue para llamar las categorias esto es un pedaso la otra parte esta en peliculas.php con un while
    $consulta2="SELECT relacion.idcategorias as rc,genero FROM relacion join categorias on relacion.idcategorias=categorias.idcategorias WHERE iddatos='$iddatos'";
    $resultados=mysqli_query($con,$consulta2);
    // while($rege=mysqli_fetch_array($resultados)){
    //  $rege['genero']; 
    //             }
    //esto lo mobi a la pagina de peliculas para que se viera si no no sale 
 
  }
