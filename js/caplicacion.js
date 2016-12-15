var apre = [];
var cont = 0;
$(function(){
	$.ajax({
        url: '../TPAProyectoIntegrador/model/aplicacionen/getStatusE.php',
        type: 'GET',
        dataType: 'json'
    }).done(
		function (json){			
			if(json.code===200)   
			$.each(json.msg, function(i,row){
				if(row.status==="S"){//1=No contestado
					contestado();
				}
				else{//2 = Contestado
					No_Contestado();
				}			
    	});
	});		

});

function No_Contestado(){
	$("#titulo2").hide();
	$("#titulo1").show();
$.ajax({
        url: '../TPAProyectoIntegrador/model/aplicacionen/getPreguntas.php',
        type: 'GET',
        dataType: 'json'
    }).done(
		function (json){    						
			$.each(json.msg, function(i,row){   cont++; apre[cont]="pregunta"+(i+1);
//            	console.log(row.pregunta);	
				varH="<div class='form-group'>";		
				varH+="<label class='control-label' for='pregunta'"+(1+i)+">Pregunta No."+(1+i)+" ¿"+row.pregunta+"?</label>";				
				if(row.tipoPregunta==="1"){
					varH+="<div class='input-group'>";
        	        varH+="<span class='input-group-addon'>";
    	            varH+="<i class='glyphicon glyphicon-pencil'></i>";
	                varH+="</span>";
					varH+="<input class='form-control' type='text' id='pregunta"+(i+1)+"' name='pregunta"+(i+1)+"' placeholder='Responde con honestidad'>";
					varH+="</div>";
				}
				else{
					varH+="<div class='input-group'>";
					varH+="<div class='btn-group '>";
					varH+="<label class='btn btn-default'>";
    				varH+="<input type='radio' name='pregunta"+(i+1)+"' id='pregunta"+(i+1)+"' class='' value='1'>NO</label>";
					varH+="<label class='btn btn-default'>";
    				varH+="<input type='radio' name='pregunta"+(i+1)+"' id='pregunta"+(i+1)+"' class='' value='2'>SI</label>";
					varH+="</div>";
					varH+="</div>";
				}
				varH+="</div>";				
				$('#frmAplicacion').append(varH);
		});		
		$('#frmAplicacion').append("<button type='submit' class='btn btn-success btn-md btn-block'><i class='glyphicon  glyphicon-floppy-disk'></i> ENVIAR</button>");
    });
	
	$('#frmAplicacion').validate({
       rules:{
          	
       },
       messages:{
          
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
           updateStatus();
		   //newContestado();
           return false;
       }
   });
}

function contestado(){			
			$("#frmAplicacion").hide();
			$("#frmAplicacion2").show();
}

function updateStatus(){
$.ajax({
        url: "../TPAProyectoIntegrador/model/aplicacionen/updateStatus.php",
        type: "post",
        data: $('#frmEditMaestro').serialize()
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });	
				contestado();								
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

function newContestado(){
	$.ajax({
        url: "../TPAProyectoIntegrador/model/aplicacionen/updateStatus.php",
        type: "post",
        data: $('#frmEditMaestro').serialize()
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });	
				contestado();								
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
