$(function(){
  $('#btnModificar').on('click', function () {
        $('#frmEditMaestro').submit();
    });
   $('#tableMaestros').DataTable({
       responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"/TPAProyectoIntegrador/model/maestro/getMaestros.php"  ,
          dataSrc:function(json){
              console.log(json);
              return json['msg'];
          }
        },
        columns: [
            {
                data: "no_tarjeta"
            },{
                data: "name"
            },{
                data: "lastnameP"
            },{
                data: "lastnameM"
            },{
                data: "rfc"
            },{
                data: "clave_area"
            },{
                data: "area_academica"
            },{
                data: "sex"
            },{
              data: function(row){
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteMaestro("+row["no_tarjeta"]+")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs'  onclick='showMaestro("+row["no_tarjeta"]+")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }
            },
        ],
        "dom": 'Bfrtip',
        "buttons":[
          {
             extend: 'excelHtml5',
             text:  'EXCEL',
             titleAttr:  'Excel'
         },
         {
             extend: 'csvHtml5',
             text:  'CSV',
             titleAttr:  'CSV'
         },
         {
             extend: 'pdfHtml5',
             text:  'PDF',
             titleAttr:  'PDF'
         }

        ]

    });
	$('#frmMaestro').validate({
		rules:{
     no_tarjeta:{
       required: true
     },
     name:{
       required: true
     },
     lastnameP:{
       required: true
     },
     lastnameM:{
       required: true
     },
     rfc:{
       required: true
     },
     clave_area:{
       required: true
     },
     area_academica:{
       required: true
     },
     sex:{
       required: true
     }
   },
   messages:{
     no_tarjeta:{
       required: "Campo requerido"
     },
     name:{
       required: "Campo requerido"
     },
     lastnameP:{
       required: "Campo requerido"
     },
     lastnameM:{
       required: "Campo requerido"
     },
     rfc:{
       required: "Campo requerido"
     },
     clave_area:{
       required: "Campo requerido"
     },
     area_academica:{
       required: "Campo requerido"
     },
     sex:{
       required: "Campo requerido"
     },
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
     newMaestro();
     return false;
   }
 });
  $('#frmEditMaestro').validate({
    rules:{
     no_tarjeta2:{
       required: true
     },
     name2:{
       required: true
     },
     lastnameP2:{
       required: true
     },
     lastnameM2:{
       required: true
     },
     rfc2:{
       required: true
     },
     clave_area2:{
       required: true
     },
     area_academica2:{
       required: true
     },
     sex2:{
       required: true
     }
   },
   messages:{
     no_tarjeta2:{
       required: "Campo requerido"
     },
     name2:{
       required: "Campo requerido"
     },
     lastnameP2:{
       required: "Campo requerido"
     },
     lastnameM2:{
       required: "Campo requerido"
     },
     rfc2:{
       required: "Campo requerido"
     },
     clave_area2:{
       required: "Campo requerido"
     },
     area_academica2:{
       required: "Campo requerido"
     },
     sex2:{
       required: "Campo requerido"
     },
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
     updateMaestro();
     return false;
   }
 });

});

$(document).ready(function() {
    $('#tableMaestros').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );




function newMaestro(){
 $.ajax({
  url: "/TPAProyectoIntegrador/model/maestro/newMaestro.php",
  type: "post",
  data:  $('#frmMaestro').serialize()
}).done(
function(data){
  if(data.code === 200){
    $('#tableMaestros').dataTable().api().ajax.reload();
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
function showMaestro(no_tarjeta){
 $.ajax({
  url: "/TPAProyectoIntegrador/model/maestro/getMaestroById.php",
  type: "post",
  data:  {no_tarjeta:no_tarjeta}
}).done(
function(data){
  if(data.code === 200){
    /*var west = $.parseJSON(data.msg[0]);
    console.log(data.msg[0].name);*/
    $('#no_tarjeta2').val(data.msg[0].no_tarjeta);
    $('#name2').val(data.msg[0].name);
    $('#lastnameP2').val(data.msg[0].lastnameP);
    $('#lastnameM2').val(data.msg[0].lastnameM);
    $('#rfc2').val(data.msg[0].rfc);
    $('#clave_area2').val(data.msg[0].clave_area);
    $('#area_academica2').val(data.msg[0].area_academica);
    $('#sex2').val(data.msg[0].sex);
    $("#modalMaestro").modal("show");
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
function updateMaestro(){
 $.ajax({
  url: "/TPAProyectoIntegrador/model/maestro/updateMaestro.php",
  type: "post",
  data:  $('#frmEditMaestro').serialize()
}).done(
function(data){
  if(data.code === 200){
    $("#modalMaestro").modal("hide");
    $.growl.notice({message: data.msg});
    $('#tableMaestros').dataTable().api().ajax.reload();
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
function deleteMaestro(no_tarjeta) {
    bootbox.confirm({
        title: "Eliminar Maestro",
        message: "¿Estas seguro que quieres eliminar el maestro?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancelar'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirmar'
            }
        },
        callback: function (result) {
            if (result === true) {
                $.ajax({
                    url: "/TPAProyectoIntegrador/model/maestro/deleteMaestro.php",
                    type: "post",
                    data: {no_tarjeta: no_tarjeta}
                }).done(
                        function (data) {
                            if (data.code === 206) {
                                $.growl.error({message: data.msg});
                            } else {
                                if (data.code === 200) {
                                    $.growl.notice({message: data.msg});
                                    $('#tableMaestros').dataTable().api().ajax.reload();
                                } else {
                                    $.growl.error({message: data.msg});
                                }
                            }
                        }
                ).fail(
                        function () {
                            $.growl.error({message: "No hay mensaje que mostrar"});
                        }
                );
            } else {
                $('#modalRole').modal('hide');
            }
        }
    });



}
