$(function(){

  fechaActual();
  mostrar_lista_tiempo();


  // función que trae la fecha actualizada, para que siempre este al día
  function fechaActual(){
    $.get('config/fecha.php', '' , function(respuesta) {

      $('.fecha-inv').val(respuesta);
      // tenerfechaActiva();

      let dia = $('.fecha-inv').val();
      if(dia){//si esta variable tiene contenido, debido aque hay páginas que no tienen la clase fecha-inv entonces presentaran un error.  
        dia = dia.split('-').reverse().join('/');//se le cambia el formato a la fecha
        $('.el-dia').html(dia);
      }//esto es para que salga al iniciar la fecha actual tanto en el input de fecha como en el título
        // console.log($('.fecha-inv').val())
        mostrar_datos_deldia();
    })
  }

  //inicio funciones encargadas de mandar los datos para ser guardados
  $(document).on('click', '#enviar-inversion', function(e) {
    var nombre = $('#nombre-inversion').val();
    var valor = $('#valor-inversion').val(); 
    if(nombre == "" || valor == ""){//validación
      alert('Se deben llenar todos los campos')
      e.preventDefault();
    }else//si todo esta correcto ejecuta esto
    if(isNaN(valor)){//validación
      alert('En el valor solo se aceptan números')
      e.preventDefault();
    }else{//si todo esta correcto ejecuta esto
      var formulario = $("#inversion").serializeArray();
      e.preventDefault();
      enviar(formulario)
      $('#nombre-inversion').val('');
      $('#valor-inversion').val('');
    }      
  });
  $(document).on('click', '#enviar-gastos', function(e) {
    var nombre = $('#nombre-gastos').val();
    var valor = $('#valor-gastos').val(); 
    if(nombre == "" || valor == ""){//validación
      alert('Se deben llenar todos los campos')
      e.preventDefault();
    }else//si todo esta correcto ejecuta esto
    if(isNaN(valor)){//validación
      alert('En el valor solo se aceptan números')
      e.preventDefault();    
    }else{//si todo esta correcto ejecuta esto
      var formulario = $("#gastos").serializeArray();
      e.preventDefault();
      enviar(formulario)  
      $('#nombre-gastos').val('');
      $('#valor-gastos').val('');  
    }
      
  });
  $(document).on('click', '#enviar-venta', function(e) {
    let efectivo = $('#efectivo').val();
    let dineroquellevo = $('#dineroquellevo').val(); 
    let dineroextra = $('#dineroextra').val(); 
    let inversion_venta = $('#inversion-venta').val(); 
    let gastos_venta = $('#gastos-venta').val(); 

    // let patron =/[0-9]/;
    if(inversion_venta == 'Este día no tiene inversiones registradas' || gastos_venta == 'Este día no tiene gastos registrados'){//esta es la condición en caso de que no se encuentren datos en inversión o gastos en ese día
        alert('Primero debe estar inversión y gastos completados');
        e.preventDefault();
    }else if(efectivo == "" || dineroquellevo == "" || dineroextra == ""){//validación
      alert('Se deben llenar todos los campos')
      e.preventDefault();
    }else if(efectivo == -1){
      alert('Efectivo no puede ser -1');
      e.preventDefault();
    }else
    if(isNaN(efectivo) || isNaN(dineroquellevo) || isNaN(dineroextra)){//validación
      alert('Solo se aceptan números')
      e.preventDefault();    
    }else{//si todo esta correcto ejecuta esto
      var formulario = $("#venta").serializeArray();
      e.preventDefault();
      enviar(formulario)
    }
          
  });

   //esta función envía los datos que allan mandado a php 
  function enviar(formulario){ 
    const postData = formulario;
      // console.log(postData);
    $.post('config/guardar.php', postData , function(response) {
      alert(response);
      mostrar_datos_deldia();
    });  
  }
  //fin funciones encargadas de mandar los datos para ser guardados


 

  //función encargada de trae los calculos de los tiempos semana, mes, todos o con fechas
 function mostrar_lista_tiempo(postdata){

  $.post('config/traer-tiempo.php', postdata , function(response) {  
      // console.log(response);
      let datos = JSON.parse(response);
      let modulo = '';
      let listas = ''
    
      // este forhech trae el calculo de inversiones, gastos, ventas, ganancias dependiendo el tiempo que se haya elegido
      datos.forEach(dato => {
        if(dato.lafecha == 0){//es para en caso de que no se haya enviado un dato correcto retorna lafecha == 0 
          alert('No hay registros con esa fecha');
          // location.reload();
          listas = 0;//doy este valor para que lista enseñe un mensaje, más abajo lo codifico
        }else {
          let fecha = dato.lafecha;
          let inversion = dato.inversion;
          let gastos = dato.gastos;
          let venta = dato.totalventa;
          let ganancia = dato.ganancia;
          let ganancia_gastos = dato.ganancia_gastos;

          listas = dato.lista;//esta me manda el array que tiene los datos para la lista
          // formatearNumero(inversion) es la encargada separar con un punto los miles
          modulo += `
            <tr>
              <td> ${fecha} </td>  
              <td>$ ${formatearNumero(inversion)}</td>
              <td>$ ${formatearNumero(gastos)}</td>
              <td>$ ${formatearNumero(venta)}</td>
              <td>$ ${formatearNumero(ganancia)}</td>
              <td>$ ${formatearNumero(ganancia_gastos)}</td>
            </tr>
            ` 
        }    
      });
      $('#lista-tiempo').html(modulo);//agraga a la tabla los datos ya calculados
      
      let modulo_lista = '';
      // el dato listas viene del forhech de arriba y este se encarga de mostrar la lista dependiendo de la cantidad que se escoja en el select
      //la lista
      if(listas != 0){//solo se ejecuta si lista es distinta a 0 en el foreach anterior se define
        let detener = 1;
        listas.forEach(lista => {
          if(detener <= 30){//esto es para que se detenga al llegar a los 30 registros, es para que no se sobre cargue, ¡¡¡¡queda pendiente un paginador!!!!
            detener += 1;
            let fecha_lista = lista.lafecha_lista;
            let inversion_lista = lista.inversion_lista;
            let gastos_lista = lista.gastos_lista;
            let venta_lista = lista.totalventa_lista;
            let ganancia_lista = lista.ganancia_lista;
            let ganancia_gastos_lista = lista.ganancia_gastos_lista;

            modulo_lista += `
              <tr >
                <td class="llamar-individual"> ${fecha_lista}</td>  
                <td>$ ${formatearNumero(inversion_lista)}</td>
                <td>$ ${formatearNumero(gastos_lista)}</td>
                <td>$ ${formatearNumero(venta_lista)}</td>
                <td>$ ${formatearNumero(ganancia_lista)}</td>
                <td>$ ${formatearNumero(ganancia_gastos_lista)}</td>
              </tr>
             ` 
          }else if(detener >= 30){//el mensaje que que se vera al llegar a los 30 registros
            $('#mayor-30-registros').html('Solo se verán los últimos 30 registros, si no se en-cuenta el que busca, por favor busque por fecha.');
          }
          
        })  
      }else{
        modulo_lista += `
        <tr >
           <td colspan="6"> No hay registros en la fecha buscada<td>
        </tr>
        ` 
      }
      $('#lista').html(modulo_lista);//la lista de registros
    }); 
  }

   // llama y envia los datos a la función que trae el el calculo de tiempo en este caso es de que una fecha a otra fecha.
  $('#fechas').click(function(e){
    var fecha_inicio = $('#fecha-inicio').val();
    var fecha_fin = $('#fecha-fin').val();
    // console.log(fecha_inicio+'.....'+fecha_fin);
    var postdata = { 
      fechainicio: fecha_inicio,
      fechafin: fecha_fin
    };
    // console.log(postdata);
      mostrar_lista_tiempo(postdata);
      e.preventDefault();
  })

    // llama y le envia el tipo de tiempo pero en fecha unica, es decir, solo buscara una fecha, esto es del buscador normal, le envía los datos a la función que calcula las    fechas para la lista
  $('#fecha-buscar').click(function(e){
    // window.location='lista.php'
    var fecha_unica = $('#fecha-unica').val();
    var postdata = { 
      fechaunica: fecha_unica
    };
    mostrar_lista_tiempo(postdata);
    e.preventDefault();
    
  })

   // llama y le envia el tipo de tiempo a la funcion que calcula los tiempos para la lista, en este caso semana, mes o todos
   $('#tiempo').click(function(){
    var el_tiempo = $('#tiempo').val();
    var postdata = { 
      tiempo: el_tiempo  
    };
      mostrar_lista_tiempo(postdata);
  })

  // esta función es para buscar la fecha en agregar( inversión, gastos o venta) los datos de ese día el cual se este solicitando. esta funcion manda el value de la fecha al dar click en el boton buscar-dia guarda el value y llama a mostrar_datos_deldia() función la cual espera cualquier parametro en este caso el value que se pidio.
  $('.buscar-dia').click(function(e){
    mostrar_datos_deldia();
    
    let dia = $('.fecha-inv').val();
    dia = dia.split('-').reverse().join('/');//cambia el formato de fecha
    $('.el-dia').html(dia);//es para que el titulo de fecha esté en el día que se mando a pedir
    console.log($('.fecha-inv').val())
    e.preventDefault();
  })

  // función encargaga de mostrar los datos que se estan cargando en el día, inversión, gastos, venta
  function mostrar_datos_deldia(){
    let fecha_registros = $('.fecha-inv').val();//es el dato que tiene la fecha en cada pagina, inversión, gastos y venta.
    let fecha_individual = $('.fecha-individual').val();//es la fecha que tiene individual debe ser separado, no puede usar la misma clase porque tendria la misma fecha siempre para los registros individuales
    
    if(fecha_registros){//es para que se envie la fecha de la pagina que este activa
      var fecha = fecha_registros;
    }else if(fecha_individual){
      var fecha = fecha_individual;
    }
   
    if( fecha != null){//por ciacaso el campo esta en blanco no ejecutes nada
      const postData = { fecha : fecha };
      $.get('config/mostrar-alguardar.php', postData , function(response) {
        
        if(fecha_registros){//es para que se envie la fecha de la pagina que este activa y debo hacerlo así para que en la pagina de individual no se corte la ejecución ya que en casi todas las páginas coloco la variable dia y si la coloco y no tiene contenido se corta todo. 
          var dia = fecha_registros;//es para que salga el dia cuando no hayan registros
        }else if(fecha_individual){
          var dia = fecha_individual;
        }
        // let dia = $('.fecha-inv').val();
        dia = dia.split('-').reverse().join('/');//cambio de formato y - por / en las fechas 

        // console.log(response);
        let datos = JSON.parse(response);
        let modulo_gastos = '';
        let modulo_venta = '';
        let modulo_inv = '';
        let modulo_total_inversion = 0;
        let modulo_total_gastos = 0;
          // aqui ise diferente a la función de mostrar la lista, ya que aqui no viene un dato individual si no que viene el array con mas array por eso lo recorro así datos.inversion.forEach(dato => {
        datos.inversion.forEach(dato => {//inversiones
          let id_inv = dato.id_inv;
          let fecha_inv = dato.fecha_inv;
          let nombre_inv = dato.nombre_inv;
          let valor_inv = dato.valor_inv;
          modulo_total_inversion += parseInt(dato.valor_inv);
          // console.log(typeof(modulo_total_inversion));
          if(id_inv == 0){//si llega este dato desde php es por que no hay registros con esta fecha entonces quiero que muestre este mensaje
            modulo_inv += `
            <tr>
              <td colspan="3">El día ${dia} no tiene inversiones registradas</td>
            </tr>
            ` 
            
          }else {
             modulo_inv += `
              <tr>
                <td>${nombre_inv}</td>
                <td>$ ${formatearNumero(valor_inv)}</td>
                <td>                            
                  <button miId="${id_inv}" class="modificar-inversion btn btn-success">Modificar</button>
                  <button miId="${id_inv}" class="eliminar-inversion btn btn-danger">Eliminar</button> 
                </td>
              </tr>
              ` 
          }
         
        });

        datos.gastos.forEach(dato => {//gastos
          let id_gasto = dato.id_gastos;
          let fecha_gasto = dato.fecha_gastos;
          let nombre_gasto = dato.nombre_gastos;
          let valor_gasto = dato.valor_gastos;
          modulo_total_gastos += parseInt(dato.valor_gastos);

          if(id_gasto == 0){
            modulo_gastos += `
            <tr>
              <td colspan="3">El día ${dia} no tiene gastos registrados</td>
            </tr>
            ` 
            
          }else {
              modulo_gastos += `
          <tr >
            <td>${nombre_gasto}</td>
            <td>$ ${formatearNumero(valor_gasto)}</td>
            <td>                            
              <button miId="${id_gasto}" class="btn btn-success modificar-gastos">Modificar</button>
              <button miId="${id_gasto}" class="eliminar-gasto btn btn-danger">Eliminar</button> 
            </td>
          </tr>
          ` 
          }
        
        });

        let efectivo = -1;
        let dineroquellevo = 0;
        let dineroextra = 0;
        let id_venta = 0;
        datos.venta.forEach(dato => {//venta
          id_venta = dato.id_venta;
          // let fecha_venta = dato.fecha_venta;
          if(id_venta == 0){
            modulo_venta += `   
            <p>El día ${dia} no tiene venta registrada</p>
          `
          }else{
            efectivo = dato.efectivo;
            dineroquellevo = dato.dineroquellevo;
            dineroextra = dato.dineroextra;
            let totalventa = dato.totalventa;

             modulo_venta += `   
            <p>Total venta del día $ ${formatearNumero(totalventa)}</p>
          `
          }
        });

          //cargan los datos a mostrar en la interfaz
        $('#inversion-dia').html(modulo_inv);//los datos que se veran en inversión
        $('#gastos-dia').html(modulo_gastos);//los datos que se veran en gastos      
        $('#venta-dia').html(modulo_venta); //los datos que se veran en venta
        $('#total_valor_inversion').html(formatearNumero(modulo_total_inversion));//resultado de inversión
        $('#total_valor_gastos').html(formatearNumero(modulo_total_gastos));//resultado de gastos

        if(isNaN(modulo_total_inversion)){//si no hay registro de alguna inversión ese día quiero que se vea este mensaje
          $('#inversion-venta').val('Este día no tiene inversiones registradas');
        }else{// si llega un dato correcto entonces muestra esto
          $('#inversion-venta').val(formatearNumero(modulo_total_inversion));//resultado de inversión que se vera en venta
        }
        
        if(isNaN(modulo_total_gastos)){//si no hay registro de algun gasto ese día quiero que se vea este mensaje
          $('#gastos-venta').val('Este día no tiene gastos registrados');
        }else{// si llega un dato correcto entonces muestra esto
          $('#gastos-venta').val(formatearNumero(modulo_total_gastos));//resultado de gastos que se vera en venta
        }

        $('#efectivo').val(formatearNumero(efectivo));//se vera en venta
        $('#dineroquellevo').val(formatearNumero(dineroquellevo));//se vera en venta
        $('#dineroextra').val(formatearNumero(dineroextra));//se vera en venta
        $('#id-venta').val(id_venta);//se vera en venta
        para_modificar_venta(efectivo);//es la funcion para modificar o no modificar venta
      });
    } 
  }

  // función que trae los datos para que vean reflejados al modicar en inversion
  $(document).on('click', '.modificar-inversion ', function() {
     let id_inversion = $(this).attr('miId');
     $.post('config/traer-modificar.php', {id_inversion}, function(response){
      const dato = JSON.parse(response);
      $('#nombre-inversion').val(dato.nombre_inv);
      $('#valor-inversion').val(formatearNumero(dato.valor_inv));
      $('#id-inversion').val(dato.id_inv);
      $('.botones').slideDown();
      $('.guardar').slideUp();
      $('.mensaje-modificacion').slideDown();
     })
  })

  // función que trae los datos para que vean reflejados al modicar en gastos
  $(document).on('click', '.modificar-gastos', function() {
     let id_gastos = $(this).attr('miId');
     $.post('config/traer-modificar.php', {id_gastos}, function(response){
      const dato = JSON.parse(response);
      $('#nombre-gastos').val(dato.nombre_gastos);
      $('#valor-gastos').val(formatearNumero(dato.valor_gastos));
      $('#id-gastos').val(dato.id_gastos);
      $('.botones').slideDown();
      $('.guardar').slideUp();
      $('.mensaje-modificacion').slideDown();  
     })
  })

    // función que se encarga de mandar los datos para la modificacion en inversión
  $(document).on('click', '#modificar-inversion', function(e) {   
    let nombre_inversion = $('#nombre-inversion').val();
    let valor_inversion = $('#valor-inversion').val();
    let id_inversion = $('#id-inversion').val();
    if(nombre_inversion == "" || valor_inversion == ""){//validación
      alert('Se deben llenar todos los campos')
      e.preventDefault();
    }else if(isNaN(valor_inversion)){//validación
      alert('En el valor solo se aceptan números')
      e.preventDefault();    
    }else{//si todo esta correcto ejecuta esto
      const posData = {
        id_inv : id_inversion,
        nombre_inv : nombre_inversion,
        valor_inv : valor_inversion,
      }
      modificar_dia(posData);
      e.preventDefault();
      $('#nombre-inversion').val('');
      $('#valor-inversion').val('');
      $('.botones').slideUp();
      $('.guardar').slideDown(); 
    }
 })

    // función que se encarga de mandar los datos para la modificacion en gastos
  $(document).on('click', '#modificar-gastos', function(e) {   
    let nombre_gastos = $('#nombre-gastos').val();
    let valor_gastos = $('#valor-gastos').val();
    let id_gastos = $('#id-gastos').val();
    if(nombre_gastos == "" || valor_gastos == ""){//validación
      alert('Se deben llenar todos los campos')
      e.preventDefault();
    }else if(isNaN(valor_gastos)){//validación
      alert('En el valor solo se aceptan números')
      e.preventDefault();    
    }else{//si todo esta correcto ejecuta esto
      const posData = {
        id_gastoss : id_gastos,
        nombre_gastoss : nombre_gastos,
        valor_gastoss : valor_gastos,
      }
      //  gastoss con doble ese para que no me presente problemas en traer-modificar.php
      modificar_dia(posData);
      e.preventDefault();
      $('#nombre-gastos').val('');
      $('#valor-gastos').val('');
      $('.botones').slideUp();
      $('.guardar').slideDown();
      $('.mensaje-modificacion').slideUp();  
    }
 })
  //  funcion que se encarga de mandar  la modificación
 function modificar_dia(posData){
  $.post('config/traer-modificar.php', posData, function(response){
    mostrar_datos_deldia();
    alert(response);
  })
  
 }
   //si se desea cancelar la modificación este boton cambia los botones de modificar a guardar
  $('.no-modificar').click(function(e){
    $('#nombre-inversion').val('');
    $('#valor-inversion').val('');
    $('#nombre-gastos').val('');
    $('#valor-gastos').val('');
    $('.botones').slideUp();
    $('.guardar').slideDown();
    $('.mensaje-modificacion').slideUp();  
    e.preventDefault();
  })

  // encargada de eliminar inversiones del dia
  $(document).on('click', '.eliminar-inversion', function() {
    if(confirm('¿Desea eliminar esta inversión?')) { 
      let id_inversion = $(this).attr('miId');
      $.post('config/eliminar.php', {id_inversion}, function (response) {
        alert(response);
        mostrar_datos_deldia();
      });
    }  
  })

   // elimina gastos del día
  $(document).on('click', '.eliminar-gasto', function() {
    if(confirm('¿Desea eliminar este gasto?')) { 
      let id_gastos = $(this).attr('miId');
      $.post('config/eliminar.php', {id_gastos}, function (response) {
        alert(response);
        mostrar_datos_deldia();
      });
    }  
  })
 
  //es la funcion para modificar o no modificar venta, si esta en -1 quiere diceir que no se han guardado datos aún, por tanto deben salir los campos  habilitados para agregar, en caso contrario si hay numeros mayores a -1 es por que si hay datos entonces los campos sale sedabilitados
  function para_modificar_venta(cantidad){
    if(cantidad == -1){
      $("#efectivo").removeAttr("disabled","disabled");
      $("#dineroquellevo").removeAttr("disabled","disabled");
      $("#dineroextra").removeAttr("disabled","disabled");
      $('.guardar-venta').slideDown();
      $('.pre-modicar-venta').slideUp();
    }else {
      $("#efectivo").attr("disabled","disabled");
      $("#dineroquellevo").attr("disabled","disabled");
      $("#dineroextra").attr("disabled","disabled");
      $('.guardar-venta').slideUp();
      $('.pre-modicar-venta').slideDown();
    }
  } 

  //habilita los campos y muestra los botones para modificar
  $('.pre-modicar-venta').click(function(e){

    $("#efectivo").removeAttr("disabled","disabled");
    $("#dineroquellevo").removeAttr("disabled","disabled");
    $("#dineroextra").removeAttr("disabled","disabled");

    $('#pre-modicar-venta').slideUp();
    $('#modificar-venta').slideDown();
    $('#no-modificar-venta').slideDown();
    e.preventDefault();
  })

  //desabilita los campos y esconde los botones para modificar
  $('#no-modificar-venta').click(function(e){

    $("#efectivo").attr("disabled","disabled");
    $("#dineroquellevo").attr("disabled","disabled");
    $("#dineroextra").attr("disabled","disabled");

    $('#pre-modicar-venta').slideDown();
    $('#modificar-venta').slideUp();
    $('#no-modificar-venta').slideUp();
    mostrar_datos_deldia();//si se colocaron datos pero no se modificaron quiero eue me coloque los originales o actuales.
    e.preventDefault();
  })

  // función encargada de hacer de guardar, validar y enviar los datos para ser modificados en venta
  $('#modificar-venta').click(function(e){
    let efectivo = $('#efectivo').val();
    let dineroquellevo = $('#dineroquellevo').val(); 
    let dineroextra = $('#dineroextra').val(); 
    let inversion_venta = $('#inversion-venta').val(); 
    let gastos_venta = $('#gastos-venta').val(); 

    if(inversion_venta == 'Este día no tiene inversiones registradas' || gastos_venta == 'Este día no tiene gastos registrados'){//esta es la condición en caso de que no se encuentren datos en inversión o gastos en ese día
      alert('Primero debe estar inversión y gastos completados');
      e.preventDefault();
    }else
    if(efectivo == "" || dineroquellevo == "" || dineroextra == ""){//validación
      alert('Se deben llenar todos los campos')
      e.preventDefault();
    }else if(efectivo == -1){
      alert('Efectivo no puede ser -1');
      e.preventDefault();
    
    }else    
    if(isNaN(efectivo) || isNaN(dineroquellevo) || isNaN(dineroextra)){//validación
      alert('Solo se aceptan números')
      e.preventDefault();    
    }else{//si todo esta correcto ejecuta esto 
      var formulario = $("#venta").serializeArray();
      $.post('config/traer-modificar.php', formulario, function(response){
        mostrar_datos_deldia();
        alert(response);
      })
      e.preventDefault();

    //devuelve los botones a premodificar
      $("#efectivo").attr("disabled","disabled");
      $("#dineroquellevo").attr("disabled","disabled");
      $("#dineroextra").attr("disabled","disabled");

      $('#pre-modicar-venta').slideDown();
      $('#modificar-venta').slideUp();
      $('#no-modificar-venta').slideUp();
    }
    e.preventDefault();
  })

  // // esta función es para agregarle los puntos cada miles o 3 cifras al escribir las cantidades en los inputs
  $(".comas").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
            // .replace(/([0-9])([0-9]{3})$/, '$1.$2')
            .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
            
                        
                        
        });
    }
  });

  // función que colocara el punto cada tres cifras para que sea facil diferenciar en todas las cantidades
  function formatearNumero(cantidad) {
    cantidad += '';
    x = cantidad.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? ',' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
  }

  $(document).on('click', '.llamar-individual', function() {
      let fecha = $(this).html();
      $.post('config/llamar-individual.php', {fecha}, function (respuesta) {
      // console.log(respuesta);
        $('.fecha-individual').val(respuesta);
        $('.fecha-individual-titulo').html(respuesta);       
        $('.individual').fadeIn();
        $('.lista').fadeOut();
        $('body, html').animate({
          scrollTop: '0px'
        }, 300);
        mostrar_datos_deldia();
      });      
  })



  // es un ejemplo de como recorrer un array
  // var x = $("#venta").serializeArray();
  // $.each(x, function(i, field){
  //     $('#results').append(field.name + ":" + field.value + " ");
  //     console.log(ver);
  // });
  




})