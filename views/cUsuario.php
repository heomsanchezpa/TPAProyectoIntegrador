<script type="text/javascript" src="js/cusuario.js"></script>

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