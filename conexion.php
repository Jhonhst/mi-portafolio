<?php

$con=mysqli_connect("localhost","root","","portafolio") or die ("Problemas con la conexión a la base de datos");

$acentos = $con->query("SET NAMES 'utf8'");

// echo 'conectado';