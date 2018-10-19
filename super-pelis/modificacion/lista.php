<?php

  include('../conexion.php');

  $query = "SELECT * from datos";
  $result = mysqli_query($con, $query);
  
  if (!$result) {
    die('Query Failed.');
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
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>