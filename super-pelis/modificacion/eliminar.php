<?php

include('../conexion.php');

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM datos WHERE iddatos = $id"; 
  $result = mysqli_query($con, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Se elimino exitosamente";  

}

?>