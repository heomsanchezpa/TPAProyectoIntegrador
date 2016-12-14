<script type="text/javascript" src="js/cusuario.js"></script>
<script type="text/javascript" src="js/importxml.js"></script>

<div id="modalUser" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Usuario:</h3>
            </div>
            <div class="modal-body">
                <form  id="frmEdiUser">

                    <div class="form-group">
                        <label class="control-label" for="username2">Usuario:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="hidden" id="usuarioid" name="usuarioid"/>
                            <input class="form-control" type="text" id="username2" name="username2" placeholder="Ingrese el nombre de usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password2">Contraseña:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="password" id="password2" name="password2" placeholder="Ingrese una contraseña">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="rolename2">Rol:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-king"></i>
                            </span>
                            <select name="cbRoles2" id="cbRoles2" class="form-control"></select>
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





<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form id="frmUser" method="POST">
            <div class="form-group">
                <label class="control-label" for="username">Usuario:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Ingrese el nombre de usuario">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="password">Contraseña:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-eye-close"></i>
                    </span>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Ingrese una contraseña">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="rolename">Rol:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-king"></i>
                    </span>
                    <select name="cbRoles" id="cbRoles" class="form-control"></select>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-save"></i>Guardar</button>
            </div>
        </form>
    </div>
</div>
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

<div class="row">&nbsp;</div>
<br/>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbUsers">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Rol</th>
                    <th>Status</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>