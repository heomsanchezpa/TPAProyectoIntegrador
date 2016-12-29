<?php
?>
<script type="text/javascript" src="js/calumno.js"></script>
<link rel="stylesheet" type="text/css" href="css/switch.css">

<div id="modalAlumno" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Alumno:</h3>
            </div>
            <div class="modal-body">
                
                <form  id="frmEditAlumno">
                    <div class="form-group">
                        <label class="control-label" for="no_control2">Número de control:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="form-control" type="text" id="no_control2" name="no_control2" placeholder="Ingrese el número de control">
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="carrera2">Carrera:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-king"></i>
                            </span>
                            <select name="cbCarreras2" id="cbCarreras2" class="form-control"></select>
                        </div>
                    </div><!--
                    <div class="form-group">
                        <label class="control-label" for="carrera2">Carrera:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="form-control" type="text" id="carrera2" name="carrera2" placeholder="Ingrese la carrera">
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label class="control-label" for="semestre2">Semestre:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="number" id="semestre2" name="semestre2" placeholder="Ingrese el semestre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="status2">Status:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <select id="status2" name="status2" class="form-control">
                                <option value="A">Activo</option>
                                <option value="I">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="reticula2">Reticula:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="reticula2" name="reticula2" placeholder="Ingrese la reticula">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="especialidad2">Especialidad:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="especialidad2" name="especialidad2" placeholder="Ingrese la especialidad">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="nombres2">Nombres:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="nombres2" name="nombres2" placeholder="Ingrese el/los nombres">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="apellido_pat2">Apellido Paterno:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="apellido_pat2" name="apellido_pat2" placeholder="Ingrese el apellido paterno">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="apellido_mat2">Apellido Materno:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="apellido_mat2" name="apellido_mat2" placeholder="Ingrese el apellido materno">
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label class="control-label" for="fechanac2">Fecha de nacimiento:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="date" id="fechanac2" name="fechanac2">
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="control-label" for="fecha_nac2">Fecha de nacimiento:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="fecha_nac2" name="fecha_nac2" placeholder="Ingrese el fecha">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="curp2">Curp:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="curp2" name="curp2" placeholder="Ingrese la CURP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="sexo2">Sexo:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <select id="sexo2" name="sexo2" class="form-control">
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="ingreso2">Periodo de ingreso:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="ingreso2" name="ingreso2" placeholder="Ingrese el periodo de ingreso">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="promedio2">Promedio:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="promedio2" name="promedio2" placeholder="Ingrese el promedio">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="creditos_aprobados2">Creditos aprobados:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="number" id="creditos_aprobados2" name="creditos_aprobados2" placeholder="Ingrese los creditos aprbados">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="creditos_cursados2">Creditos cursados:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="number" id="creditos_cursados2" name="creditos_cursados2" placeholder="Ingrese los creditos cursados">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email2">Email:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="email2" name="email2" placeholder="Ingrese el email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="nacionalidad2">Nacionalidad:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="nacionalidad2" name="nacionalidad2" placeholder="Ingrese la nacionalidad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="nip2">NIP:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="nip2" name="nip2" placeholder="Ingrese el nip">
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

        <form id="frmAlumno" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="no_control">Número de control:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="form-control" type="text" id="no_control" name="no_control" placeholder="Ingrese el número de control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="carrera">Carrera:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-king"></i>
                            </span>
                            <select name="carrera" id="carrera" class="form-control"></select>
                        </div>
                    </div>
                    <!--
                    <div class="form-group">
                        <label class="control-label" for="carrera">Carrera:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input class="form-control" type="text" id="carrera" name="carrera" placeholder="Ingrese la carrera">
                        </div>
                    </div>-->


                    <div class="form-group">
                        <label class="control-label" for="semestre">Semestre:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="number" id="semestre" name="semestre" placeholder="Ingrese el semestre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="status">Status:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <select id="status" name="status" class="form-control">
                                <option value="A">Activo</option>
                                <option value="I">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="reticula">Reticula:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="reticula" name="reticula" placeholder="Ingrese la reticula">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="especialidad">Especialidad:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="especialidad" name="especialidad" placeholder="Ingrese la especialidad">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="nombres">Nombres:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="nombres" name="nombres" placeholder="Ingrese el/los nombres">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="apellido_pat">Apellido Paterno:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="apellido_pat" name="apellido_pat" placeholder="Ingrese el apellido paterno">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="apellido_mat">Apellido Materno:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="apellido_mat" name="apellido_mat" placeholder="Ingrese el apellido materno">
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label class="control-label" for="fechanac2">Fecha de nacimiento:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="date" id="fechanac2" name="fechanac2">
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="control-label" for="fecha_nac">Fecha de nacimiento:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="fecha_nac" name="fecha_nac" placeholder="Ingrese el fecha">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="curp">Curp:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="curp" name="curp" placeholder="Ingrese la CURP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="sexo">Sexo:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <select id="sexo" name="sexo" class="form-control">
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="periodo_ingreso">Periodo de ingreso:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="periodo_ingreso" name="periodo_ingreso" placeholder="Ingrese el periodo de ingreso">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="promedio">Promedio:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="promedio" name="promedio" placeholder="Ingrese el promedio">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="creditos_aprobados">Creditos aprobados:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="number" id="creditos_aprobados" name="creditos_aprobados" placeholder="Ingrese los creditos aprbados">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="creditos_cursados">Creditos cursados:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="number" id="creditos_cursados" name="creditos_cursados" placeholder="Ingrese los creditos cursados">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese el email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="nacionalidad">Nacionalidad:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="nacionalidad" name="nacionalidad" placeholder="Ingrese la nacionalidad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="nip">NIP:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </span>
                            <input class="form-control" type="text" id="nip" name="nip" placeholder="Ingrese el nip">
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
        <table id="tbAlumnos" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Operaciones</th>
                    <th>Número de control</th>
                    <th>Carrera</th>
                    <th>Semestre</th>
                    <th>Status</th>
                    <th>Reticula</th>
                    <th>Especialidad</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de nacimiento</th>
                    <th>CURP</th>
                    <th>Sexo</th>
                    <th>Periodo de ingreso</th>
                    <th>Promedio</th>
                    <th>Creditos aprobados</th>
                    <th>Creditos cursados</th>
                    <th>Email</th>
                    <th>Nacionalidad</th>
                    <th>NIP</th>     
                                                                                           
                </tr>
            </thead>
        </table>
    </div>
</div>