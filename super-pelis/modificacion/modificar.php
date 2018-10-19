<?php
    include_once "../conexion.php";
   
        $consulta="SELECT * FROM datos";
        $filas_datos=mysqli_query($con,$consulta);
        $reg=mysqli_fetch_assoc($filas_datos);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
    <style>
        .body{
            color:rgb(255, 255, 255);
            background: rgb(39, 37, 37);
        }
    </style>
</head>
<body class="body">
    <div>
    <?php
                  if(isset($_GET['editar'])){
                    $idt = $_GET['editar'];
                    $consultat="SELECT * FROM datos WHERE iddatos='$idt'";
                    $filas_datost=mysqli_query($con,$consultat);
                    $regt=mysqli_fetch_assoc($filas_datost);
                    //echo $regt['iddatos'];
                  }               
                  ?> 
    <?php if($_GET): ?>
        <div class="">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>               
                    <th>Titulo ori</th>   
                    <th>Imagen VE</th>                
                    <th>Imagen HO</th>               
                    <th>Servidor 1</th>              
                    <th>Servidor 2</th>                
                    <th>servidor 3</th>              
                    <th>Descarga</th>              
                    <th>Trailer</th>                          
                    <th>Año</th>             
                    <th>Duracion</th>                
                    <th>idioma</th>  
                    <th>sinopsis</th>            
                    <th>categoria</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>  
                     
                <tr>            
                    <td><input type="text" value="<?php $id = $regt['iddatos']; echo $id; ?>" name=""></td>
                    <td><input type="text" value="<?php echo $regt['titulo']; ?>" name=""></td>               
                    <td><input type="text" value="<?php echo $regt['titulo2']; ?>" name=""></td>
                    <td><input type="text" value="<?php echo $regt['imagen']; ?>" name="">  </td>                
                    <td><input type="text" value="<?php echo $regt['imagenho']; ?>" name=""></td>               
                    <td><input type="text" value="<?php echo $regt['video']; ?>" name=""></td>              
                    <td><input type="text" value="<?php echo $regt['video2']; ?>" name=""></td>                
                    <td><input type="text" value="<?php echo $regt['video3']; ?>" name=""></td>              
                    <td><input type="text" value="<?php echo $regt['descarga']; ?>" name=""></td>              
                    <td><input type="text" value="<?php echo $regt['trailer']; ?>" name=""></td>               
                    <td><input type="text" value="<?php echo $regt['anio']; ?>" name=""></td>                
                    <td><input type="text" value="<?php echo $regt['duracion']; ?>" name=""></td>             
                    <td><input type="text" value="<?php switch($regt['idioma']){case 'espaniol': echo "Español latino";break;case 'subespaniol': echo "Sub español";break;case 'espanioles': echo "Español";break;}?>" name=""></td>              
                    <td><input type="text" value="<?php echo $regt['sinopsis']; ?>" name=""></td>                                   
                    <td><input type="text" value=" <?php 
                            $consulta2="SELECT relacion.idcategorias as rc,genero FROM relacion join categorias on relacion.idcategorias=categorias.idcategorias WHERE iddatos='$id'";
                            $resultados=mysqli_query($con,$consulta2);
                                while($rege=mysqli_fetch_array($resultados)){   
                                    echo $rege['genero'].' / '; }
                            ?>" name=""></td>
                    <td><button class="btn btn-primary">modificar</button></td>
                    <td><button class="btn btn-danger">eliminar</button></td> 
                </tr>
               
            </tbody>
        </table>
    </div>
    <?php endif ?>      
        <div class="container-fluid mt-5 mb-3">
            <div class="row">
                  <?php foreach($filas_datos as $dato): ?> 
                <div class="col-4 col-sm-3 col-md-2 col-lg-1 p-1">                   
                    <img class=" img-fluid" src ="<?php echo $dato['imagen'] ?>" alt = "">
                    <form action="" method="get">
                    <button class="btn btn-primary" name="editar" value="<?php echo $dato['iddatos'] ?>">E</button> 
                    <button class="btn btn-danger" name="eliminar" value="<?php echo $dato['iddatos'] ?>">Eli</button> 
                    </form>
                    <p> <?php echo $dato['titulo'];?> </p>                                              
                </div>
                  <?php endforeach ?>
                  
              
            </div>
        </div>
    </div>
</body>
</html>

 