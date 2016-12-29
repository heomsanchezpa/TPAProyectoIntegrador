

$(function(){
	$('#frmEdificio').validate({
		rules:{
			edificioname:{
				required: true
			},
			edificioabreviacion:{
				required: true
			}
		},
		messages:{
			edificioname:{
				required: "Campo Requerido"
			},
			edificioabreviacion:{
				required: "Campo Requerido"
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
           newEdificio();
           //console.log($('#edificioname').val()+"");
           return false;
       }
	});


	$('#tbEdificios').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"http://localhost/TPAProyectoIntegrador/model/edificios/getEdificios.php",
          dataSrc:function(json){
              
              return json['msg'];
          }
        },
        columns:[
            {
                data:"id"
            },
            {
                data:"nombreEdificio"   
            },
            {
                data:"abreviacion"
            },
            {
                data: function(row){
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteEdificio("+ row["id"] +")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showEdificio("+row['id']+",\"" + row['nombreEdificio'] + "\",\"" + row['abreviacion'] + "\")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }  
            }

        ]
            
        
    });

});


function newEdificio(){
	$.ajax({
        url: "http://localhost/TPAProyectoIntegrador/model/edificios/newEdificio.php",
        type: "post",
        data: {	
        		edificioname : $('#edificioname').val(),
                edificioabreviacion : $('#edificioabreviacion').val()
                
    }
}).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbEdificios').dataTable().api().ajax.reload();
                $('#edificioname').val('');
                $('#edificioabreviacion').val('');
                
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

function deleteEdificio(idEdificio){
	bootbox.confirm({
        title: "Eliminar",
        message: "¿Desea eliminar el edificio?",
        buttons: {
            cancel: {
            },
            confirm: function () {

			$.ajax({
        		url: "http://localhost/TPAProyectoIntegrador/model/edificios/deleteEdificios.php",
        		type: "post",
        		data: {	
        			id : idEdificio
    			}
			}).done(
        		function(data){
            		if(data.code === 200){
                		$.growl.notice({ message: data.msg });
                		$('#tbEdificios').dataTable().api().ajax.reload();
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
        },
        callback: function (result) {
        }
    });
}

function showEdificio(id, nombre, abre){
	$('#id').val(id);
	$('#edificioname2').val(nombre);
	$('#edificioabreviacion2').val(abre);
	$('#modalEdificio').modal("show");

	$(function () {
		$('#frmEditEdificio').validate({
			rules:{
				edificioname2:{
					required: true
				},
				edificioabreviacion2:{
					required: true
				}
			},
			messages:{
				edificioname2:{
					required: "Campo Requerido"
				},
				edificioabreviacion2:{
					required: "Campo Requerido"
				}
			},
       		submitHandler: function(form){
           		updateEdificio($('#id').val(),$('#edificioname2').val(),$('#edificioabreviacion2').val());
           		return false;
       		}
		});
	});	
}

function updateEdificio(id, nombre, abre){
	$.ajax({
        url: "http://localhost/TPAProyectoIntegrador/model/edificios/updateEdificio.php",
        type: "post",
        data: {	
        	id: id,
        	edificioname : nombre,
            edificioabreviacion : abre
    	}
}).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbEdificios').dataTable().api().ajax.reload();
                $('#id').val('');
                $('#edificioname2').val('');
                $('#edificioabreviacion2').val('');
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
    $('#modalEdificio').modal("hide");
}