<?php
    include_once "conexion.php";
    require_once("zebra.php");

    $consulta3="SELECT * FROM datos";
    $listado3=mysqli_query($con,$consulta3);
    $resultado3=mysqli_fetch_assoc($listado3);

    //var_dump($resultado['titulo']);

    //contar articulos de nuestra base de datos
    $consulta4="SELECT COUNT(*) as cuenta FROM datos";
    $contar=mysqli_query($con,$consulta4);
    $resultado4=mysqli_fetch_assoc($contar);

    $total_articulos_db = (string) $resultado4['cuenta'];
    //echo $total_articulos_db;

    $resul_x_pagina = 24;

    $paginacion = new Zebra_Pagination();
    $paginacion->records($total_articulos_db);
    $paginacion->records_per_page($resul_x_pagina);

    $consulta5="SELECT * FROM datos ORDER BY iddatos DESC limit ".(($paginacion->get_page() - 1) * $resul_x_pagina). "," .$resul_x_pagina;
    $listado5=mysqli_query($con,$consulta5);

    //limit empieza a contar desde el 0 el primer parametro es de donde quiero que cuente el segundo es cuantos articulos quiero ver
    //cuando llamo por get por ejemplo la pagina uno le resto uno para que de cero y cero
    // por *$articulos_x_pagina es igual a cero de esta forma limit en el primer valor va a ir a la
    //variable que acabamos de crear iniciar y si por ejemplo el get que llega es uno osea que en la pagina se ve es un 2 en el get por que aqui le restamos uno entonces
    //ese uno se va al multiplicar por la cantidad de paginas *$articulos_x_pagina y ese valor 
    //va a ir el primer y se es dos por 12 dice 24 quiere decir que a partir del 24 llame 12 y asi sucesivamente
 
