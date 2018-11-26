$(function(){
    console.log('funcionando');

    // inicio para que el slider de la portada se adapte al dispositivo, bien lo pude hacer con solo css pero queria aprender hacerlo con jquery

    function responseDesing(){
       var anchoPantalla = $(window).innerWidth(),//para la anchura de la pantalla
       altoPantalla = $(window).innerHeight()//para la altura de la pantalla

        // console.log( anchoPantalla, altoPantalla);

        if(anchoPantalla <=768){
            $('#slider').removeClass('containerr');//si quiero eliminar varias clases solo debo separarlas por una (,)
        }
        else if(anchoPantalla>769){
            
            $('#slider').addClass('containerr');//puedo ejecutar dos cosas a la ves en id este es un ejemplo el cual no tiene nada que ver pero no debe colocar (;) en la primera .addClass('containerr') va pero en la ultima
                        //.removeClass('algo');
        }
    }

    $(window).on('resize ',responseDesing)//resize en el evento que trabaja con el tamaño de pantalla entonces le digo que al aver movimiento de pantalla ejecue a responseDesing y load es para cuando carfue la pagina, le estoy diciendo tambien que al cargar la pagina me ejecute esa funcion porque? por que con con resize le estoy es diciendo que es cuando se mueva la pantalla, es decir, si la pantalla no se le hace movimiento de agrendar o poner mas pequeña entonces la funcion np se ejecuta y no colocara o quitara las clases que estoy ejecutando en la funcion  responseDesing().
    window.onload=responseDesing();


     
    //inicio de animaciones de cada proyecto

    $(window).scroll(function(){
        if($(this).scrollTop() > 700){
            // $('#pc-imagen').fadeOut(0);
            $('#pc-imagen').fadeIn(1500);   
            $('#movil-imagen').slideDown(1000);   
            $('#table-y-movil').slideDown(1000);     
        }
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 500){
              $('#table-y-movil').slideDown(1000); 
              $('#table-y-movil-fondo').animate({opacity: "1"},1000);    
        }
    });
        
    tiempo = setInterval(tablet,8000); 

    function tablet(){        
        $('#tablet-imagen').fadeOut(500);
        $('#tablet-imagen').fadeIn(500); 
        
        // detener();
    }
    
    // function detener(){
    //     clearTimeout(tiempo);
    // }
       
     //fin de animaciones de cada proyecto


    //inicio animaciones en sobre mi
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#yo').fadeIn(1000);     
                
        }
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 250){                    
            $('#piso').slideDown(2000); 
            $('#iconos').slideDown(3000);     
        }
    });
    //fin animaciones en sobre mi

    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.fondo-slider').slideDown(1000);     
                
        }
    });
})