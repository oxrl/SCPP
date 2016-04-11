$(document).ready(function(){

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
                //$("tbody").html(datos);

            }
        });


    });


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

    $("#btn-edit").on("click",function(e){

        var path = $('#form-grupos-edit').attr('action');
        var descripcion= $('#form-grupos-edit #txtGrupo').val(); // #form-grupos-edit #txtGrupo se lo puso asi porque estos se repiten y hay que aclararlo en codigo
        var id=$('#form-grupos-edit #id').val();
        e.preventDefault();

        $.ajax({
            type: "POST",
            url:path,
            data: {"descripcion" : descripcion , "id": id },
            dataType:"html",
            cache: true,
            success: function(datos){

                $("#myModalEdit").modal('hide');
                window.location.reload(true);
                //$("tbody").html(datos);

            }
        });

    });

    $(".edit_button").on('click', function(e){

        var name = $(this).data('name');
        var id = $(this).data('id');
        $(".id_edit").val(id);
        $(".txtGrupo").val(name);


    });
/****************************Estudiantes *************************************************/




$('.activar-btn-estudiante').on('click', function(e){
    e.preventDefault();
    var este= this;
    $.post(this.href,{id:$(this).data("cedula")}).done(function(response){

        var estado = JSON.parse(response.estado);

        if(estado == 1)
            $(este).parent().parent().find("td").eq(6).html("Activo");

    });
});

    $('.delete-btn-estudiante').on('click', function(e){
        e.preventDefault();
        var este= this;
        $.post(this.href,{id:$(this).data("cedula")}).done(function(response){

            var estado = JSON.parse(response.estado);
            if(estado == 0)
                $(este).parent().parent().find("td").eq(6).html("Inactivo");

        });
    });


    $("#btn-guardar-estudiante").on('click', function(e){

        var path = $('#form-estudiante').attr('action');
        var cedula=$('#txtCedula').val();
        var nombres=$('#txtNombres').val();
        var apellidop=$('#txtApellidop').val();
        var apellidom=$('#txtApellidom').val();
        var paralelo=$('#txtParalelo').val();
        var anolectivo=$('#txtAnoLectivo').val();


        e.preventDefault();

        $.ajax({
            type: "POST",
            url:path,
            data: {"cedula" : cedula, "nombres" : nombres, "apellidop" : apellidop, "apellidom" : apellidom , "paralelo" : paralelo, "anolectivo" : anolectivo },
            dataType:"html",
            cache: true,
            success: function(datos){

                $("#myModalNorm").modal('hide');
                window.location.reload(true);
                //$("tbody").html(datos);

            }
        });


    });


    $("#btn-editar-estudiante").on('click', function(e){

        var path = $('#form-grupos-edit').attr('action');
        var cedula=$('#form-grupos-edit #txtCedula').val();
        var nombres=$('#form-grupos-edit #txtNombres').val();
        var apellidop=$('#form-grupos-edit #txtApellidop').val();
        var apellidom=$('#form-grupos-edit #txtApellidom').val();
        var paralelo=$('#form-grupos-edit #txtParalelo').val();
        var anolectivo=$('#form-grupos-edit #txtAnoLectivo').val();

        e.preventDefault();

        $.ajax({
            type: "POST",
            url:path,
            data: {"cedula" : cedula, "nombres" : nombres, "apellidop" : apellidop, "apellidom" : apellidom , "paralelo" : paralelo, "anolectivo" : anolectivo },
            dataType:"html",
            cache: true,
            success: function(datos){

                $("#myModalNorm").modal('hide');
                window.location.reload(true);
                //$("tbody").html(datos);

            }
        });


    });

    $(".edit_enlace").on('click', function(e){

        var cedula = $(this).data('cedula');
        var nombres = $(this).data('nombres');
        var apellidop = $(this).data('apellidop');
        var apellidom = $(this).data('apellidom');
        var paralelo = $(this).data('paralelo');
        var anolectivo = $(this).data('anolectivo');
        $(".txtCedula").val(cedula);
        $(".txtNombres").val(nombres);
        $(".txtApellidop").val(apellidop);
        $(".txtApellidom").val(apellidom);
        $(".txtParalelo").val(paralelo);
        $(".txtAnoLectivo").val(anolectivo);

    });

/*****************************************************************************************/
});