<script type="text/javascript" src="js/cmaestro.js"></script>
<div class="container">
    <form id="frmMaestro" method="POST">
        <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
            <div class="form-group">
                <label class="control-label" for="no_tarjeta">No Tarjeta:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="no_tarjeta" name="no_tarjeta" placeholder="Ingrese el nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="name">Nombre:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Ingrese el nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="lastnameP">Apellido paterno:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="lastnameP" name="lastnameP" placeholder="Ingrese el apellido paterno">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="lastnameM">Apellido materno:</label>
                <div class="input-group" style="height: 48.6px;">
                    <span class="input-group-addon" >
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" style="height: 48.6px;" type="text" id="lastnameM" name="lastnameM" placeholder="Ingrese el apellido materno">
                </div>
            </div>
        </div>
        <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
            <div class="form-group">
                <label class="control-label" for="rfc">RFC:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" type="text" id="rfc" name="rfc" placeholder="Ingrese el nombre del rol">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="clave_area">Clave area:</label>
                <div class="input-group" >
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <select id="clave_area" name="clave_area" class="form-control">
                        <option value="121278">UD</option>
                        <option value="217845">Centro computo</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="area_academica">Area academica:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <select id="area_academica" name="area_academica" class="form-control">
                        <option value="120400">Electrica</option>
                        <option value="111100">Sistemas</option>
                    </select>
                </div>
            </div>
            <div class="form-group" align-items="center" >
                <label class="control-label">Sexo:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <label class="control-label" for="sexf" style="margin-left: 200px;">
                        <input class="radio" style="margin-top: 10px; margin-left: 25px;" type="radio"  name="sex" value="F"> 
                        Femenino
                    </label>
                    <label class="control-label" for="sexm" style="margin-left: 20px;">
                        <input class="radio" type="radio" style="margin-left: 25px;"  name="sex" value="M"> 
                        Masculino
                    </label>
                </div>
            </div>
        </div>
        <div align="right">
            <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="glyphicon glyphicon-save"></i>Guardar</button>
        </div>
    </form>
</div>
<div class="row">
  <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <table id="tableMaestros" class="table-responsive table-striped">
        <thead>
         <tr>
            <th>No tarjeta</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>RFC</th>
            <th>Clave area</th>
            <th>Area academica</th>
            <th>Sexo</th>
        </tr>
        </thead>    
    </table>
    </div>
</div>
