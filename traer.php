<?php

if(isset($_GET['title'])){
    $titulo=$_GET['title'];
    $consulta="SELECT * FROM registros WHERE titulo='$titulo'";
    $filas_datos=mysqli_query($con,$consulta);
    $reg=mysqli_fetch_assoc($filas_datos);

    $title = $reg['titulo'];

}