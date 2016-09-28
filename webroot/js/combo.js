$(document).ready(function() {

/*    $('#select_pelicula').on('change', function()
    {function
        $.ajax({
               type: 'GET',
               url: 'busquedas/view',
               datatype: "json",
               beforeSend: function() {
                     $('#contenido_busqueda').html('<div class="rating-flash" id="cargando_div">Cargando  <img src="/img/camara.gif"></div>');
                     alert("dsaasd");
                     },
               success: function(msg){
                   alert(msg);

                   $('#prueba select.combobox').html('<option  value="" selected="selected">venezuela</option>');
                    alert("dsdasdasdaasdasdsa");


               }
             });
    });*/


    $('#select_peliculas').change(function()
    {
      //alert('ajax');
        var directores = $('#select_director');
        var peliculas = $(this);
        var dir = document.getElementById("select_director");
        var opcion = document.createElement("option");
        var datos = {'id':'asdad','option':'pelicula'};
        $.ajax({
         //    data:'data='+datos,
              type: 'GET',
              url: 'busquedas/busquedirector/'+peliculas.val()+'/pelicula.json',
              datatype: 'json',
              beforeSend: function() {
                alert('actualizando');
              //$('.combobox_director').attr();
                //$('.combobox_director').attr("class","form-control");
                //$('#select_director').attr("class","form-control");
                //dir.append($('<option>').text("select_director"));
                //$('#select_director').html("<option>adadas </option>").selectpicker('refresh');
              //  $("#select_director").empty();
                //$("#select_director").append($('<option>').text("select_director"));
              },
              success: function(data){

                alert(data);
                //alert(peliculas.val());
                var personas;
                var jmsj= JSON.parse(data);
                alert(jmsj);
                //alert(data);
                // for(personas in data)
                // {
                //   alert(data[personas].id);
                // }


               var html='<option > Director </option>';
               //while(int<jmsj.)
               //{
                $.each(jmsj,function(index,values)
                  {
                     alert(values.id);
                      //$('#select_director').html('<option >'+values.per_primer_nombre+ '</option>');
                      html=html+'<option >'+values.per_primer_nombre+ '</option>';
                });
                $('#select_director').html(html);
              //}
              //$('#select_director');
              //$('option',$("#select_director")).remove();
              //dir.append($('<option>').text("select_director1"));
              //  $("<option>adadas </option>").appendto('#select_director');
                //opcion.tex ="asdklaksl";
                //dir.add(opcion);
               //$('.combobox_director')combobox().clearElement();
               //$('#select_director4').html('<li><a href="#">sadasdasdas</a></li>');


              //  $('#select_director').attr("class","combobox form-control");
              //var jmsj= JSON.parse(msj);

              //alert(jmsj.personas);
              //var json = [
    // { 'red': '#f00' },
    // { 'green': '#0f0' },
    // { 'blue': '#00f' }
    //];
    //              $.each(json,function(index,values){
    //                  alert(values.red);
    //                 directores.html('<option>'+values.red+ '</option>');
          //      });

              }

        })
    });




});


$(document).ready(function(){


    $('#select_genero').change(function()
      {
        var generos = $(this);
        $.ajax({

          type: 'GET',
          url: 'busquedas/busquedirector/'+generos.val()+'/genero.json',
          datatype: 'json',
          beforeSend: function() {
            alert('actualizando');
          },
          success: function(data){

            alert(data);
            //alert(peliculas.val());
            var personas;
            var jmsj= JSON.parse(data);
            alert(jmsj);
            //alert(data);
            // for(personas in data)
            // {
            //   alert(data[personas].id);
            // }


           var html='<option > Director </option>';

            $.each(jmsj,function(index,values)
              {
                 alert(values.id);
                  //$('#select_director').html('<option >'+values.per_primer_nombre+ '</option>');
                  html=html+'<option >'+values.per_primer_nombre+ '</option>';
            });
            $('#select_director').html(html);

          }


        });




        $.ajax({

          type: 'GET',
          url: 'busquedas/busquepelicula/'+generos.val()+'/genero.json',
          datatype: 'json',
          beforeSend: function() {
            alert('actualizando');
          },
          success: function(data){

            alert(data);
            //alert(peli¡'0oi'¡culas.val());
            var personas;
            var jmsj= JSON.parse(data);
            alert(jmsj);
            //alert(data);
            // for(personas in data)
            // {
            //   alert(data[personas].id);
            // }


           var html='<option > pelicula </option>';

            $.each(jmsj,function(index,values)
              {
                 alert(values.id);
                  //$('#select_director').html('<option >'+values.per_primer_nombre+ '</option>');
                  html=html+'<option id="'+values.id+'" >'+values.pel_titulo+ '</option>';
            });
            $('#select_peliculas').html(html);

          }


        });


        $.ajax({

          type: 'GET',
          url: 'busquedas/busquetematica/'+generos.val()+'/tematica.json',
          datatype: 'json',
          beforeSend: function() {
            alert('actualizando');
          },
          success: function(data){

            alert(data);
            //alert(peli¡'0oi'¡culas.val());
            var personas;
            var jmsj= JSON.parse(data);
            alert(jmsj);
            //alert(data);
            // for(personas in data)
            // {
            //   alert(data[personas].id);
            // }


           var html='<option > tematica </option>';

            $.each(jmsj,function(index,values)
              {
                 alert(values.id);
                  //$('#select_director').html('<option >'+values.per_primer_nombre+ '</option>');
                  html=html+'<option id="'+values.id+'" >'+values.tem_nombre+ '</option>';
            });
            $('#select_tamatica').html(html);

          }


        });


      });




});

$(document).ready(function() {

  $('#select_tematica').change(function()
  {
    var tematicas = $(this);
    $.ajax({

      type: 'GET',
      url: 'busquedas/busquedirector/'+tematicas.val()+'/tematica.json',
      datatype: 'json',
      beforeSend: function() {
        alert('actualizando');
      },
      success: function(data){

        alert(data);
        //alert(peliculas.val());
        var personas;
        var jmsj= JSON.parse(data);
        alert(jmsj);
        //alert(data);
        // for(personas in data)
        // {
        //   alert(data[personas].id);
        // }


       var html='<option > Director </option>';

        $.each(jmsj,function(index,values)
          {
             alert(values.id);
             html=html+'<option >'+values.per_primer_nombre+ '</option>';
              //$('#select_director').html('<option >'+values.per_primer_nombre+ '</option>');
        });
        $('#select_director').html(html);

      }


    })
  });


});

/*$(document).ready(function() {
    //$('.combobox').combobox();
    $('.combobox_peliculas').combobox({bsVersion: '3', menu: '<ul class="typeahead typeahead-long dropdown-menu"></ul>'
    , item: '<li><a href="#"></a></li>'});
    $('.combobox_director').combobox({bsVersion: '3', menu: '<ul  id="select_director4" class="typeahead typeahead-long dropdown-menu"></ul>'
    , item: '<li><a href="#"></a></li>'});

});*/
