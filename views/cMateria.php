<script type="text/javascript" src="js/cmateria.js"></script>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form id="frmMateria" method="POST">
            <div class="form-group">
                <label class="control-label" for="materiaid">Clave de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="materiaid" name="materiaid" placeholder="Ingrese la clave de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="nivelEscolar">Nivel escolar:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbNivelEscolar" id="cbNivelEscolar" class="form-control">
                    	<option value="L">Licenciatura</option>
                    	<option value="P">Postgrado</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="materiaTipo">Tipo de materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbMateriaTipo" id="cbMateriaTipo" class="form-control">
                    	<option value="1">1</option>
                    	<option value="2">2</option>
                    	<option value="3">3</option>
                    </select>
                </div>
            </div>

			<div class="form-group">
                <label class="control-label" for="clavearea">Clave del area:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="clavearea" name="clavearea" placeholder="Ingrese la clave del area">
                </div>
            </div>
				

			<div class="form-group">
                <label class="control-label" for="nombremateria">Nombre de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="nombremateria" name="nombremateria" placeholder="Ingrese el nombre de la materia">
                </div>
        	</div>

            

			<div class="form-group">
                <label class="control-label" for="nombreabreviado">Nombre abreviado de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="nombreabreviado" name="nombreabreviado" placeholder="Ingrese el nombre abreviado de la materia">
                </div>
            </div>

      
        	<div class="form-group">
                <label class="control-label" for="numerocreditos">N° de creditos de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="numerocreditos" name="numerocreditos" placeholder="Ingrese el numero de creditos de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="materiaTipo">Nombre de la carrera a la que pertenece:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbNombreCarrera" id="cbNombreCarrera" class="form-control"></select>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Guardar</button>
            </div>
        </form>
    </div>
</div>