<?php
/**
 * Created by PhpStorm.
 * User: Armando_Navarro
 * Date: 29/11/2016
 * Time: 09:22 AM
 */


?>

<script type="text/javascript" src="js/ccarrera.js"></script>
<script type="text/javascript" src="js/importxmlcarrera.js"></script>
<link rel="stylesheet" type="text/css" href="css/switch.css">


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


<div class="container">
    <div id="modalCarrera" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h3>Modificar Carrera</h3>
                </div>
                <div class="modal-body">
                    <form id="frmEditCarrera">


                        <div class="form-group">
                            <label class="control-label" for="nombreCarrera2">Carrera</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input class="form-control" id="nombreCarrera2" name="nombreCarrera2" placeholder="Nombre de la Carrera">
                                <input class="form-control" id="planEstudios2" name="planEstudios2" placeholder="Plan de estudios">
                                <input type="hidden" id="idcarrera" name="idcarrera">
                            </div>
                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" id="btnModificar">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 ">
        <form id="frmCarrera" >

            <label class="control-label" for="nombreCarrera">Carrera:</label>
            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" placeholder="Nombre de la carrera">

            </div>

            <label class="control-label" for="planEstudios">Plan de estudios:</label>
            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                <input type="text" class="form-control" id="planEstudios" name="planEstudios" placeholder="Plan de estudios">
            </div>
            <div class="row">&nbsp;</div>

            <button type="submit" class="btn btn-block btn-warning btn-md">Guardar</button>
        </form>
    </div>

    <div class="row"></div>
    
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
            <table id="tbCarrera">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Carrera</th>
                    <th>Plan de estudios</th>
                    <th>Operaciones</th>


                </tr>
                </thead>
            </table>
        </div>
    </div>

    </div>