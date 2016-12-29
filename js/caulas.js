$(function(){
$('#cAulas').trigger('click');

  $.ajax({
        url: '/TPAProyectoIntegrador/model/edificios/getEdificios.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        //console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            //console.log(row.rolename);
           $('<option></option>', {text: row.abreviacion}).attr('value',row.id).appendTo('#ubicacion'); 
        });
    });


	$('#frmAulas').validate({
		rules:{
			aula:{
				required: true
			},
			ubicacion:{
				required: true
			},
      capacidad:{
        required: true
      },
      observaciones:{
        required: true
      },
      status:{
        required: true
      }
		},
		messages:{
			aula:{
        required: "Campo requerido"
      },
      ubicacion:{
        required: "Campo requerido"
      },
      capacidad:{
        required: "Campo requerido"
      },
      observaciones:{
        required: "Campo requerido"
      },
      status:{
        required: "Campo requerido"
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
           console.log("Agraga Aula ALV");
           newAula();
           return false;
       }
	});


	$('#tbAulas').DataTable({
    responsive: true,
    language:{
      url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
    },
    ajax:{
      url:"/TPAProyectoIntegrador/model/aulas/getAulas.php",
      dataSrc:function(json){
        console.log(json['msg']);
      return json['msg'];
      }
    },
    columns:[
      {
        data:"id"
      },
      {
        data:"nombreAula"   
      },
      {
        data:"idEdificio"
      },
      {
        data:"capacidad"
      },
      {
        data:"observaciones"
      },
      {
        data: function(row){
          str="";
          if(row["estatus"]== 1){
            str="<div align='center'>";
            str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'updateAula("+row['id']+",0)'><i class='glyphicon glyphicon-ok'></i></button>";
            str+="<div>";  
          }else{
            str="<div align='center'>";
            str+= "&nbsp;<button id='btnEditar' class = 'btn btn-danger btn-xs' onClick = 'updateAula("+row['id']+",1)'><i class='glyphicon glyphicon-remove'></i></button>";
            str+="<div>";
          }

          return str;
        }  
      }

    ]
  });
});


function newAula(){
	var s = $('#status').val();
  if(s == 'on'){s=1;}else{s=0;}
  
  $.ajax({
    url: "/TPAProyectoIntegrador/model/aulas/newAula.php",
    type: "post",
    data: {	
      aula : $('#aula').val(),
      ubicacion : $('#ubicacion').val(),
      capacidad : $('#capacidad').val(),
      observaciones : $('#observaciones').val(),      
      status : s
    }
}).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbAulas').dataTable().api().ajax.reload();
                $('#aula').val('');
                //$('#ubicacion').val('');
                $('#capacidad').val('');
                $('#observaciones').val('');
                //$('#status').val();
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

function updateAula(id,status){
  $.ajax({
        url: "/TPAProyectoIntegrador/model/aulas/updateAula.php",
        type: "post",
        data: {	
        	id: id,
          status : status
    	}
}).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbAulas').dataTable().api().ajax.reload();
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