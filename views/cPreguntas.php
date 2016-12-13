<script type="text/javascript" src="js/cpreguntas.js"></script>
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form id="frmPreguntas" method="POST">
            <div class="form-group">
                <label class="control-label" for="pregunta">Pregunta:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="pregunta" name="pregunta" placeholder="Ingrese Pregunta">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="tipopregunta">Tipo</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-star"></i>
                    </span>
                    <input type="text" class="form-control" id="tipopregunta" name="tipopregunta" placeholder="Ingrese el Tipo">
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Guardar</button>
            </div>
        </form>
    </div>
</div>
<div><hr></div>
<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbPreguntas">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Preguntas</th>
                    <th>Tipo</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div id="modalPregunta" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true">x</button>
                    <h3>Modificar Preguntas</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="frmEditPregunta">
                    <div class="form-group">
                        <label class="control-label" for="pregunta">Pregunta:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="form-control" type="text" id="pregunta2" name="pregunta2" placeholder="Ingrese Pregunta">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="tipopregunta">Tipo</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-star"></i>
                            </span>
                            <input type="text" class="form-control" id="tipopregunta2" name="tipopregunta2" placeholder="Ingrese el Tipo">
                            <input type="hidden" id="idpregunta" name="idpregunta">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" id="btnModificar">Guardar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>