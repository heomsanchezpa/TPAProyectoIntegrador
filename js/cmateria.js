$(function(){

		$.ajax({
        url: '/TPAProyectoIntegrador/model/materias/getCarreras.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        if(json.code===200)
        $.each(json.msg, function(i,row){
           $('<option></option>', {text: row.nombrecarrera}).attr('value',row.idcarrera).appendTo('#cbNombreCarrera');
           $('<option></option>', {text: row.nombrecarrera}).attr('value',row.idcarrera).appendTo('#cbNombreCarrera2');
        });
    });

     $('#frmMateria').validate({
       rules:{
           clavemateria:{
               minlength: 3,
               maxlength: 20,
               required: true
           },
           clavearea:{
                minlength: 3,
                maxlength: 20,
                required: true,
								number: true
           },
           nombremateria:{
                minlength: 10,
                maxlength: 50,
                required: true
           },
           nombreabreviado:{
                minlength: 1,
                maxlength: 50,
                required: true
           },
           numerocreditos:{
                number: true,
                required: true
           }
       },
       messages:{
            clavemateria:{
               minlength: "Minimo 3 caracteres",
               maxlength: "Maximo 3 caracteres",
               required: "El ID de la materia es requerido"
           },
           clavearea:{
                minlength: "Minimo 3 caracteres",
                maxlength: "Maximo 20 caracteres",
                required: "La clave del area es requerido",
								number: "Solo numeros"
           },
           nombremateria:{
                minlength: "Minimo 10 caracteres",
                maxlength: "Maximo 50 caracteres",
                required: "El nombre de la materia es requerido"
           },
           nombreabreviado:{
                minlength: "Minimo 1 caracteres",
                maxlength: "Maximo 50 caracteres",
                required: "El nombre abreviado de la materia es requerido"
           },
           numerocreditos:{
                number: "Solo numeros",
                required: "El numero de creditos es requerido"
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
           newMateria();
           return false;
       }
   });

	 $('#frmEditMateria').validate({
		 rules:{
				 clavemateria2:{
						 minlength: 3,
						 maxlength: 20,
						 required: true
				 },
				 clavearea2:{
							minlength: 3,
							maxlength: 20,
							required: true,
							number: true
				 },
				 nombremateria2:{
							minlength: 10,
							maxlength: 50,
							required: true
				 },
				 nombreabreviado2:{
							minlength: 1,
							maxlength: 50,
							required: true
				 },
				 numerocreditos2:{
							number: true,
							required: true
				 }
		 },
		 messages:{
					clavemateria2:{
						 minlength: "Minimo 3 caracteres",
						 maxlength: "Maximo 3 caracteres",
						 required: "El ID de la materia es requerido"
				 },
				 clavearea2:{
							minlength: "Minimo 3 caracteres",
							maxlength: "Maximo 20 caracteres",
							required: "La clave del area es requerido",
							number: "Solo numeros"
				 },
				 nombremateria2:{
							minlength: "Minimo 10 caracteres",
							maxlength: "Maximo 50 caracteres",
							required: "El nombre de la materia es requerido"
				 },
				 nombreabreviado2:{
							minlength: "Minimo 1 caracteres",
							maxlength: "Maximo 50 caracteres",
							required: "El nombre abreviado de la materia es requerido"
				 },
				 numerocreditos2:{
							number: "Solo numeros",
							required: "El numero de creditos es requerido"
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
				 updateMateria();
				 return false;
		 }
 });


    $('#tbMaterias').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"/TPAProyectoIntegrador/model/materias/getMaterias.php",
          dataSrc:function(json){

              return json['msg'];
          }
        },
        columns:[
            {
                data:"materiaid"
            },
            {
							data:function(row){
								srt = '<div >';
								 if(row["nivel_escolar"] === "L"){
									srt += '<p>Licenciatura</p>'
								 }else{
									srt += '<p>Postgrado</p>'
								 }
								srt +="<div>";

								return srt;
							}
            },
            {
                data:"materia_tipo"
            },
            {
                data:"clave_area"
            },
            {
                data: "nombre_completo"
            },
            {
                data: "nombre_abrev"
            },
            {
                data: "creditos"
            },
            {
                data: "nombrecarrera"
            },
            {
                data: function(row){
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteMateria("+ row["materiaid"] +")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showMateria("+row['materiaid']+")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }
            }

        ]


    });

		$("#btnModificar").on('click', function () {
		        $("#frmEditMateria").submit();
		    });

});

