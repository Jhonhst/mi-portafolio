<?php

// elimina los datos de inversión y gastos 

// include('conexion.php');

// class BaseDatos extends SQLite3{

//   function __construct()
//   {
//      $this->open('administracion.db'); 
//   }
// }

// $con = new BaseDatos;

$con = new SQLite3('administracion.db');

if(isset($_POST['id_inversion'])) {
  $id = $_POST['id_inversion'];
  $query = "DELETE FROM inversion WHERE id = $id"; 
  $result = $con->query($query);

  if (!$result) {
    die('Error al eliminar.');
  }
  echo "Se ha eliminado con éxito, Recuerde que si ya registro la venta del día, al hacer una eliminación se debe ir a venta y actualizarla.";
}

if(isset($_POST['id_gastos'])) {
    $id = $_POST['id_gastos'];
    $query = "DELETE FROM gastos WHERE id = $id"; 
    $result = $con->query($query);
  
    if (!$result) {
      die('Error al eliminar.');
    }
    echo "Se ha eliminado con éxito, Recuerde que si ya registro la venta del día, al hacer una eliminación se debe ir a venta y actualizarla.";  
  
  }