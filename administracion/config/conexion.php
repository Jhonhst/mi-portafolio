<?php
// c:\xampp\php\php.ini. en esta ubicacion esta el el archivo  php.ini. el cual tenia a la extensión de SQLite3 comentada con (;), la descomente para que sirviera 
// class BaseDatos extends SQLite3{

//     function __construct()
//     {
//        $this->open('administracion.db'); 
//     }
// }

// $con = new BaseDatos;

// if($con){
//     echo 'conectado';
// }else{
//     echo ' no conectado';
// }
// DATE_FORMAT(Fecha, '%d-%m-%Y') esto espara la fechas, para que salgan en un mejor formato

// $con = mysqli_connect("localhost","root","","administracionmama") or die ("Problemas con la conexión a la base de datos");
//$acentos = $con->query("SET NAMES 'utf8'");//para que los datos recibidos este en utf8

//date_default_timezone_set('UTC');//para que la fecha salga con mi zona-horaria coloque este mismo codigo en cabecera para que todas las paginas que tienen el metodo date() salgan con la fecha actual de mi zona-horaria.
// $fecha_hoy = date("d-m-Y");
// echo $fecha_hoy;
?>