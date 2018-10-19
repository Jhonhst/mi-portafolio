<?php

    $con=mysqli_connect("localhost","root","","peliculas") or die ("Problemas con la conexión a la base de datos");
    mysqli_query($con,"insert into categorias(genero) values ('$_REQUEST[genero]')") or die (mysqli_error($con));
    mysqli_close($con);

    echo "El nuevo género se almacenó";
?>