<?php
include 'conexion.php';

 $nombre= $_POST["nombre"];
 $telefono= $_POST["telefono"];
 $correo= $_POST["correo"];
 $mensaje = $_POST["mensaje"];

 mysqli_query($con,"INSERT INTO buscadores(nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo','$mensaje')") or die (mysqli_error($con));

 echo "<script>
 alert('Muchas Gracias por su mensaje');
 window.history.go(-1);
 </script>";
// mysqli_close($con);