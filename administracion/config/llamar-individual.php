<?php 

if(isset($_POST['fecha'])){
    $fecha = $_POST['fecha'];//esta es la fecha pero con formato normal d-m-Y
    // echo $fecha;
    $date = new DateTime($fecha);
    $fecha_format = $date->format('Y-m-d');//le cambio el formato a la fecha para que se pueda acceder a la base de datos ya que solo acepta el formato Y-m-d 
    echo $fecha_format;

   
}

?>
