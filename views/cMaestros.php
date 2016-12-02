<script type="text/javascript" src="js/plugins/cmaestro.js"></script>
<script type="text/javascript" src="js/plugins/jszip.min.js"></script>
<script type="text/javascript" src="js/plugins/pdfmake.min.js"></script>
<script type="text/javascript" src="js/plugins/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/plugins/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">


<div id="modalMaestro" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Maestro</h3>
            </div>
            <div class="modal-body">
                <form  id="frmEditMaestro">
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="form-group">
                            <div class="hidden">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" type="text" id="no_tarjeta2" name="no_tarjeta2" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name2">Nombre:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" type="text" id="name2" name="name2" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="lastnameP2">Apellido paterno:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" type="text" id="lastnameP2" name="lastnameP2" placeholder="Ingrese el apellido paterno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="lastnameM2">Apellido materno:</label>
                            <div class="input-group">
                                <span class="input-group-addon" >
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" type="text" id="lastnameM2" name="lastnameM2" placeholder="Ingrese el apellido materno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="rfc2">RFC:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" type="text" id="rfc2" name="rfc2" placeholder="Ingrese el nombre del rol">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="form-group" style="margin-top: 15px">
                            <label class="control-label" for="clave_area2">Clave area:</label>
                            <div class="input-group" >
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <select id="clave_area2" name="clave_area2" class="form-control">
                                    <option value="121278">UD</option>
                                    <option value="217845">Centro computo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="area_academica2">Area academica:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <select id="area_academica2" name="area_academica2" class="form-control">
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
                                <label class="control-label" for="sexf" style="margin-left: 50px">
                                    <input class="radio" type="radio" name="sex2" value="F">
                                    F
                                </label>
                                <label class="control-label" for="sexm" style="margin-left: 50px">
                                    <input class="radio" type="radio" name="sex2" value="M">
                                    M
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnModal"  style="margin-right: 100px" class="btn-sm btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
            <th>Administrar</th>
        </tr>
    </thead>
</table>
</div>
</div>
