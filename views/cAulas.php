        <script type="text/javascript" src="js/caulas.js"></script>
        <!--<div class="container">-->
            <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form id="frmAulas">
                            <div class="form-group">
                                <label class="control-label" for="aula">Aula:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-new-window"></i>
                                    </span>
                                    <input class="form-control " id="aula" name="aula" placeholder="Nombre del Aula">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label" for="ubicacion">Edificio:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <select class="form-control " id="ubicacion" name="ubicacion" ></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="capacidad">Capacidad:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-flash"></i>
                                    </span>
                                    <input type="number" class="form-control " id="capacidad" name="capacidad" placeholder="Capacidad">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="observaciones">Observaciones:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-flash"></i>
                                    </span>
                                    <input class="form-control " id="observaciones" name="observaciones" placeholder="Observaciones">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="estatus">¿Permite cruce?:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-flash"></i>
                                    </span>
                                    <input type="checkbox" class="form-control " id="status" name="status">
                                </div>
                            </div>
                            <div align="right">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="glyphicon glyphicon-save-file"></i>Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--</div>-->
        <div class="row">&nbsp;</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbAulas">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Aula</th>
                    <th>Edificio</th>
                    <th>Capacidad</th>
                    <th>Observaciones</th>
                    <th>Status</th>
                </tr>
            </thead>
        </table>
    </div>
</div>