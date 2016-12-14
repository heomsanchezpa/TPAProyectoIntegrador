$(function(){
	$.ajax({
        url: '/../TPAProyectoIntegrador/model/aplicacionen/getPreguntas.php',
        type: 'GET',
        dataType: 'json'
    }).done(
		function (json){    
			$.each(json.msg, function(i,row){    	
            	console.log(row.pregunta);	
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
					varH+="<label class='btn btn-primary'>";
    				varH+="<input type='radio' name='gp"+(i+1)+"' id='gp"+(i+1)+"' class='' value='1'>NO</label>";
					varH+="<label class='btn btn-primary'>";
    				varH+="<input type='radio' name='gp"+(i+1)+"' class='' id='gp"+(i+1)+"' value='2'>SI</label>";
					varH+="</div>";
					varH+="</div>";
				}
				varH+="</div>";				
				$('#frmAplicacion').append(varH);
		});		
		$('#frmAplicacion').append("<button type='submit' class='btn btn-success btn-md btn-block'><i class='glyphicon  glyphicon-floppy-disk'></i> ENVIAR</button>");
    });
});