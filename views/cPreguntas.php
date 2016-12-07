<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form id="frmPregunta" method="POST">
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
                    <select class="form-control" id="tipopregunta" name="tipopregunta"></select>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Guardar</button>
            </div>
        </form>
    </div>
</div>