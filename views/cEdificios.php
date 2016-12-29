
        <!--script type="text/javascript" src="../js/plugins/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap.min.js"></script>
        

        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen"-->
    <script type="text/javascript" src="js/importxmledificios.js"></script>
    
<script type="text/javascript" src="js/cedificios.js"></script>

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
    
<div id="modalEdificio" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true">x</button>
                    <h3>Modificar Edificio</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="frmEditEdificio">
                    <div class="form-group">
                        <label class="control-label" 
                                for="edificioname2">Nombre del edificio</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input type="hidden" id="id" name="id"/>
                            <input class="form-control" id="edificioname2" name="edificioname2" placeholder="Nombre del Edificio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label"
                            for="edificioabreviacion2">Abreviacion</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-qrcode"></i>
                            </span>
                            <input class="form-control " id="edificioabreviacion2" name="edificioabreviacion2" placeholder="Abreviación">
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

<div class="row">
    <div class="col col-lg-8 col-md-8 col-sm-8 col-xs-8 col-sm-offset-2">
        <form id="frmEdificio">
                <div class="form-group">
                    <label class="control-label" for="edificioname">Nombre del Edifico</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-new-window"></i>
                        </span>
                        <input class="form-control " id="edificioname" name="edificioname" placeholder="Nombre del Edifico">
                    </div>
                </div>                            
                <div class="form-group">
                    <label class="control-label" for="edificioabreviacion">Abreviación</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-flash"></i>
                        </span>
                        <input class="form-control " id="edificioabreviacion" name="edificioabreviacion" placeholder="Abreviación">
                    </div>
                </div>
                            
                <div>
                    <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Guardar</button>
                </div>   
        </form>
    </div>
</div>
<div class="row">&nbsp;</div>

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

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbEdificios">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre del Edificio</th>
                    <th>Abreviación</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>