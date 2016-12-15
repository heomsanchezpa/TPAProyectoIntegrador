/**
 * Created by Armando_Navarro on 06/12/2016.
 */

$(function() {

    $('#frmCarrera').validate({
        rules: {

            nombreCarrera: {
                minlength: 3,
                required: true
            }
        },
        messages: {

            nombreCarrera: {
                required: "Capture el nombre de la carrera"
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
            newCarrera();
            return false;
        }
    });


    $('#tbCarrera').DataTable({

        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url:"/TPAProyectoIntegrador/model/carrera/GetCarreras.php"  ,
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"idcarrera"
            },
            {
                data:"nombrecarrera"
            },{
                data:"planEstudios"
            },
            {
                data: function (row) {
                    str = "<div align = 'center'>";
                    str+=str +="<button id='btnEditar' class='btn btn-success' onClick='showCarrera(" + row['idcarrera'] + ",\"" + row['nombrecarrera'] + "\",\"" + row['planEstudios'] + "\")'><i class=\"glyphicon glyphicon-edit\"></i></button>";
                    str += "&nbsp;<button id='btnBorrar' class='btn btn-danger' onClick='deleteCarrera(" + row['idcarrera'] + ")'><i class=\"glyphicon glyphicon-trash\"></i></button>";//trash
                    str += "</div>"
                    return str;
                }

            }

        ]
    });

    $('#frmEditCarrera').validate({
        rules: {
            nombreCarrera2: {
                minlength: 3,

                required: true
            }
        },
        messages: {
            nombreCarrera2: {
                minlength: "Introduzca al menos 3 caracteres",

                required: "Capture el nombre del rol"
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
            updateCarrera();
            return false;
        }
    });

    $('#btnModificar').on('click', function () {
        console.log("si funciona el boton");
        $('#frmEditCarrera').submit();

    });

});

function newCarrera(){
    $.ajax({
        url: "/TPAProyectoIntegrador/model/carrera/NewCarrera.php",
        type: "post",
        data: {
            nombreCarrera : $('#nombreCarrera').val(),planEstudios: $('#planEstudios').val()}
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
               $('#tbCarrera').dataTable().api().ajax.reload();
                $('#planEstudios').val('');
                $('#nombreCarrera').val('');
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

function showCarrera(idcarrera, nombrecarrera,planestudios) {
    $('#idcarrera').val(idcarrera);
    $('#nombreCarrera2').val(nombrecarrera);
    $('#planEstudios2').val(planestudios);
    //console.log($('#nombreCarrera2').val()+"----"+$('#idcarrera').val())
    $('#modalCarrera').modal("show");

}
function updateCarrera() {
    $.ajax(
        {
            url: "/TPAProyectoIntegrador/model/carrera/UpdateCarrera.php",
            type: "post",
            data: {
                idcarrera: $('#idcarrera').val(),
                nombrecarrera: $('#nombreCarrera2').val(),
                planestudios: $('#planEstudios2').val()
            }
        }
    ).done(
        function (data) {
            //alert("Se realizó correctamente "+data.code);
            if (data.code == 200) {
                $.growl.notice({message: data.msg});
                $('#tbCarrera').dataTable().api().ajax.reload();
                $('#modalCarrera').modal("toggle");
            } else {
                $.growl.error({message: data.msg});
            }
        }
    ).fail(
        function () {
            $.growl.error({message: "El servidor no está disponible :("});
        }
    );
}
function deleteCarrera(idcarrera) {

    swal(
        {
            title: "¿Estas seguro que deseas eliminar este registro?", text: "",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55", confirmButtonText: "Aceptar!",
            cancelButtonText: "Cancelar", closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {

                var para = {
                    "idcarrera": idcarrera
                };
                ///Comienza a Borrar
                $.ajax(
                    {
                        url: "/TPAProyectoIntegrador/model/carrera/DeleteCarrera.php",
                        type: "post",
                        data: {idcarrera: idcarrera}
                    }
                ).done(
                    function (data) {
                        //alert("Se realizó correctamente "+data.code);
                        if (data.code == 200) {
                            //$.growl.notice({message: data.msg});
                            $.growl.notice({message: data.msg + " " + data.details});
                            swal("Eliminado!", "El registro se elimino correctamente", "success");
                            $('#tbCarrera').dataTable().api().ajax.reload();
                            $('#idcarrera').val('');
                        } else {
                            $.growl.error({message: data.msg});
                        }
                    }
                ).fail(
                    function () {
                        $.growl.error({message: "El servidor no está disponible :("});
                    }
                );
            } else {
                swal("Cancelado", "Accion Cancelada", "error");
            }
        });

}
