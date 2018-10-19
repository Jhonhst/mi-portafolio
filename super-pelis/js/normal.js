$(document).ready(function() {
    console.log('jquery esta funcionando!');

    fetchTasks();//actualiza los datos sin recargar

    //esta funcion me mantiene los datos actualizados sin recargar y me trae todos los datos
    function fetchTasks() {
        $.ajax({
          url: 'lista.php',
          type: 'GET',
          success: function (response) {
            //console.log(response);
            let listado = JSON.parse(response);
            let template = '';
            listado.forEach(lista => {
              template += `
                <div elides="${lista.id}" class="col-4 col-sm-3 col-md-2 col-lg-1 p-1">                
                    <img class=" img-fluid" src ="${lista.imagenve}" alt = ""> 
                    <p>El id es:  ${lista.id} </p>                  
                    <button class="editar btn btn-primary">E</button> 
                    <button class="eliminar btn btn-danger">Eli</button> 
                    <p> ${lista.titulo} </p>                     
                </div>
              `
            });
            $('#cuerpo').html(template);
          }
        })
      };

      //al dar click sobre el boton editar (E) hace que salga la tabla en la cual puedo editar los datos
      $(document).on('click', '.editar', function() {
        $('#tabla').addClass('d-block').removeClass('d-none');
        let element = $(this)[0].parentElement;
        //console.log(element);
        let id = $(element).attr('elides');
        //console.log(id);
         $.post('extraer.php', {id}, function(response) {
            //console.log(response);
            const task = JSON.parse(response);
            $('#id').val(task.id);
            $('#titulo').val(task.titulo);
            $('#titulodos').val(task.titulodos);
            $('#imagenve').val(task.imagenve);
            $('#imagenho').val(task.imagenho);
            $('#servidoruno').val(task.servidoruno);
            $('#servidordos').val(task.servidordos);
            $('#servidortres').val(task.servidortres);
            $('#descarga').val(task.descarga);
            $('#trailer').val(task.trailer);
            $('#anio').val(task.anio);
            $('#duracion').val(task.duracion);
            $('#idioma').val(task.idioma);
            $('#sinopsis').val(task.sinopsis);
        });      
    })

    //al dar click en el boton de modificar que esta en la tabla esta funcion hace que me modifique los datos en la base datos
    $('#form-edi').submit(function(e){
      const postData = {        
        imagenve: $('#imagenve').val(),
        imagenho: $('#imagenho').val(),
        servidoruno: $('#servidoruno').val(),
        servidordos: $('#servidordos').val(),
        servidortres: $('#servidortres').val(),
        descarga: $('#descarga').val(),
        trailer: $('#trailer').val(),
        titulo: $('#titulo').val(),
        titulodos: $('#titulodos').val(),
        anio: $('#anio').val(),
        duracion: $('#duracion').val(),
        sinopsis: $('#sinopsis').val(),
        id: $('#id').val()
      };
      console.log(postData);
     
      $.post('editar.php', postData,function(response){
        console.log(response)
        fetchTasks();
      });
      
      e.preventDefault();
    }); 
    
    //para eliminar peliculas
    $(document).on('click', '.eliminar', function() {
      if(confirm('¿esta seguro de eliminar esta pelicula?')) {
        //console.log($(this));
        let element = $(this)[0].parentElement;
        console.log(element);// para ver el dato
        let id = $(element).attr('elides');
        $.post('eliminar.php', {id}, function (response) {
          console.log(response);
          fetchTasks();
        });
      }  
    })

    //para cerrar la parte de busqueda    
    $('#cerrar-buscar').click(function(e){
      $('#ver').hide();
      e.preventDefault();
    });

    //para cerrar la tabla de modificacion
    $(document).on('click', '#cerrar-editar', function(e) {
      $('#tabla').addClass('d-none').removeClass('d-block');
      e.preventDefault();
    });


    $('#ver').hide();//mantiene el cuadro de busqueda oculto

    //para realizar la busqueda
    $('#buscar').keyup(function(e) {
      if($('#buscar').val()) {
        let buscar = $('#buscar').val();
        //console.log(search);
        $.ajax({
          url: 'buscar.php',
          data: {buscar},
          type: 'POST',
          success: function (response) {
              let listado = JSON.parse(response);
              let template = '';
              listado.forEach(lista => {
                template += `
                <div elides="${lista.id}" class="col-4 col-sm-3 col-md-2 col-lg-1 p-1">                
                    <img class=" img-fluid" src ="${lista.imagenve}" alt = "">  
                    <p>El id es:  ${lista.id} </p>                  
                    <button class="editar btn btn-primary">E</button> 
                    <button class="eliminar btn btn-danger">Eli</button> 
                    <p> ${lista.titulo} </p> 
                </div>
              ` //llenamos la variable template
              });
              
              $('#cuerpo-buscar').html(template);
              $('#ver').show();//hace que aparesca el cuadro de busqueda
          } 
        })
      }
    });

});