<?php
// obtiene los valores para realizar la paginacion
$limit = isset($_POST["limit"]) && intval($_POST["limit"]) > 0 ? intval($_POST["limit"])	: 10;
$offset = isset($_POST["offset"]) && intval($_POST["offset"])>=0	? intval($_POST["offset"])	: 0;
// realiza la conexion
$con = new mysqli("localhost","root","","peliculas");
$con->set_charset("utf8");

// array para devolver la informacion
$json = array();
$data = array();
//consulta que deseamos realizar a la db	
$query = $con->prepare("SELECT * from datos limit ? offset ?");
$query->bind_param("ii",$limit,$offset);
$query->execute();

// vincular variables a la sentencia preparada 
$query->bind_result($id, $imagenve, $imagenho, $servidoruno, $servidordos, $servidortres, $descarga, $trailer, $titulo, $titulodos, $anio, $duracion, $sinopsis, $idioma );

// obtener valores 
while ($query->fetch()) {
	$data_json = array();
    $data_json['iddatos'] = $id;
    $data_json['imagen'] = $imagenve;
    $data_json['imagenho'] = $imagenho;
    $data_json['video'] = $servidoruno;
    $data_json['video2'] = $servidordos; 
    $data_json['video3'] = $servidortres; 
    $data_json['descarga'] = $descarga;
    $data_json['trailer'] = $trailer; 
    $data_json['titulo'] = $titulo;
    $data_json['titulo2'] = $titulodos; 
    $data_json['anio'] = $anio; 
    $data_json['duracion'] = $duracion; 
    $data_json['sinopsis'] = $sinopsis; 
    $data_json['idioma'] = $idioma; 			
	$data[]=$data_json;	
}

// obtiene la cantidad de registros
$cantidad_consulta = $con->query("select count(*) as total from datos");
$row = $cantidad_consulta->fetch_assoc();
$cantidad['cantidad']=$row['total'];

$json['lista']= array_values($data);
$json["cantidad"] = array_values($cantidad);

// envia la respuesta en formato json		
header("Content-type:application/json; charset = utf-8");

header("Content-type:application/json; charset = utf-8");
echo json_encode($json);
exit();

?>