$(function(){

    $('#frmPreguntas').validate({
       rules:{
           pregunta:{
               required: true
           },
           tipopregunta:{
                required: true
           }
       },
       messages:{
            pregunta:{               
               required: "La pregunta es requerida"
           },
           tipopregunta:{
             required: "El tipo de pregunta es requerida"
           }
       },
       highlight: function (element){
           $(element).closest('.form-group').addClass('has-error');
       },
       unhighlight: function (element){
           $(element).closest('.form-group').removeClass('has-error');
       },
       errorElement: 'span',
       errorClass: 'help-block',
       errorPlacement: function(error, element){
           if(element.parent('.input-group').length){
               error.insertAfter(element.parent());
           }else{
               error.insertAfter(element);
           }
       },
       submitHandler: function(form){
           newPregunta();
           return false;
       }
    });

    $('#frmEditPregunta').validate({
          rules: {
              pregunta2: {
                  required: true
              },
              tipopregunta2: {
                  required: true
              }
          },
          messages: {
              pregunta2: {
                  required: "Capture la pregunta"
              },
              tipopregunta2: {
                  required: "Capture el tipo de pregunta"
              }
          },
          highlight: function (element) {
              $(element).closest('.form-group').addClass('has-error');
          },
          unhighlight: function (element) {
              $(element).closest('.form-group').removeClass('has-error');
          },
          errorElement: 'span',
          errorClass: 'help-block',
          errorPlacement: function (error, element) {
              if (element.parent('.input-group').length) {
                  error.insertAfter(element.parent());
              } else {
                  error.insertAfter(element);
              }
          },
          submitHandler: function (form) {
              updatePregunta();
              return false;
          }
    });

    $('#tbPreguntas').DataTable({
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"/TPAProyectoIntegrador/model/preguntas/getPreguntas.php",
          dataSrc:function(json){
            console.log(json);
              return json['msg'];
          }
        },
        columns:[
            {
                data:"idPregunta"
            },
            {
                data:"pregunta"   
            },
            {
                data:"tipo"
            },
            {
                data: function(row){
                  console.log(row);
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deletePregunta("+ row["idPregunta"] +")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showMateria(" + row['idPregunta'] + ",\"" + row['pregunta'] + "\",\"" + row['tipo'] + "\")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }  
            }

        ]   
    });



});

function deletePregunta (id) {
    swal(
        {
            title: "&Acirc;&iquest;Estas seguro que deseas eliminar esta pregunta?", text: "",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55", confirmButtonText: "Aceptar!",
            cancelButtonText: "Cancelar", closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                ///Comienza a Borrar
                $.ajax(
                    {
                        url: "/TPAProyectoIntegrador/model/preguntas/deletePreguntas.php",
                        type: "post",
                        data: {id:id}
                    }
                ).done(
                    function (data) {
                        //alert("Se realiz&Atilde;&sup3; correctamente "+data.code);
                        if (data.code == 200) {
                            //$.growl.notice({message: data.msg});
                            $.growl.notice({message: data.msg + " " + data.details});
                            swal("Eliminado!", "El registro se elimino correctamente", "success");
                            $('#tbPreguntas').dataTable().api().ajax.reload();
                        } else {
                            $.growl.error({message: data.msg});
                        }
                    }
                ).fail(
                    function () {
                        $.growl.error({message: "El servidor no est&Atilde;&iexcl; disponible :("});
                    }
                );
            } else {
                swal("Cancelado", "Accion Cancelada", "error");
            }
        });
}

function showMateria (id,pregunta,tipo) {
    $('#idpregunta').val(id);
    $('#pregunta2').val(pregunta);
    $('#tipopregunta2').val(tipo);
    $('#modalPregunta').modal("show");
}

function newPregunta () {
  console.log("Entro pregunta"+$('#pregunta').val());
    $.ajax({
        url: "/TPAProyectoIntegrador/model/preguntas/newPreguntas.php",
        type: "post",
        data: {pregunta : $('#pregunta').val(),
                tipopregunta : $('#tipopregunta').val()
                }
    }).done(
        function(data){
          console.log(data);
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbPreguntas').dataTable().api().ajax.reload();
                $('#pregunta').val("");
                $('#tipopregunta').val("");
            }
            else{
                $.growl.error({ message: data.msg });
            }
            
        }
    ).fail(
        function(){
            $.growl.error({ message: "No hay mensaje que mostrar" });
        }
    );
}
function updatePregunta () {
    $.ajax({
        url: "TPAProyectoIntegrador/model/preguntas/updatePreguntas.php",
        type: "post",
        data: {
          pregunta : $('#pregunta2').val(),
          tipopregunta : $('#tipopregunta2').val(),
          id:$('#idpregunta').val()
        }
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbPreguntas').dataTable().api().ajax.reload();
                $('#pregunta2').val('');
                $('#tipopregunta2').val('');
                $('#modalPregunta').modal("toggle");
            }
            else{
                $.growl.error({ message: data.msg });
            }
            
        }
    ).fail(
        function(){
            $.growl.error({ message: "No hay mensaje que mostrar" });
        }
    );
}
