<?php

include('../conexion.php');

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($con, $_POST['id']);
  $query = "SELECT * from datos WHERE iddatos = {$id}";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die('Query Failed.');
  }

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
//   como esto es un array le debo especificar la posicion como es un solo registro por eso coloco [0]
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>