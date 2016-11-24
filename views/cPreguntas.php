<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Preguntas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

    <body>
        <div class="container"> 
            <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-8 col-xs-8 col-sm-offset-2 col-lg-offset-2 col-md-offset-2">
                    <form id="frmPregunta">
                        <div class="form-group">
                            <label class="control-label" for="pregunta">Agregar Pregunta</label>
                            <div class="input-group" >
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </span>
                                <input class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta">
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
                        
                        <div align="right">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="glyphicon glyphicon-save"></i>
                                Guardar
                            </button>
                        </div>

                    </form>  
                    <form id="frmRespuesta">

                        <div class="form-group">
                            <label class="control-label" for="cbpregunta">Pregunta</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-question-sign"></i>
                                </span>
                                <select class="form-control" id="cbpregunta" name="cbpregunta"></select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="pregunta">Agregar Respuesta</label>
                            <div class="input-group" >
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </span>
                                <input class="form-control" id="respuesta" name="respuesta" placeholder="Respuesta">
                            </div>
                        </div>
                        
                        <div align="right">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="glyphicon glyphicon-save"></i>
                                Guardar
                            </button>
                        </div>

                    </form>    
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/jquery.growl.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/jquery3.1.0.min.js"></script>
        <script src="js/bootbox.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.growl.js" type="text/javascript"></script>
    </body>
</html>
