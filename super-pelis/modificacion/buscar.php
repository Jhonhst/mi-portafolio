<?php

include('../conexion.php');

$buscar = $_POST['buscar'];
if(!empty($buscar)) {//si el valor no esta vacio
  $query = "SELECT * FROM datos WHERE iddatos LIKE '$buscar' OR titulo LIKE '$buscar%'";
  $result = mysqli_query($con, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($con));
  }

   //de este array solo uso el titulo la imagenve y id
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'id' => $row['iddatos'],
        'imagenve' => $row['imagen'],
        'imagenho' => $row['imagenho'],
        'servidoruno' => $row['video'],
        'servidordos' => $row['video2'],
        'servidortres' => $row['video3'],
        'descarga' => $row['descarga'],
        'trailer' => $row['trailer'],
        'titulo' => $row['titulo'],
        'titulodos' => $row['titulo2'],
        'anio' => $row['anio'],
        'duracion' => $row['duracion'],
        'sinopsis' => $row['sinopsis'],
        'idioma' => $row['idioma']
    );
  }
  $jsonstring = json_encode($json);//asi lo convierto en un string en jquery con parse lo convierte en json
  echo $jsonstring;
}

?>