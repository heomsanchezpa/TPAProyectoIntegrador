
$(function(){

	$('#cUsuario').trigger('click');

	$.ajax({
        url: '/TPAProyectoIntegrador/model/roles/getRoles.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        if(json.code===200)
        $.each(json.msg, function(i,row){
           $('<option></option>', {text: row.rolename}).attr('value',row.roleid).appendTo('#cbRoles');
           $('<option></option>', {text: row.rolename}).attr('value',row.roleid).appendTo('#cbRoles2');

        });
    });



    $('#frmUser').validate({
       rules:{
           username:{
               minlength: 3,
               maxlength: 20,
               required: true
           },
           password:{
           		minlength: 3,
               maxlength: 20,
               required: true
           }
       },
       messages:{
           username:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture el nombre de usuario"
           },
           password:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture una contraseña"
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
           newUser();
           return false;
       }
   });

$('#frmEdiUser').validate({
       rules:{
           username2:{
               minlength: 3,
               maxlength: 20,
               required: true
           },
           password2:{
              minlength: 3,
               maxlength: 20

           }
       },
       messages:{
           username2:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",
               required: "Capture el nombre de usuario"
           },
           password2:{
               minlength: "Introduzca al menos tres caracteres",
               maxlength: "Introdusca menos de 20 caracteres",

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
           updateUser();
           return false;
       }
   });



    $('#tbUsers').DataTable({
    	responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"/TPAProyectoIntegrador/model/usuario/getUsers.php"  ,
          dataSrc:function(json){

              return json['msg'];
          }
        },
        columns:[
            {
           		data:"usuarioid"
            },
            {
            	data:"usuarioname"
            },
            {
                data:"password"
            },
            {
                data:function(row){
                	srt = "";
                	if(row["roleid"] === "1"){
                		srt = "Administrador";
    				}else if(row["roleid"] === "2"){
						srt = "Maestro";
    				}else{
    					srt = "Alumno";
    				}
                	return srt;
                }
            },
            {

            	data:function(row){
                srt = '<div >';
      			     if(row["status"] === "a"){
                  srt += '<p>Activo</p>'
                 }else{
                  srt += '<p>Inactivo</p>'
                 }
                srt +="<div>";

                return srt;
              }
            },
            {
            	data: function(row){
                  str="<div >";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showUSer("+row['usuarioid']+")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }
            }

        ]


    });

		$("#btnModificar").on('click', function () {
				$("#frmEdiUser").submit();
    });


});

function showUSer (userid) {
	$.ajax({
        url: '/TPAProyectoIntegrador/model/usuario/getUSerByID.php',
        type: 'GET',
				data: {userid : userid}
    }).done(function (json){
        if(json.code===200){
					$('#username2').val(json.msg[0].usuarioname);
					$('#cbRoles2 > option[value="' + json.msg[0].roleid + '"]').attr('selected', 'selected');
					$('#status2 > option[value="' + json.msg[0].status + '"]').attr('selected', 'selected');

				}
        });
  $('#usuarioid').val(userid);
  $("#modalUser").modal("show");
}



function checkbutton () {
    $("[name='my-checkbox']").bootstrapSwitch();
}

function newUser(){
    $.ajax({
        url: "/TPAProyectoIntegrador/model/usuario/newUser.php",
        type: "post",
        data: {username : $('#username').val(),
               password : $('#password').val(),
               roleid: $('#cbRoles').val()}
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
				$('#tbUsers').dataTable().api().ajax.reload();
                $('#username').val('');
                $('#password').val('');
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

function updateUser(){
	$.ajax({
        url: "/TPAProyectoIntegrador/model/usuario/updateUser.php",
        type: "post",
        data: {userid: $('#usuarioid').val(),
            username: $('#username2').val(),
						password: $('#password2').val(),
						status: $('#status2').val(),
						roleid: $('#cbRoles2').val()
						}
    }).done(
            function (data) {
                if (data.code === 200) {
                    $("#modalUser").modal("hide");
                    $.growl.notice({message: data.msg});
                    $('#tbUsers').dataTable().api().ajax.reload();
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
