$("#datos").on("click", function(){
    var posicion = $("#datosllegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});$("#conocimientos").on("click", function(){
    var posicion = $("#conocimientosllegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});
$("#estudios").on("click", function(){
    var posicion = $("#estudiosllegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});
$("#experiencia").on("click", function(){
    var posicion = $("#experienciallegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});
$("#referencias").on("click", function(){
    var posicion = $("#referenciasllegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});
$("#documentos").on("click", function(){
    var posicion = $("#documentosllegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});
$("#contacto").on("click", function(){
    var posicion = $("#contactollegada").offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1000); 
});



 
	$('.flecha').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 100 ){
			$('.flecha').slideDown(300);
		} else {
			$('.flecha').slideUp(300);
		}
	});
 



