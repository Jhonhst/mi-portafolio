<?php

// este archivo trae los datos para que sean visible en la lista dependiendo la cantidad o tiempo que se haiga escojido en la interfaz

// include('conexion.php');
// include('zebra.php');
// class BaseDatos extends SQLite3{

//     function __construct()
//     {
//        $this->open('administracion.db'); 
//     }
// }

// $con = new BaseDatos;

$con = new SQLite3('administracion.db');

// de esta forma llamo los datos por semana, mes o todos. 
if(isset($_POST['tiempo'])){
    if($_POST['tiempo'] == 'semana'){
        $limite = 'LIMIT 7';
        $tiempo = 'Ultima Semana';
    }
    if($_POST['tiempo'] == 'mes'){
        $limite = 'LIMIT 30';
        $tiempo = 'ultimo Mes';
    }
    if($_POST['tiempo'] == 'todo'){
        $limite = '';
        $tiempo = 'Todo';
    }
    $consulta = (//trae los datos dependiendo el tiempo que se le ponga
        "SELECT I.FECHA AS LAFECHA, INVERSION_VALOR, GASTO_VALOR, TOTAL_VENTA 
        FROM (SELECT FECHA, SUM(VALOR) AS INVERSION_VALOR FROM INVERSION GROUP BY (FECHA)  ORDER BY FECHA DESC)AS I
        JOIN 
        (SELECT FECHA, SUM(VALOR) AS GASTO_VALOR FROM GASTOS GROUP BY(FECHA) ORDER BY FECHA DESC)AS G
        ON G.FECHA = I.FECHA 
        JOIN 
        (SELECT FECHA, TOTALVENTA AS TOTAL_VENTA FROM VENTA GROUP BY(FECHA) ORDER BY FECHA DESC)AS V 
        ON V.FECHA = I.FECHA $limite"
    );
    $ejecutar = $con->query($consulta);
    //  or die(sqlite_error($con));

}else if(isset($_POST['fechainicio'])){//trae los datos dependiendo de que fecha asta que decha se le pida

    $fecha_inicio = $_POST['fechainicio'];
    $fecha_fin = $_POST['fechafin'];
    $fecha_inicio_format = date("d-m-Y", strtotime($fecha_inicio));//es para acomodar el formato a d-m-Y esto no va a la base datos simplemnte es lo que se envia en json para ver en la interfaz
    $fecha_fin_format = date("d-m-Y", strtotime($fecha_fin));
    
    $tiempo = 'desde '.$fecha_inicio_format.' asta '.$fecha_fin_format;
    $consulta = (
        "SELECT I.FECHA AS LAFECHA, INVERSION_VALOR, GASTO_VALOR, TOTAL_VENTA 
        FROM (SELECT FECHA, SUM(VALOR) AS INVERSION_VALOR FROM INVERSION  WHERE fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin' GROUP BY (FECHA) ORDER BY FECHA DESC)AS I
        JOIN 
        (SELECT FECHA, SUM(VALOR) AS GASTO_VALOR FROM GASTOS WHERE fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin' GROUP BY(FECHA) ORDER BY FECHA DESC)AS G
        ON G.FECHA = I.FECHA 
        JOIN 
        (SELECT FECHA, TOTALVENTA AS TOTAL_VENTA FROM VENTA WHERE fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin' GROUP BY(FECHA) ORDER BY FECHA DESC)AS V 
        ON V.FECHA = I.FECHA"
    );
    // $ejecutar = sqlite_query($con,$consulta) or die(sqlite_error($con));
    $ejecutar = $con->query($consulta);

}else if(isset($_POST['fechaunica'])){//trae los datos dependiendo de la fecha exacta que se le pida

    $fecha_unica = $_POST['fechaunica'];
  
    $fecha_unica_format = date("d / m / Y", strtotime($fecha_unica));//es para acomodar el formato a d-m-Y esto no va a la base datos simplemnte es lo que se envia en json para ver en la interfaz
   
    $tiempo =   $fecha_unica_format;
    $consulta = (//debo hacer una cosulta general pero para la triple selección se deben hacer individualmente, debido a que hay tablas que tienen mas datos que otras, eso hace que algunos datos se sumen de las tablas que tienen menos datos.
        "SELECT I.FECHA AS LAFECHA, INVERSION_VALOR, GASTO_VALOR, TOTAL_VENTA
        FROM (SELECT FECHA, SUM(VALOR) AS INVERSION_VALOR FROM INVERSION  WHERE fecha = '$fecha_unica' GROUP BY (FECHA) )AS I
        JOIN 
        (SELECT FECHA, SUM(VALOR) AS GASTO_VALOR FROM GASTOS WHERE fecha = '$fecha_unica' GROUP BY(FECHA) )AS G
        ON G.FECHA = I.FECHA 
        JOIN 
        (SELECT FECHA, TOTALVENTA AS TOTAL_VENTA FROM VENTA WHERE fecha = '$fecha_unica' GROUP BY(FECHA) )AS V 
        ON V.FECHA = I.FECHA"
    );
    // $ejecutar = sqlite_query($con,$consulta);
    $ejecutar = $con->query($consulta);
   
}
else{//pide los datos que por defecto van a estar, en este caso semana
    $limite = 'LIMIT 7';
    $tiempo = 'Ultima Semana';
    $consulta = (
        "SELECT I.FECHA AS LAFECHA, INVERSION_VALOR, GASTO_VALOR, TOTAL_VENTA 
        FROM (SELECT FECHA, SUM(VALOR) AS INVERSION_VALOR FROM INVERSION GROUP BY FECHA ORDER BY FECHA DESC)AS I
        JOIN 
        (SELECT FECHA, SUM(VALOR) AS GASTO_VALOR FROM GASTOS GROUP BY FECHA ORDER BY FECHA DESC)AS G
        ON G.FECHA = I.FECHA 
        JOIN 
        (SELECT FECHA, TOTALVENTA AS TOTAL_VENTA FROM VENTA GROUP BY FECHA ORDER BY FECHA DESC)AS V 
        ON V.FECHA = I.FECHA $limite"
    );
    // $ejecutar = sqlite_query($con,$consulta) or die(sqlite_error($con));
    $ejecutar = $con->query($consulta);
}


    
    $inversion = 0;
    $gastos = 0;
    $venta = 0;
    
    while($row = $ejecutar->fetchArray()) {
        if($row['LAFECHA'] != ''){//esto es para en caso de que llegue algún dato as esto
      
            // estas variables guardan todos los datos para sacar un calculo general
        $inversion += $row['INVERSION_VALOR'];
        $gastos += $row['GASTO_VALOR'];
        $venta += $row['TOTAL_VENTA'];
        $ganancia= $venta - $inversion;
        $ganancia_gastos = $ganancia - $gastos;

        //esto es el array que guardara todo para la lista
        $ganancia_lista = $row['TOTAL_VENTA'] - $row['INVERSION_VALOR'];
        $ganancia_gastos_lista = $ganancia_lista - $row['GASTO_VALOR'];
        $fecha = date("d-m-Y", strtotime($row['LAFECHA']));
        $lista[] = array(
            'lafecha_lista' => $fecha,
           'inversion_lista' => $row['INVERSION_VALOR'],
           'gastos_lista' => $row['GASTO_VALOR'],
           'totalventa_lista' => $row['TOTAL_VENTA'],
           'ganancia_lista' => $ganancia_lista,
           'ganancia_gastos_lista' => $ganancia_gastos_lista
         );
        }else{//si no llega dato as esto, debido a que si no llegan datos no presenta error solo sale vacío, es decir, todo se ejecuta solo que viene sin contenido por eso hago esta condición para en caso de que se mande a pedir algún dato que no existe
            $inversion = 'vacio';
        }
         
    }

    // este array guarda los datos para la consulta general
    if( $inversion != 'vacio'){
        $json[] = array(
        'lafecha' => $tiempo,
       'inversion' => $inversion,
       'gastos' => $gastos,
       'totalventa' => $venta,
       'ganancia' => $ganancia,
       'ganancia_gastos' => $ganancia_gastos,
       'lista' => $lista
        );
    }else{//mando este array en caso de que la fecha no este registrada y desde ajax manda un alert diciendo que esta fecha no esta registrada
        $json[] = array(
            'lafecha' => 0,
        );
    }
    
 
    $jsonstring = json_encode($json);
    echo $jsonstring;

   