function deleteMateria (mid) {
	swal({title: "¿Estás seguro que deseas eliminar?",
			text: "No podrás recuperar la información después de borrarla.",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Sí, eliminar",
			closeOnConfirm: false},
					function () {
							$.ajax(
											{
													url: "/TPAProyectoIntegrador/model/materias/deleteMateria.php",
													type: "post",
													data: {materiaid: mid}
											}
							).done(
											function (data) {
													if (data.code === 200) {
															swal("Eliminado", data.msg, "success");
															$('#tbMaterias').dataTable().api().ajax.reload();
													} else {
															$.growl.error({message: data.msg});
													}
											}
							).fail(
											function (data) {
													swal({title: "Error", text: "Algo va mal, no se pudo eliminar", type: "error", confirmButtonText: "Cerrar"});
											}
							);

					}
	);

}

function showMateria (mid) {
		$.ajax({
	        url: '/TPAProyectoIntegrador/model/materias/getMateriaByID.php',
	        type: 'GET',
					data: {materiaid : mid}
	    }).done(function (json){
	        if(json.code===200){
						$('#clavemateria2').val(json.msg[0].clave_materia);
						$('#cbNivelEscolar2 > option[value="' + json.msg[0].nivel_escolar + '"]').attr('selected', 'selected');
						$('#cbMateriaTipo2 > option[value="' + json.msg[0].materia_tipo + '"]').attr('selected', 'selected');
						$('#clavearea2').val(json.msg[0].clave_materia);
						$('#nombremateria2').val(json.msg[0].nombre_completo);
						$('#nombreabreviado2').val(json.msg[0].nombre_abrev);
						$('#numerocreditos2').val(json.msg[0].creditos);
						$('#cbNombreCarrera2 > option[value="' + json.msg[0].idcarrera + '"]').attr('selected', 'selected');
					}
	        });
	  $('#materiaid').val(mid);
	  $("#modalMateria").modal("show");

}

function newMateria () {
    $.ajax({
        url: "/TPAProyectoIntegrador/model/materias/newMateria.php",
        type: "post",
        data: { clavemateria : $('#clavemateria').val(),
                cbNivelEscolar : $('#cbNivelEscolar').val(),
                cbMateriaTipo: $('#cbMateriaTipo').val(),
                clavearea: $('#clavearea').val(),
                nombremateria: $('#nombremateria').val(),
                nombreabreviado: $('#nombreabreviado').val(),
                numerocreditos: $('#numerocreditos').val(),
                cbNombreCarrera: $('#cbNombreCarrera').val()}
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbMaterias').dataTable().api().ajax.reload();
                $('#materiaid').val('');
                $('#clavearea').val('');
                $('#nombremateria').val('');
                $('#nombreabreviado').val('');
                $('#numerocreditos').val('');
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

function updateMateria(){
	$.ajax({
        url: "/TPAProyectoIntegrador/model/materias/updateMateria.php",
        type: "post",
        data: {materiaid: $('#materiaid').val(),
						clavemateria: $('#clavemateria2').val(),
            cbNivelEscolar: $('#cbNivelEscolar2').val(),
						cbMateriaTipo: $('#cbMateriaTipo2').val(),
						clavearea: $('#clavearea2').val(),
						nombremateria: $('#nombremateria2').val(),
						nombreabreviado: $('#nombreabreviado2').val(),
						numerocreditos: $('#numerocreditos2').val(),
						cbNombreCarrera: $('#cbNombreCarrera2').val()
					}
    }).done(
            function (data) {
                if (data.code === 200) {
                    $("#modalMateria").modal("hide");
                    $.growl.notice({message: data.msg});
                    $('#tbMaterias').dataTable().api().ajax.reload();
                } else {
                    $.growl.error({message: data.msg});
                }
            }
    ).fail(
            function () {
                $.growl.error({message: "No hay mensaje que mostrar"});
            }
    );
}
