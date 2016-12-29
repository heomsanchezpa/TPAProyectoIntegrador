
$(function(){
/*
	$('#cUsuario').trigger('click');

	$.ajax({
        url: '/TPAProyectoIntegrador/model/roles/getRoles.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            console.log(row.rolename);
           $('<option></option>', {text: row.rolename}).attr('value',row.roleid).appendTo('#cbRoles'); 
           $('<option></option>', {text: row.rolename}).attr('value',row.roleid).appendTo('#cbRoles2'); 

        });
    });

*/

    $('#frmDepartamento').validate({
       rules:{
           claveArea:{
               minlength: 6,
               maxlength: 10,
               required: true
           },
           descripcionArea:{
           		minlength: 3,
               maxlength: 50,
               required: true
           }
           ,
           areaDepende:{
              minlength: 6,
               maxlength: 10,
               required: true
           }
           ,
           nivel:{
              minlength: 1,
               maxlength: 2,
               required: true
           }
           ,
           tipoArea:{
              minlength: 1,
               maxlength: 2,
               required: true
           }
       },
       messages:{
           claveArea:{
               minlength: "Introduzca al menos 6 numeros",
               maxlength: "Introdusca menos 10 caracteres",
               required: "Capture claveArea"
           },
           areaDepende:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 50 caracteres",
               required: "Capture areaDepende"
           }
           ,
           descripcionArea:{
               minlength: "Introduzca al menos 6 numeros",
               maxlength: "Introdusca menos de 10 caracteres",
               required: "Capture descripcionArea"
           }
           ,
           nivel:{
               minlength: "Introduzca al menos 1 caracter",
               maxlength: "Introdusca menos de 2 caracteres",
               required: "Capture nivel"
           }
           ,
           tipoArea:{
               minlength: "Introduzca al menos 1 caractes",
               maxlength: "Introdusca menos de 2 caracteres",
               required: "Capture tipoArea"
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
           newDepartamento();
           return false;
       }
   });

$('#frmEditDepartamento').validate({
       rules:{
           claveArea:{
               minlength: 6,
               maxlength: 10,
               required: true
           },
           areaDepende:{
              minlength: 3,
               maxlength: 50,
               required: true
           }
           ,
           descripcionArea:{
              minlength: 6,
               maxlength: 10,
               required: true
           }
           ,
           nivel:{
              minlength: 1,
               maxlength: 2,
               required: true
           }
           ,
           tipoArea:{
              minlength: 1,
               maxlength: 2,
               required: true
           }
       },
       messages:{
           claveArea:{
               minlength: "Introduzca al menos 6 caracteres",
               maxlength: "Introdusca menos de 10 caracteres",
               required: "Capture claveArea"
           },
           descripcionArea:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 50 caracteres",
               required: "Capture descripcionArea"
           }
           ,
           areaDepende:{
               minlength: "Introduzca al menos 6 caracteres",
               maxlength: "Introdusca menos de 10 caracteres",
               required: "Capture areaDepende"
           }
           ,
           nivel:{
               minlength: "Introduzca al menos 1 caracter",
               maxlength: "Introdusca menos de 2 caracteres",
               required: "Capture nivel"
           }
           ,
           tipoArea:{
               minlength: "Introduzca al menos 1 caracteres",
               maxlength: "Introdusca menos de 2 caracteres",
               required: "Capture tipoArea"
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
           newDepartamento();
           return false;
       }
   });



    $('#tbDepartamento').DataTable({
    	responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"/TPAProyectoIntegrador/model/departamento/getDepartamento.php"  ,
          dataSrc:function(json){

              return json['msg'];
          }
        },
        columns:[
            {
           		data:"claveArea"
            },
            {
            	data:"descripcionArea"
            },
            {
                data:"areaDepende"
            },
            {
                data:"nivel"
            },
            {
                data:"tipoArea"
            },
            
            {
            	data: function(row){
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteDepartamento("+row["claveArea"]+")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showDepartamento("+row['claveArea']+")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }
            }]

    });


});

function isCheked () {
  console.log("Hola a todos");
}


function showDepartamento (claveArea) {
  $('#claveArea').val(claveArea);
  $("#modalDepartamento").modal("show");
  console.log("La claveArea es:" + claveArea);
}



function checkbutton () {
    $("[name='my-checkbox']").bootstrapSwitch();
}

function newDepartamento(){
    $.ajax({
        url: "/TPAProyectoIntegrador/model/departamento/newDepartamento.php",
        type: "post",
        data: {claveArea : $('#claveArea').val(),
               descripcionArea : $('#descripcionArea').val(),
               areaDepende: $('#areaDepende').val(),
               nivel: $('#nivel').val(),
               tipoArea: $('#tipoArea').val()

             }
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
				$('#tbDepartamento').dataTable().api().ajax.reload();
                $('#claveArea').val('');
                $('#descripcionArea').val('');
                $('#areaDepende').val('');
                $('#nivel').val('');
                $('#tipoArea').val('');
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

function deleteDepartamento(claveArea) {

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
                    "claveArea": claveArea
                };
                ///Comienza a Borrar
                $.ajax(
                    {
                        url: "http://localhost/TPAProyectoIntegrador/model/departamento/deleteDepartamento.php",
                        type: "post",
                        data: {claveArea: claveArea}
                    }
                ).done(
                    function (data) {
                        //alert("Se realizó correctamente "+data.code);
                        if (data.code == 200) {
                            //$.growl.notice({message: data.msg});
                            $.growl.notice({message: data.msg + " " + data.details});
                            swal("Eliminado!", "El registro se elimino correctamente", "success");
                            $('#tbDepartamento').dataTable().api().ajax.reload();
                            $('#claveArea').val('');
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




