<?php

// este archivo se encarga de traer los datos que se veran en inversión, gastos y venta del día, para poderlos tener visible y tener la ventaja de verlos, modificarlos o eliminarlos y la fecha que llega es la que tiene el input date actual

// include('conexion.php');
// class BaseDatos extends SQLite3{

//     function __construct()
//     {
//        $this->open('administracion.db'); 
//     }
// }

// $con = new BaseDatos;

$con = new SQLite3('administracion.db');

if(isset($_GET['fecha'])){
    $fecha = $_GET['fecha'];

    $consulta_inv_contar= (//hay que contarlos para que encaso de que no llegue nada mandar este dato 'id_gastos' => 0, y en ajax darle uso
        "SELECT count(*) as numero FROM inversion WHERE fecha = '$fecha'"
    );
    $ejecutar_inv_contar = $con->query($consulta_inv_contar); 
    $row = $ejecutar_inv_contar->fetchArray();
    if($row['numero'] == 0){//en caso de que no llegue ningun dato manda este array para que con ajax mande un mensaje diciendo que no hay registros con esa fecha
        $inversion[] = array(
            'id_inv' => 0,
        );
    }else {
         $consulta_inversion= (
        "SELECT id AS id_inv, fecha AS fecha_inv, nombre as nombre_inv, 
        valor as valor_inv FROM inversion  WHERE fecha = '$fecha'"
        );
        $ejecutar_inversion = $con->query($consulta_inversion);
    
        while($row = $ejecutar_inversion->fetchArray()) {        
            $inversion[] = array(
                'id_inv' => $row['id_inv'],
                'fecha_inv' => $row['fecha_inv'],
                'nombre_inv' => $row['nombre_inv'],
                'valor_inv' => $row['valor_inv'],          
            );
        }
    }
   
    $consulta_gastos_contar= (//hay contarlos para que encaso de que no llegue nada mandar este dato 'id_gastos' => 0, y en ajax darle uso
        "SELECT count(*) as numero FROM gastos WHERE fecha = '$fecha'"
    );
    $ejecutar_gastos_contar = $con->query($consulta_gastos_contar); 
    $row = $ejecutar_gastos_contar->fetchArray();
    if($row['numero'] == 0){
        $gastos[] = array(
            'id_gastos' => 0,
        );
    }else {
        $consulta_gastos= (
        "SELECT id AS id_gastos, fecha AS fecha_gastos, nombre as nombre_gastos, 
        valor as valor_gastos FROM gastos WHERE fecha = '$fecha'"
        );
        $ejecutar_gastos = $con->query($consulta_gastos);   
        while($row = $ejecutar_gastos->fetchArray()) {   
            $gastos[] = array(
                'id_gastos' => $row['id_gastos'],
                'fecha_gastos' => $row['fecha_gastos'],
                'nombre_gastos' => $row['nombre_gastos'],
                'valor_gastos' => $row['valor_gastos']
            );
        }
    }
 

    $venta =[array(
        'id_venta' => 0
    )];//toco hacer de esta forma porque no se pero al una !$ejecutar_venta para en caso de que la consulta no se cumpla no funciona colocar el array hay, así que lo coloco afuera y coloco los corchetes [] dentro para que no se gurden los dos array, de esta manera si se da la consulta sustituirá el array que esta afuera. 
    $consulta_venta= (
        "SELECT id AS id_venta, fecha AS fecha_venta, efectivo, dineroquellevo, dineroextra, totalventa FROM venta WHERE fecha = '$fecha'"
    );
    $ejecutar_venta = $con->query($consulta_venta);
    if($ejecutar_venta){
        while($row = $ejecutar_venta->fetchArray()) {

            $venta = [array(
                'id_venta' => $row['id_venta'],
                'fecha_venta' => $row['fecha_venta'],
                'efectivo' => $row['efectivo'],
                'dineroquellevo' => $row['dineroquellevo'],
                'dineroextra' => $row['dineroextra'],
                'totalventa' => $row['totalventa']
            )];
        }
    }


     // se carga el array qye se enviara
    $json = array(
        'inversion' => $inversion,
        'gastos' => $gastos,
        'venta' => $venta
    );
    $jsonstring = json_encode($json);
    echo $jsonstring;
    
}

// esto es una ejemplo de hacer un triple select pero selecionando iindividualmente:
 // "SELECT I.FECHA AS fecha_inv, id_inv, nombre_inv, id_gasto, G.FECHA AS fecha_gasto, nombre_gasto, valor_gasto, id_venta, V.FECHA AS fecha_venta, totalventa
    // FROM (SELECT fecha, id AS id_inv, nombre as nombre_inv, 
    // valor as valor_inv FROM INVERSION  )AS I
    // JOIN 
    // (SELECT fecha, id AS id_gasto, fecha AS fecha_gasto, nombre as nombre_gasto, 
    // valor as valor_gasto FROM GASTOS )AS G
    // ON G.FECHA = I.FECHA 
    // JOIN 
    // (SELECT fecha, id as id_venta, fecha as fecha_venta, totalventa  FROM VENTA )AS V 
    // ON V.FECHA = I.FECHA WHERE fecha = '$2018-11-07'";
