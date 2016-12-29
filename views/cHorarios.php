<script type="text/javascript" src="js/chorarios.js"></script>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form id="frmHorarios" method="POST">
        	<div class="form-group">                        
                <h1>Horario  <span class="label label-default"> Nuevo			
                </span></h1>
         	</div>
            
            <div class="form-group">
                <label class="control-label" for="materia">Materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-book"></i>
                    </span>
                    <input class="form-control" type="text" id="materia" name="materia" placeholder="Ingrese el nombre de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="maestro">Maestro:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="maestro" name="maestro" placeholder="Ingresa el rfc del maestro">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="hora_ini">Hora Inicio:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                    </span>
                    <input class="form-control" type="text" id="hora_ini" name="hora_ini" placeholder="Ingresa la hora de inicio">
                </div>
            </div>
            
             <div class="form-group">
                <label class="control-label" for="hora_fin">Hora Finalizar:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-time"></i>
                    </span>
                    <input class="form-control" type="text" id="hora_fin" name="hora_fin" placeholder="Ingresa la hora de finalizacion">
                </div>
            </div>
            
             <div class="form-group">
                <label class="control-label" for="grupo">Grupo:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-education"></i>
                    </span>
                    <select name="grupo" id="grupo" class="form-control"  >
                    <option value="" disabled="disabled" selected="selected">Selecciona un grupo</option>
                    </select>
                </div>
            </div>
            
             <div class="form-group">
                <label class="control-label" for="aula">Aula:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-home"></i>
                    </span>
                    <select name="aula" id="aula" class="form-control ">
						<option value="" disabled="disabled" selected="selected">Selecciona un Aula</option>
                    </select>
                </div>
            </div>
            
             <div class="form-group">
                <label class="control-label" for="dias">Dias a la semana:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-calendar"></i>
                    </span>
					<select name="dias" id="dias" class="form-control">
   	                    <option value="" disabled="disabled" selected="selected">Selecciona el numero de dias</option>
        				<option value="2">2</option>
			        	<option value="3">3</option>
				        <option value="4">4</option>
                     	<option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
						<option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>                        
	        <div>
                <button type="submit" class="btn btn-success btn-md btn-block"><i class="glyphicon  glyphicon-floppy-disk"></i> Guardar</button>
            </div>
        </form>
    </div>
</div>

<div class="row">&nbsp;</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbHorarios">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Maestro</th>
                    <th>Dias</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                    <th>Aula</th>
                    <th>Grupo</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div id="modalHorario" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
	        <div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="form-group">                        
                	<h3>Horario  
                    	<span class="label label-warning"> Editando			
                		</span>
                     </h3>
	         	</div>
             </div>             
             <div class="modal-body">     
	             <form class="form-horizontal" id="frmEditHorario" enctype="multipart/form-data">   
                 <input id="idHorario2" name="idHorario2"  type="hidden" />   
                 	<div class="form-group">
        		        <div class="input-group">
	                	    <span class="input-group-addon">
    	                	    <i class="glyphicon glyphicon-book"></i>
                                <label class="control-label" for="materia2">Materia:</label>
	                   		 </span>
        	            	<input class="form-control" type="text" id="materia2" name="materia2" placeholder="Ingrese el nombre de la materia">
    	            	</div>
            		</div>
                    <div class="form-group">                		
		                <div class="input-group">
            	        	<span class="input-group-addon">
                	        	<i class="glyphicon glyphicon-user"></i>
                                <label class="control-label" for="maestro2">Maestro:</label>
	                	    </span>
        	            	<input class="form-control" type="text" id="maestro2" name="maestro2" placeholder="Ingresa el rfc del maestro">
    	            	</div>
		            </div>
					<div class="form-group">                		
		                <div class="input-group">
        		            <span class="input-group-addon">
                	        	<i class="glyphicon glyphicon-time"></i>
                                <label class="control-label" for="hora_ini2">Hora Inicio:</label>
                    		</span>
                    		<input class="form-control" type="text" id="hora_ini2" name="hora_ini2" placeholder="Ingresa la hora de inicio">
                		</div>
            		</div>            
		            <div class="form-group">
                		<div class="input-group">
                    		<span class="input-group-addon">
                        		<i class="glyphicon glyphicon-time"></i>
									<label class="control-label" for="hora_fin2">Hora Finalizar:</label>
		                    </span>
        		            <input class="form-control" type="text" id="hora_fin2" name="hora_fin2" placeholder="Ingresa la hora de finalizacion">
                		</div>
            		</div>            
		            <div class="form-group">        		        
                		<div class="input-group">
                    		<span class="input-group-addon">
                        		<i class="glyphicon glyphicon-education"></i>
                                <label class="control-label" for="grupo2">Grupo:</label>
                    		</span>
	   		                    <select name="grupo2" id="grupo2" class="form-control" data-live-search="true"></select>
                		</div>
            		</div>            
		            <div class="form-group">        		        
                		<div class="input-group">
                    		<span class="input-group-addon">
                        		<i class="glyphicon glyphicon-home"></i>
                                <label class="control-label" for="aula2">Aula:</label>
                    		</span>
								<select name="aula2" id="aula2" class="form-control" data-live-search="true"></select>
                		</div>
            		</div>            
		            <div class="form-group">        		        
                		<div class="input-group">
                    		<span class="input-group-addon">
                        		<i class="glyphicon glyphicon-calendar"></i>
                                <label class="control-label" for="dias2">Dias a la semana:</label>
		                    </span>
							<select name="dias2" id="dias2" class="form-control">
								<option value="2">2</option>
					        	<option value="3">3</option>	
						        <option value="4">4</option>
                		     	<option value="5">5</option>
                        		<option value="6">6</option>
		                        <option value="7">7</option>
								<option value="8">8</option>
                		        <option value="9">9</option>
		                    </select>
        		        </div>
            		</div>                       
                    <div class="modal-footer">              
                    	<button  id="btnEditHorario" class="btn btn-warning btn-md btn-block"><i class="glyphicon glyphicon-edit"></i> Editar</button>
                    </div>
                 </form>
             </div>
    	</div>
	</div>
</div>                    
