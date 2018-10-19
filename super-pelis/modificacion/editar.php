<?php

  include('../conexion.php');

if(isset($_POST['id'])) {
 
  $id = $_POST['id'];
  $imagenve = $_POST['imagenve'];
  $imagenho = $_POST['imagenho'];
  $servidoruno = $_POST['servidoruno'];
  $servidordos = $_POST['servidordos'];
  $servidortres = $_POST['servidortres'];
  $descarga = $_POST['descarga'];
  $trailer = $_POST['trailer'];
  $titulo = $_POST['titulo'];
  $titulodos = $_POST['titulodos'];
  $anio = $_POST['anio'];
  $duracion = $_POST['duracion'];
  $sinopsis = $_POST['sinopsis'];
  $query = "UPDATE datos SET imagen = '$imagenve', imagenho = '$imagenho', video = '$servidoruno', video2 = '$servidordos', video3 = '$servidortres', descarga = '$descarga', trailer = '$trailer', titulo = '$titulo', titulo2 = '$titulodos', anio = '$anio', duracion = '$duracion', sinopsis = '$sinopsis' WHERE iddatos = '$id'";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "se editaron";  

}

?>