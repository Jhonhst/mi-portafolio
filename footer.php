       <!-- inicio de footer -->
    <div class="footer">
        <div class="cuerpo-footer">
            <a href="sobre-mi.php"><i class="fab fa-whatsapp-square iconos whatsapp"></i></a>
            <a href="https://www.facebook.com/Jhonhst"><i class="fab fa-facebook-square iconos facebook"></i></a>
            <a href="https://www.linkedin.com/in/jhon2/"><i class="fab fa-linkedin iconos linkedin"></i></a>
            <a href="sobre-mi.php"><i class="fas fa-envelope-square iconos envelope"></i></a>
        </div>
    </div>
       <!-- fin de footer -->
 
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/js.js"></script>
    <script>
            //inicio para efecto de opacidad de la galeria del index
           //esta clase esta hecha para que los id de la galeria vallan cambiando y así puedan funcionar las animaciones es cada uno de ellos
        class Galeria {
            constructor(imagen, descripcion, botonr) {
                this.imagen = imagen;
                this.descripcion = descripcion;
                this.botonr = botonr;
                this.boton = true;        
            }
            opacidad() {
                if(this.boton == true){
                    this.imagen.animate({opacity: "0"});
                    this.descripcion.animate({opacity: "1"});
                    this.botonr.animate({opacity: "1"});
                    this.boton = false;
                }else if(this.boton == false){
                    this.imagen.animate({opacity: "1"});
                    this.descripcion.animate({opacity: "0"});
                    this.botonr.animate({opacity: "0"});
                    this.boton = true;
                } 
        
            }
        }

        <?php foreach($ejecucion as $dato): ?> 

        var imagen = $('#imagen-galeria<?php echo $dato['id'] ?>');
        var descripcion = $('#descripcion-proyecto<?php echo $dato['id'] ?>');
        var botonr = $('#boton-galeria<?php echo $dato['id'] ?>');

        const actuar<?php echo $dato['id'] ?> = new Galeria(imagen,descripcion,botonr);

        $('#fas<?php echo $dato['id'] ?>').on('click',function(){
            actuar<?php echo $dato['id'] ?>.opacidad();
        })

        <?php endforeach ?>

        <?php foreach($ejecucion_dos as $dato): ?> 

        var imagen = $('#imagen-galeria<?php echo $dato['id'] ?>');
        var descripcion = $('#descripcion-proyecto<?php echo $dato['id'] ?>');
        var botonr = $('#boton-galeria<?php echo $dato['id'] ?>');

        const actuar<?php echo $dato['id'] ?> = new Galeria(imagen,descripcion,botonr);

        $('#fas<?php echo $dato['id'] ?>').on('click',function(){
            actuar<?php echo $dato['id'] ?>.opacidad();
        })

        <?php endforeach ?>

        //tremendo ciclo el cual em ayuda a evitar hacer un codigo por cada uno le agrego el id a cada cosa para que el id="" sea distinto y retorne error(tener en cuenta que este ciclo es exactamnte el mismo de la galeria de arribita)

        //fin para efecto de opacidad de la galeria del index
        
    
    </script>
    <script>
     // inicio para que el slider de la portada de cada proyecto

    let slider_izquierda = $('#slider-izquierda');
    let slider_derecha = $('#slider-derecha');
    let slider_centro = $('#slider-centro');

    let imagen_uno = 'img/<?php echo $reg['imgpctres'] ?>';//izquierda
    let imagen_dos = 'img/<?php echo $reg['imgpcdos'] ?>';//derecha
    let imagen_tres = 'img/<?php echo $reg['imgpcuno'] ?>';//centro

    $(slider_izquierda).on('click',function(){
       
        if(imagen_uno == 'img/<?php echo $reg['imgpctres'] ?>'){
            
            $(slider_centro).attr('src', imagen_uno);//slider centro toma la imagen de izquierda
            $(slider_derecha).attr('src', imagen_tres);//la derecha toma la del centro
            $(slider_izquierda).attr('src', imagen_dos);//la de la izquierda toma la de la derecha
           
            imagen_tres = 'img/<?php echo $reg['imgpctres'] ?>';// centro 
            imagen_dos = 'img/<?php echo $reg['imgpcuno'] ?>';//derecha
            imagen_uno = 'img/<?php echo $reg['imgpcdos'] ?>';//izquierda
              // console.log('se dio 1');

        }else if(imagen_uno == 'img/<?php echo $reg['imgpcdos'] ?>'){

            $(slider_centro).attr('src', imagen_uno);    
            $(slider_derecha).attr('src', imagen_tres);
            $(slider_izquierda).attr('src', imagen_dos);
            
            imagen_tres = 'img/<?php echo $reg['imgpcdos'] ?>'; //centro    
            imagen_dos = 'img/<?php echo $reg['imgpctres'] ?>';//derecha
            imagen_uno = 'img/<?php echo $reg['imgpcuno'] ?>';//izquierda        
            // console.log('se dio 2');

        }else if(imagen_uno == 'img/<?php echo $reg['imgpcuno'] ?>'){

            $(slider_centro).attr('src', imagen_uno );    
            $(slider_derecha).attr('src', imagen_tres);       
            $(slider_izquierda).attr('src', imagen_dos);
                 
            imagen_tres = 'img/<?php echo $reg['imgpcuno'] ?>';
            imagen_dos = 'img/<?php echo $reg['imgpcdos'] ?>';
            imagen_uno = 'img/<?php echo $reg['imgpctres'] ?>';
            // console.log('se dio 3');
        }      
    })

    $(slider_derecha).on('click',function(){
        if(imagen_dos == 'img/<?php echo $reg['imgpcdos'] ?>'){

            $(slider_centro).attr('src', imagen_dos);
            $(slider_derecha).attr('src', imagen_uno);
            $(slider_izquierda).attr('src', imagen_tres);
            
            imagen_tres = 'img/<?php echo $reg['imgpcdos'] ?>';// centro, ojo, debo colocar estas variables para no duplicar
            imagen_dos = 'img/<?php echo $reg['imgpctres'] ?>';//derecha
            imagen_uno = 'img/<?php echo $reg['imgpcuno'] ?>';//izquierda
              console.log('se dio 1');

        }else if(imagen_dos == 'img/<?php echo $reg['imgpctres'] ?>'){

            $(slider_centro).attr('src', imagen_dos);    
            $(slider_derecha).attr('src', imagen_uno);
            $(slider_izquierda).attr('src', imagen_tres);
            
            imagen_tres = 'img/<?php echo $reg['imgpctres'] ?>'; //centro    
            imagen_dos = 'img/<?php echo $reg['imgpcuno'] ?>';//derecha
            imagen_uno = 'img/<?php echo $reg['imgpcdos'] ?>';//izquierda        
            console.log('se dio 2');

        }else if(imagen_dos == 'img/<?php echo $reg['imgpcuno'] ?>'){

            $(slider_centro).attr('src', imagen_dos );    
            $(slider_derecha).attr('src', imagen_uno);       
            $(slider_izquierda).attr('src', imagen_tres);
                 //estos valores los cambio en estas variables para que sen los resultados
            imagen_tres = 'img/<?php echo $reg['imgpcuno'] ?>';
            imagen_dos = 'img/<?php echo $reg['imgpcdos'] ?>';
            imagen_uno = 'img/<?php echo $reg['imgpctres'] ?>';
            console.log('se dio 3');
        } 
    })
    $(slider_derecha).on('click',function(){
        $('#slider-centro').fadeOut(0);
        $('#slider-centro').fadeIn(500);
    })

    $(slider_izquierda).on('click',function(){
        $('#slider-centro').fadeOut(0);
        $('#slider-centro').fadeIn(500);
    })

    // fin para que el slider de la portada de cada proyecto 
    </script>
   
</body>
</html>
   <!-- <a href="https://www.freepik.es/fotos-vectores-gratis/fondo">Psd de fondo creado por ydlabs - www.freepik.es</a> -->