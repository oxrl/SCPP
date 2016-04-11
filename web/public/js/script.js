$(document).ready(function(){
/*
    $("#btn-guardar").on('click', function(e){

        var path = $('#form-grupos').attr('action');
        var descripcion=$('#txtGrupo').val();
        e.preventDefault();

        $.ajax({
            type: "POST",
            url:path,
            data: {"descripcion" : descripcion },
            dataType:"html",
            cache: true,
            success: function(datos){

                $("#myModalNorm").modal('hide');
                 window.location.reload(true);
              //  $("tbody").html(datos);


            }
        });


    });*/


    $('.delete-btn').on('click', function(e){
        e.preventDefault();
        var este= this;
        $.post(this.href,{id:$(this).data("id")}).done(function(response){

          var estado = JSON.parse(response.estado);
            if(estado == 0)
               $(este).parent().parent().find("td").eq(1).html("Inactivo");

        });
    });

    $('.activar-btn').on('click', function(e){
        e.preventDefault();
        var este= this;
        $.post(this.href,{id:$(this).data("id")}).done(function(response){

            var estado = JSON.parse(response.estado);
            if(estado == 1)
                $(este).parent().parent().find("td").eq(1).html("Activo");

        });
    });

    $("#btn-guardar_edit").click(function(evento){

        var url = $(this).attr('href');
        evento.preventDefault();

        $.ajax({
            type: "POST",
            url:url,
            dataType:"html",
            cache: true,
            success: function(datos){


            }
        });


    });


});