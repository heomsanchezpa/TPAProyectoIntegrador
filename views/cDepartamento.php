<script type="text/javascript" src="js/cdepartamento.js"></script>

<div id="modalDepartamento" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Departamento:</h3>
            </div>
            <div class="modal-body">
                <form  id="frmEditDepartamento">

                    <div class="form-group">
                        <label class="control-label" for="claveArea">Clave area:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <!--input class="hidden" id="claveArea" name="claveArea"/-->
                            <input class="form-control" type="text" id="claveArea" name="claveArea" placeholder="Ingrese claveArea">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="descripcionArea">Descripcion Area</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="descripcionArea" id="descripcionArea" name="descripcionArea" placeholder="Ingrese descripcionArea">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="areaDepende">Area depende:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-king"></i>
                            </span>
                              <input class="form-control" type="areaDepende" id="areaDepende" name="areaDepende" placeholder="Ingrese areaDepende">
                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="nivel">Nivel</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                              <input class="form-control" type="nivel" id="nivel" name="nivel" placeholder="nivel">
                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="tipoArea">Tipo Area:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-king"></i>
                            </span>
                              <input class="form-control" type="tipoArea" id="tipoArea" name="tipoArea" placeholder="Ingrese tipoArea">
                        
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

        <form id="frmDepartamento" method="POST">
            <div class="form-group">
                <label class="control-label" for="claveArea">Clave area:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="claveArea" name="claveArea" placeholder="Ingrese claveArea">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="descripcionArea">Descripcion area:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-eye-close"></i>
                    </span>
                    <input class="form-control" type="descripcionArea" id="descripcionArea" name="descripcionArea" placeholder="Ingrese descripcionArea">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="areaDepende">area depende:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                     <input class="form-control" type="areaDepende" id="areaDepende" name="areaDepende" placeholder="Ingrese areaDepende">
               
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="nivel">nivel:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-eye-close"></i>
                    </span>
                    <input class="form-control" type="nivel" id="nivel" name="nivel" placeholder="Ingrese nivel">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="tipoArea">tipo Area:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span> 
                    <input class="form-control" type="tipoArea" id="tipoArea" name="tipoArea" placeholder="Ingrese tipoArea">
               
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Guardar</button>
            </div>
        </form>
    </div>
</div>

<div class="row">&nbsp;</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <!--aqui falta cambiar-->
        <table id="tbDepartamento">
            <thead>
                <tr>
                    <th>Clave Area</th>
                    <th>Descripcion Area</th>
                    <th>Area Depende</th>
                    <th>Nivel</th>
                    <th>Tipo Area</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>