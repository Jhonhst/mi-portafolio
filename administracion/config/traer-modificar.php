<?php

// este archivo se encarga de traer los datos para que sean visible a la hora de modificar y si, se hace, alguna modificación este archivo también se encarga de las modificaciones en inversión, gastos y venta

//modificaciones
// include('conexion.php');
// class BaseDatos extends SQLite3{

//   function __construct()
//   {
//      $this->open('administracion.db'); 
//   }
// }

// $con = new BaseDatos;

$con = new SQLite3('administracion.db');

// trae los datos de inversión
if(isset($_POST['id_inversion'])) {
    $id = $_POST['id_inversion'];
    $query = "SELECT * from inversion WHERE id = {$id}";
    $result = $con->query($query);
    if (!$result) {
      die('Query Failed.');
    }
  
    $json = array();
    while($row = $result->fetchArray()) {
      $json[] = array(
        'id_inv' => $row['id'],
        'fecha_inv' => $row['fecha'],
        'nombre_inv' => $row['nombre'],
        'valor_inv' => $row['valor']
      );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}
// trae los datos de gastos
if(isset($_POST['id_gastos'])) {
    $id = $_POST['id_gastos'];
    $query = "SELECT * from gastos WHERE id = {$id}";
    $result = $con->query($query);
    if (!$result) {
      die('Query Failed.');
    }
  
    $json = array();
    while($row = $result->fetchArray()) {
      $json[] = array(
        'id_gastos' => $row['id'],
        'fecha_gastos' => $row['fecha'],
        'nombre_gastos' => $row['nombre'],
        'valor_gastos' => $row['valor']
      );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

//realiza la modificacion a inversión
if(isset($_POST['id_inv'])) {
    $nombre_inv = $_POST['nombre_inv']; 

    $valor_inv = $_POST['valor_inv'];
    $valor_inv = str_replace( ".", "" , $valor_inv);//para eliminar los puntos

    $id_inv = $_POST['id_inv'];

    $query = "UPDATE inversion SET nombre = '$nombre_inv', valor = '$valor_inv' WHERE id = '$id_inv'";
    $result = $con->query($query);
  
    if (!$result) {
      die('No se pudo modificar.');
    }
    echo "Se ha modificado exitosamente, Recuerde que si ya registro la venta del día, al hacer una modificación se debe ir a venta y actualizarla.";  
  
  }

  //realiza la modificacion a gastos
  if(isset($_POST['id_gastoss'])) {
    $nombre_gastos = $_POST['nombre_gastoss']; 

    $valor_gastos = $_POST['valor_gastoss'];
    $valor_gastos = str_replace( ".", "" , $valor_gastos);

    $id_gastos = $_POST['id_gastoss'];

    $query = "UPDATE gastos SET nombre = '$nombre_gastos', valor = '$valor_gastos' WHERE id = '$id_gastos'";
    $result = $con->query($query);
  
    if (!$result) {
      die('No se pudo modificar.');
    }
    echo "Se ha modificado exitosamente, Recuerde que si ya registro la venta del día, al hacer una modificación se debe ir a venta y actualizarla.";  
  
  }

  // hace la modificacion a venta, no traigo los datos por que ya estaran presente sin la necesidad de llamarlas por este archivo, desde mostrar-alguardar.php ya se han llamado antes. la venta es un poco distinta de inversión y gastos
if(isset($_POST['id_venta'])) {
    $id_venta = $_POST['id_venta'];

    $efectivo = $_POST['efectivo-venta'];
    $efectivo = str_replace( ".", "" , $efectivo);

    $inversion = $_POST['inversion-venta'];
    $inversion = str_replace( ".", "" , $inversion);

    $gastos = $_POST['gastos-venta'];
    $gastos = str_replace( ".", "" , $gastos);

    $dinerollevo = $_POST['dinerollevo-venta'];
    $dinerollevo = str_replace( ".", "" , $dinerollevo);

    $dineroextra = $_POST['dineroextra-venta'];
    $dineroextra  = str_replace( ".", "" , $dineroextra );

    $venta = $efectivo + $inversion + $gastos - ($dinerollevo + $dineroextra);

    $colsulta = ("UPDATE venta SET efectivo=$efectivo, dineroquellevo=$dinerollevo,
    dineroextra=$dineroextra, totalventa=$venta  WHERE id=$id_venta");
    $ejecuta = $con->query($colsulta);
    //  or die(sqlite_error($con));
    
    if($ejecuta){
        echo 'Venta modificada exitosamente';
    }else{
        echo 'Hay problemas al modificar';
    }
   

  
}