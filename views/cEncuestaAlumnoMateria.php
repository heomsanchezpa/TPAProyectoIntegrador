<script type="text/javascript" src="js/cencuestaalumnomateria.js"></script>
<script type="text/javascript" src="js/plugins/toXML.js"></script>


<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form id="frmEncuestaAlumnoMateria" method="POST">


            <div class="form-group">
                            <label class="control-label" for="cbCarrera">Seleccione carrera:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-king"></i>
                                </span>
                                <select name="cbCarrera" id="cbCarrera" class="form-control">
                                	<option value="L">Ingenieria en Sistemas Computacionales</option>
                                </select>
                            </div>
                        </div>

            <div class="form-group">
                <label class="control-label" for="cbMateria">Seleccione materia:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbMateria" id="cbMateria" class="form-control">
                    	<option value="L">Ingenieria de Software</option>
                    	<option value="P">Gestion de proyectos de software</option>
                    </select>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Consultar</button>
            </div>
        </form>
    </div>
</div>

<div class="row">&nbsp;</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbMaterias">
            <thead>
                <tr>
                    <th>No Control</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Carrera</th>
                    <th>Semestre</th>
                    <th>Estado Encuesta</th>

                </tr>
            </thead>
        </table>
    </div>
    <button onclick="xml_generate()" class="btn btn-group-justified btn-info">Guardar XML</button>
</div>

