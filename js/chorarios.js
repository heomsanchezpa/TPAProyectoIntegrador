$(function(){
	$.ajax({
        url: '../TPAProyectoIntegrador/model/horarios/getGrupos.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        //console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            //console.log(row.nombre_grupo);
           $('<option></option>',{text: row.nombre_grupo}).attr('value',row.idGrupo).appendTo('#grupo'); 
           $('<option></option>',{text: row.nombre_grupo}).attr('value',row.idGrupo).appendTo('#grupo2'); 
        });
    });
	
	$.ajax({
        url: '../TPAProyectoIntegrador/model/horarios/getAulas.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        //console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            //console.log(row.nombre);
           $('<option></option>',{text: row.nombre}).attr('value',row.idAula).appendTo('#aula'); 
		   $('<option></option>',{text: row.nombre}).attr('value',row.idAula).appendTo('#aula2'); 
        });
    });
	
	$.ajax({
        url: '../TPAProyectoIntegrador/model/horarios/getMaestros.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        //console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            //console.log(row.nombre_maestro);
           $('<option></option>',{text: row.nombre_maestro}).attr('value',row.idMaestro).appendTo('#maestro'); 
		   $('<option></option>',{text: row.nombre_maestro}).attr('value',row.idMaestro).appendTo('#maestro2'); 
        });
    });
	
	$.ajax({
        url: '../TPAProyectoIntegrador/model/horarios/getMaterias.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        //console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            //console.log(row.nombre);
           $('<option></option>',{text: row.nombre_materia}).attr('value',row.idMateria).appendTo('#materia'); 
		   $('<option></option>',{text: row.nombre_materia}).attr('value',row.idMateria).appendTo('#materia2'); 
        });
    });
	
	$('#frmHorarios').validate({
       rules:{
           materia:{
               required: true
           },
           maestro:{
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
           	   required: true
           },
		   aula:{
           	   required: true
           },
		   dias:{
           	   required: true
           },		
       },
       messages:{
           materia:{              
               required: "Capture el nombre de la materia"
           },
           maestro:{
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
		   grupo:{
               required: "Introduce un Grupo"
           },
		   aula:{
               required: "Introduce un Aula"
           },		  
		   dias:{
               required: "Introduce un numero de dias"
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
          url:"../TPAProyectoIntegrador/model/horarios/getHorarios.php"  ,
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
				  + ",\"" + row['smateria']
                  + "\",\"" +row['smaestro']
				  + "\",\"" + row['hora_ini']
				  + "\",\"" + row['hora_fin']
 				  + "\",\"" + row['sgrupo']
				  + "\",\"" + row['saula']				  
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
           
       },
       messages:{
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
            return false;
        }
    });
	
	 $('#btnEditHorario').on('click', function () {
        $('#frmEditHorario').submit();
		updateHorario();
    });
    
});

function newHorario(){
    $.ajax({
        url: "../TPAProyectoIntegrador/model/horarios/newHorario.php",
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
                    url: "../TPAProyectoIntegrador/model/horarios/deleteHorarios.php",
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


function editHorario(idHorario2,smateria2,smaestro2,hora_ini2,hora_fin2,sgrupo2,saula2,dias2){
	 $('#idHorario2').val(idHorario2);
	 $('#materia2').val(parseInt(smateria2));
	 $('#maestro2').val(parseInt(smaestro2));
	 $('#hora_ini2').val(hora_ini2);
 	 $('#hora_fin2').val(hora_fin2);
	 $('#grupo2').val(parseInt(sgrupo2));
	 $('#aula2').val(parseInt(saula2));
  	 $('#dias2').val(parseInt(dias2));
	 $("#modalHorario").modal("show");
}

function updateHorario(){
    $.ajax({
  		url: "../TPAProyectoIntegrador/model/horarios/updateHorario.php",
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
