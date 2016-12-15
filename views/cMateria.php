<script type="text/javascript" src="js/cmateria.js"></script>
<script type="text/javascript" src="js/importxmlmateria.js"></script>
<!--AgregoMichel-->
<div id="modalimport" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Subir archivo:</h3>
            </div>
            <div class="modal-body">
            <label class="control-label">Selecciona el archivo XML</label>
            <input type="file" id="files" name="file" class="" accept=".xml"> <br/>
    
            </div>
    
            <div class="modal-footer">
                <button id="btnUpImport" type="button" class="btn-sm btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>

<div id="modalimportxls" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Subir archivo:</h3>
            </div>
            <div class="modal-body">
            <label class="control-label">Selecciona el archivo XLS</label>
            <input type="file" id="files" name="file" class="" accept=".xls"> <br/>
    
            </div>
    
            <div class="modal-footer">
                <button id="btnUpImportxls" type="button" class="btn-sm btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>

<!--/AgregoMichel-->

<div id="modalMateria" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Materia:</h3>
            </div>
            <div class="modal-body">
                <form  id="frmEditMateria">
                    <div class="form-group">
                <label class="control-label" for="materiaid2">Clave de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="materiaid2" name="materiaid2" placeholder="Ingrese la clave de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="nivelEscolar2">Nivel escolar:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbNivelEscolar2" id="cbNivelEscolar2" class="form-control">
                        <option value="L">Licenciatura</option>
                        <option value="P">Postgrado</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="materiaTipo2">Tipo de materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbMateriaTipo2" id="cbMateriaTipo2" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="clavearea2">Clave del area:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="clavearea2" name="clavearea2" placeholder="Ingrese la clave del area">
                </div>
            </div>      

            <div class="form-group">
                <label class="control-label" for="nombremateria2">Nombre de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="nombremateria2" name="nombremateria2" placeholder="Ingrese el nombre de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="nombreabreviado2">Nombre abreviado de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="nombreabreviado2" name="nombreabreviado2" placeholder="Ingrese el nombre abreviado de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="numerocreditos2">N° de creditos de la materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="numerocreditos2" name="numerocreditos2" placeholder="Ingrese el numero de creditos de la materia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="materiaTipo2">Nombre de la carrera a la que pertenece:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbNombreCarrera2" id="cbNombreCarrera2" class="form-control"></select>
                </div>
            </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModificar" type="button" class="btn-sm btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>




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

<!--Agrego Michel-->
<div class="col-md-6">
    <h1>Importar catalogo por XML</h1>
    <hr>
    <br/><button class="btn btn-default" id="importxml">Importar por XML</button>
    <hr>
</div>

<div class="col-md-6">
    <h1>Importar catalogo por XLS</h1>
    <hr>
    <br/><button class="btn btn-default" id="importxls">Importar por XLS</button>
    <hr>
</div>
<!--/Agrego Michel-->

<div class="row">&nbsp;</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbMaterias">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nivel Escolar</th>
                    <th>Tipo de Materia</th>
                    <th>Clave de area</th>
                    <th>Nombre completo</th>
                    <th>Nombre abreviado</th>
                    <th>N° creditos</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>