
$(function(){
	$('#frmHorarios').validate({
       rules:{
           materia:{
               minlength: 3,
               maxlength: 20,
               required: true
           },
           maestro:{
           		minlength: 3,
               maxlength: 20,
               required: true
           },
           hora_ini:{
           		minlength: 8,
               maxlength: 8,
               required: true
           },
           hora_fin:{
           		minlength: 8,
               maxlength: 8,
               required: true
           },
           grupo:{
           		minlength: 2,
               maxlength: 2,
               required: true
           },
           aula:{
           		minlength: 2,
               maxlength: 2,
               required: true
           }
		   
		   
       },
       messages:{
           materia:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture el nombre de la materia"
           },
           maestro:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture el numbre del maestro"
           },
           hora_ini:{
               minlength: "Introduce una hora en formato hh:mm:ss",
               maxlength: "Introduce una hora en formato hh:mm:ss",
               required: "Introduce una hora en formato hh:mm:ss"
           },
           hora_fin:{
               minlength: "Introduce una hora en formato hh:mm:ss",
               maxlength: "Introduce una hora en formato hh:mm:ss",
               required: "Introduce una hora en formato hh:mm:ss"
           },
           aula:{
               minlength: "Introduce una aula",
               maxlength: "Introduce una aula",
               required: "Introduce una aula"
           },
           grupo:{
               minlength: "Introduce una grupo",
               maxlength: "Introduce una grupo",
               required: "Introduce una grupo"
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
           newHorario();
           return false;
       }
   });



    $('#tbHorarios').DataTable({
    	responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"http://localhost/TPAProyectoIntegrador/model/horarios/getHorarios.php"  ,
          dataSrc:function(json){
              
              return json['msg'];
          }
        },
        columns:[
            {
           		data:"materia"
            },
            {
            	data:"maestro"   
            },
            {
                data:"dias"
            },
            {
               data:"hora_ini"
            },
			{
               data:"hora_fin"
            },
			{
               data:"aula"
            },
			{
               data:"grupo"
            },
            {
            	data: function(row){
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteHorario("+row["idHorario"]+")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick ='editHorario("+row['idHorario']
				  + ",\"" + row['materia']
                  + "\",\"" +row['maestro']
				  + "\",\"" + row['hora_ini']
				  + "\",\"" + row['hora_fin']
				  + "\",\"" + row['aula']
				  + "\",\"" + row['grupo']
				  + "\",\"" + row['dias']
				  +"\")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }  
            }

        ]
            
        
    });
	
	$('#frmEditHorario').validate({
        rules: {
        materia2:{
               minlength: 3,
               maxlength: 20,
               required: true
           },
           maestro2:{
           		minlength: 3,
               maxlength: 20,
               required: true
           },
           hora_ini2:{
           		minlength: 8,
               maxlength: 8,
               required: true
           },
           hora_fin2:{
           		minlength: 8,
               maxlength: 8,
               required: true
           },
           grupo2:{
           		minlength: 2,
               maxlength: 2,
               required: true
           },
           aula2:{
           		minlength: 2,
               maxlength: 2,
               required: true
           }
		   
		   
       },
       messages:{
           materia2:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture el nombre de la materia"
           },
           maestro2:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture el numbre del maestro"
           },
           hora_ini2:{
               minlength: "Introduce una hora en formato hh:mm:ss",
               maxlength: "Introduce una hora en formato hh:mm:ss",
               required: "Introduce una hora en formato hh:mm:ss"
           },
           hora_fin2:{
               minlength: "Introduce una hora en formato hh:mm:ss",
               maxlength: "Introduce una hora en formato hh:mm:ss",
               required: "Introduce una hora en formato hh:mm:ss"
           },
           aula2:{
               minlength: "Introduce una aula",
               maxlength: "Introduce una aula",
               required: "Introduce una aula"
           },
           grupo2:{
               minlength: "Introduce una grupo",
               maxlength: "Introduce una grupo",
               required: "Introduce una grupo"
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
            updateHorario();
            return false;
        }
    });
	
	 $('#btnEditHorario').on('click', function () {
        $('#frmEditHorario').submit();
    });
    
});

function checkbutton () {
    $("[name='my-checkbox']").bootstrapSwitch();
}

function newHorario(){
    $.ajax({
        url: "http://localhost/TPAProyectoIntegrador/model/horarios/newHorario.php",
        type: "post",
        data: {materia : $('#materia').val(),
               maestro : $('#maestro').val(),
               hora_ini: $('#hora_ini').val(),
               hora_fin: $('#hora_fin').val(),
               dias: $('#dias').val(),
               aula: $('#aula').val(),
               grupo: $('#grupo').val()
			   }
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
				$('#tbHorarios').dataTable().api().ajax.reload();
                $('#materia').val('');
                $('#maestro').val('');
				$('#hora_ini').val('');
				$('#hora_fin').val('');
				$('#dias').val('');
				$('#aula').val('');
				$('#grupo').val('');				
            }
            else{
                $.growl.error({ message: data.msg });
            }
            
        }
    ).fail(
        function(){
            $.growl.error({ message: "No se guardo anda" });
        }
    );
}


function deleteHorario(idHorario){
    bootbox.confirm({
        title: "Eliminar Horario",
        message: "¿Estas seguro que quieres eliminar este horario?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancelar'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Eliminar'
            }
        },callback: function (result) {
            if (result === true) {
                $.ajax({
                    url: "http://localhost/TPAProyectoIntegrador/model/horarios/deleteHorarios.php",
                    type: "post",
                    data: {idHorario: idHorario}
                }).done(function (data) {
                            if (data.code === 206) {
                                $.growl.error({message: data.msg});
                            } else {
                                if (data.code === 200) {
                                    $.growl.notice({message: data.msg});
                                    $('#tbHorarios').dataTable().api().ajax.reload();
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


function editHorario(idHorario2,materia2,maestro2,hora_ini2,hora_fin2,aula2,grupo2,dias2){
	 $('#idHorario2').val(idHorario2);
	 $('#materia2').val(materia2);
	 $('#maestro2').val(maestro2);
	 $('#hora_ini2').val(hora_ini2);
 	 $('#hora_fin2').val(hora_fin2);
	 $('#grupo2').val(grupo2);
	 $('#aula2').val(aula2);
  	 $('#dias2').val(parseInt(dias2));
	 $("#modalHorario").modal("show");
}

function updateHorario(){
	console.log("Paso");
    $.ajax({
  		url: "http://localhost/TPAProyectoIntegrador/model/horarios/updateHorario.php",
		type: "post",
		data:  $('#frmEditHorario').serialize()
	}).done(
		function(data){
		  if(data.code === 200){
		    $("#modalHorario").modal("hide");
		    $.growl.notice({message: data.msg});
		    $('#tbHorarios').dataTable().api().ajax.reload();
		  }
	  else{
    	$.growl.error({ message: data.msg });
	  }
	}	
	).fail(
		function(){
		  $.growl.error({ message: "Error en la modificacion" });
		}
	);
}
