<?php
// include('conexion.php');

session_start();

$con = new SQLite3('administracion.db');

if($_POST){
    $correo = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql_leer= 'SELECT * FROM  usuarios';
    $ejecutar = $con->query($sql_leer);

    while($dato = $ejecutar->fetchArray()) {
      if($dato['usuario'] == $correo && $dato['clave'] == $clave){

        $_SESSION["usuario"] = $dato['usuario'];
        header('Location:../lista.php');
        // echo 'Usuario o contraseña correctos';
    //    break;
      }else{
        echo  "<script>
        alert('Usuario o contraseña incorrectos');
        window.history.go(-1);
        </script>";
        exit;
      }
    }


} 

?> 