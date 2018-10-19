
<?php
include_once "conexion.php";

//esto esta en anime debo cambiarla a esxtrenos

//tube que hacer una selecion para cada imagen debido a que si creaba u siclo no me lo colacaba como yo queria
//limit llama des el 0 a un registro desde el 1 a un registro y como esta de forma descendente el ultimo es el primero

// esto es para de arriba las que van horizontal
 $consulta5="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 0,1 ";
 $ejecucion=mysqli_query($con,$consulta5);
 $listado6=mysqli_fetch_assoc($ejecucion);

 $sql1="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 0,1 ";
 $ejecucion1=mysqli_query($con,$sql1);
 $numero1=mysqli_fetch_assoc($ejecucion1);

 $sql2="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 1,1 ";
 $ejecucion2=mysqli_query($con,$sql2);
 $numero2=mysqli_fetch_assoc($ejecucion2);

 $sql3="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 2,1 ";
 $ejecucion3=mysqli_query($con,$sql3);
 $numero3=mysqli_fetch_assoc($ejecucion3);

 $sql4="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 3,1 ";
 $ejecucion4=mysqli_query($con,$sql4);
 $numero4=mysqli_fetch_assoc($ejecucion4);

 $sql5="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 4,1 ";
 $ejecucion5=mysqli_query($con,$sql5);
 $numero5=mysqli_fetch_assoc($ejecucion5);

 $sql6="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 5,1 ";
 $ejecucion6=mysqli_query($con,$sql6);
 $numero6=mysqli_fetch_assoc($ejecucion6);

 $sql7="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 6,1 ";
 $ejecucion7=mysqli_query($con,$sql7);
 $numero7=mysqli_fetch_assoc($ejecucion7);

 $sql8="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 7,1 ";
 $ejecucion8=mysqli_query($con,$sql8);
 $numero8=mysqli_fetch_assoc($ejecucion8);

 $sql9="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 8,1 ";
 $ejecucion9=mysqli_query($con,$sql9);
 $numero9=mysqli_fetch_assoc($ejecucion9);

 $sql10="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 9,1 ";
 $ejecucion10=mysqli_query($con,$sql10);
 $numero10=mysqli_fetch_assoc($ejecucion10);

 $sql11="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 10,1 ";
 $ejecucion11=mysqli_query($con,$sql11);
 $numero11=mysqli_fetch_assoc($ejecucion11);

 $sql12="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 11,1 ";
 $ejecucion12=mysqli_query($con,$sql12);
 $numero12=mysqli_fetch_assoc($ejecucion12);

 $sql13="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 12,1 ";
 $ejecucion13=mysqli_query($con,$sql13);
 $numero13=mysqli_fetch_assoc($ejecucion13);

 $sql14="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 13,1 ";
 $ejecucion14=mysqli_query($con,$sql14);
 $numero14=mysqli_fetch_assoc($ejecucion14);



//  esto es para las categorias que salen en portada con unas pelis
 //extrenos
 $consulta7="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='estrenos' ORDER BY rd DESC limit 12 ";
 $ejecucion7=mysqli_query($con,$consulta7);
 $listado7=mysqli_fetch_assoc($ejecucion7);

 //Ciencia ficcion
 $consulta8="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='ciencia-ficción' ORDER BY rd DESC limit 12 ";
 $ejecucion8=mysqli_query($con,$consulta8);
 $listado8=mysqli_fetch_assoc($ejecucion8);

 //accion
 $consulta9="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='Accion' ORDER BY rd DESC limit 12 ";
 $ejecucion9=mysqli_query($con,$consulta9);
 $listado9=mysqli_fetch_assoc($ejecucion9);

 //comedia
 $consulta10="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='Comedia' ORDER BY rd DESC limit 12 ";
 $ejecucion10=mysqli_query($con,$consulta10);
 $listado10=mysqli_fetch_assoc($ejecucion10);

 //terror
 $consulta11="SELECT datos.iddatos AS id, imagen,imagenho,video,titulo,titulo2,anio,duracion,sinopsis,idioma,relacion.iddatos AS rd,relacion.idcategorias AS rc,categorias.idcategorias AS ic,genero FROM datos AS datos JOIN relacion AS relacion  ON datos.iddatos=relacion.iddatos  JOIN categorias AS categorias ON relacion.idcategorias=categorias.idcategorias where  genero='terror' ORDER BY rd DESC limit 12 ";
 $ejecucion11=mysqli_query($con,$consulta11);
 $listado11=mysqli_fetch_assoc($ejecucion11);
