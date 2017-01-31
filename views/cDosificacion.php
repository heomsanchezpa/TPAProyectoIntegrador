
<meta charset="UTF-8">
<script type="text/javascript" src="js/cdocificacion.js"></script>
<script type="text/javascript" src='js/plugins/pdfmake.min.js'></script>
<script type="text/javascript" src='js/plugins/vfs_fonts.js'></script>
<link rel="stylesheet" type="text/css" href="css/dosi.css">

<div id="modalDosi" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Dosificación:</h3>
            </div>
            <div class="modal-body blockcenter">
                <div class="container col-lg-12 col-md-12 col-sm-12">
                    <form id="frmDosificacion2"  class="form-horizontal" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label" for="periodo2">Periodo</label>
                                <div class="input-group">
                                    <select class="form-control" id="periodo2" name="periodo2">
                                        <option value="ENE-JUN">ENE-JUN</option>
                                        <option value="AGO-DIC">AGO-DIC</option>
                                        <option value="VERANO">VERANO</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label" for="anioPeriodo2">Año del Periodo</label>
                                <div class="input-group">

                                    <input class="form-control" type = "number" id="anioPeriodo2" name="anioPeriodo2" placeholder="Año" min="2017" max="9999">
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label" for="asignatura2">Asignatura</label>
                                <div class="input-group">

                                    <select class="form-control" id="asignatura2" name="asignatura2">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="maestro2">Maestro</label>
                                <div class="input-group">

                                    <select class="form-control" id="maestro2" name="maestro2">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label"
                                       for="carrera2">Carrera (s)</label>
                                <div class="input-group">
                                    <select class="form-control" id="carrera2" name="carrera2">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="horasTeoria2">Horas Teoricas</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <input type = "number"  min="0" max="10" class="form-control" id="horasTeoria2" name="horasTeoria2" placeholder="Horas Teoricas">
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="horasPracticas2">Horas Prácticas</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <input type = "number"  min="0" max="10" class="form-control" id="horasPracticas2" name="horasPracticas2" placeholder="Horas Prácticas">
                                </div>
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="caracterizacionDeLaAsignatura2">Caracterización de la asignatura</label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="5" id="caracterizacionDeLaAsignatura2" name="caracterizacionDeLaAsignatura2" placeholder="Caracterización de la asignatura"></textarea>
                                </div>
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="intencionDidactica2">Intención Didáctica</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <textarea class="form-control" rows="5" id="intencionDidactica2" name="intencionDidactica2" placeholder="Intención Didáctica"></textarea>
                                </div>
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="competenciaAsignatura2">Competencia de la asignatura</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <textarea class="form-control" rows="5" id="competenciaAsignatura2" name="competenciaAsignatura2" placeholder="Competencia de la asignatura"></textarea>
                                </div>
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label"
                                       for="fuentesInformacion2">Fuentes de información y apoyos didácticos</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <textarea class="form-control" rows="5" id="fuentesInformacion2" name="fuentesInformacion2" placeholder="Fuentes de información y apoyos didácticos"></textarea>
                                </div>
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="row">
                            <label class="control-label" for="divTablaCalendarizacion2">Calendarización de evaluación en semanas</label>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="divTablaCalendarizacion2" class="table-responsive">
                                <!--Quitar algo de por aqui-->
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 row">
                                <label class="control-label" for="agregarEvaluacion2">Agregar Evaluación</label>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12" id="agregarEvaluacion2">
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label"
                                               for="tiempoEvaluacion2">Tiempo</label>
                                        <div class="input-group">
                                            <select class="form-control" id="tiempoEvaluacion2" name="tiempoEvaluacion2">
                                                <option value="0">Tiempo Planeado</option>
                                                <option value="1">Tiempo Real</option>
                                                <option value="2">Seguimiento departamental</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label" for="tipoEvaluacion2">Evaluación</label>
                                        <div class="input-group">
                                            <select class="form-control" id="tipoEvaluacion2" name="tipoEvaluacion2">
                                                <option value="ES">Evaluación Sumativa</option>
                                                <option value="ED">Evaluación diagnóstica</option>
                                                <option value="EFn">Evaluación formativa (competencia especifica n)</option>
                                                <option value="">Quitar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label" for="tipoEvaluacion2">Competencia N</label>
                                        <div class="input-group">
                                            <input type="number" min="1" class="form-control" id="evalnoCompetencia2" name="evalnoCompetencia2" placeholder="Competencia N">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label" for="numeroSemana2">Semana</label>
                                        <div class="input-group">
                                            <input type="number" min="1" class="form-control" id="numeroSemana2" name="numeroSemana2" placeholder="Semana">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <div class="input-group">
                                            <button type="button" onClick='agregarEvaluacion2()' class="btn btn-primary">Agregar evaluación</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!--Calendarizacion-->
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="divTablaLogros2" class="table-responsive">

                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 row">
                                <label class="control-label" for="agregarCompetenciaE2">Agregar Competencia Especifica</label>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12" id="agregarCompetenciaE2">
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label" for="criterioLogro2">Criterio Logro</label>
                                        <div class="input-group">
                                            <select class="form-control" id="criterioLogro2" name="criterioLogro2">
                                                <option value="0">% de estudiantes que alcanzaron la competencia especifica</option>
                                                <option value="1">Total de Estudiantes Evaluados</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label" for="porcentajeLogro2">Porcentaje de Logro</label>
                                        <div class="input-group">
                                            <input type="number" min="0" max="100" class="form-control" id="porcentajeLogro2" name="porcentajeLogro2" placeholder="%">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <label class="control-label" for="numeroCompetenciaE2">Numero de competencia</label>
                                        <div class="input-group">
                                            <input type="number" min="1" class="form-control" id="numeroCompetenciaE2" name="numeroCompetenciaE2" placeholder="Competencia">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                        <div class="input-group">
                                            <button type="button" onClick='agregarLogro2()' class="btn btn-primary">Agregar logro</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!--Logros-->


                        <!--datatable competencias-->
                    </form>
                </div><!--row-->

            </div>

            <div class="modal-footer">
                <input type="hidden" id="iddosi" name="iddosi">
                <input type="hidden" id="idcomp" name="idcomp">
                <button id="btnModificar" type="button" class="btn-sm btn-primary" onClick='modificarDosi()'>Guardar</button>
            </div>
        </div>
    </div>
</div>

<div id="modalComp" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Modificar Competencia Especifica:</h3>
            </div>
            <div class="modal-body blockcenter">
                <div class="row">
                    <div class="form-group col-md-12 col-lg-12 col-sm-12">
                        <form id="frmDosificacion3"  class="form-horizontal" method="POST">
                            <label class="control-label"
                                   for="competenciaEspecifica2">Competencia específica</label>
                            <div class="input-group">
                                <input class="form-control" id="competenciaEspecifica2" name="competenciaEspecifica2" placeholder="Nombre Competencia Específica">
                            </div>
                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label" for="noCompetencia2">Competencia No.</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <input type = "number"  min="1" max="10" class="form-control" id="noCompetencia2" name="noCompetencia2" placeholder="Competencia No.">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label"
                                       for="horasTeoricas2">Horas teóricas</label>
                                <div class="input-group">
                                    <input type = "number"  min="0" max="10" class="form-control" id="horasTeoricas2" name="horasTeoricas2">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label" for="horasPractica2">Horas Prácticas</label>
                                <div class="input-group">
                                    <input type = "number"  min="1" max="10" class="form-control" id="horasPractica2" name="horasPractica2" >
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                                <label class="control-label" for="descripcion2">Descripción</label>
                                <div class="input-group">
                                    <!--span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                  </span-->
                                    <textarea class="form-control" rows="5" id="descripcion2" name="descripcion2" placeholder="Descripción"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label"
                                       for="temasySubtemas2">Temas y subtemas para desarrollar la específica</label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="10" id="temasySubtemas2" name="temasySubtemas2" placeholder="Temas y subtemas para desarrollar la específica"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label"
                                       for="actividadesAprendizaje2">Actividades de Aprendizaje</label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="11" id="actividadesAprendizaje2" name="actividadesAprendizaje2" placeholder="Actividades de Aprendizaje"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label"
                                       for="actividadesEnseñanza2">Actividades de enseñanza</label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="11" id="actividadesEnseñanza2" name="actividadesEnseñanza2" placeholder="Actividades de Enseñanza"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label"
                                       for="desarrolloCompetenciasGenericas2">Desarrollo de competencias genéricas</label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="10" id="desarrolloCompetenciasGenericas2" name="desarrolloCompetenciasGenericas2" placeholder="Desarrollo de competencias genéricas"></textarea>
                                </div>
                            </div>
                            <div><hr></div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 row">
                                    <label class="control-label" for="indicador2">Agregar Indicador</label>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <label class="control-label" for="indicador2">Indicador</label>
                                        <div class="input-group">
                                            <input class="form-control" id="indicador2" name="indicador2" placeholder="Indicador">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <label class="control-label" for="valorIndicador2">Valor del indicador</label>
                                        <div class="input-group">
                                            <input type="number" min="1" max="100" class="form-control" id="valorIndicador2" name="valorIndicador2" placeholder="Valor del indicador">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="input-group">
                                            <button type="button" onClick='agregarIndicador3()' class="btn btn-primary">Agregar Indicador</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 row table-responsive" id="divTablaIndicadores2" >
                                    <table class="table" id="tablaIndicadores2">
                                        <thead>
                                        <tr>
                                            <td>Indicadores</td>
                                            <td>Valor del indicador</td>
                                        </tr>
                                        </thead>
                                        <tbody id="boriteibol2">

                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label class="control-label" for="noIndicador2">Eliminar indicador</label>
                                    <div class="input-group">
                                        <select class="form-control" id="noIndicador2" name="noIndicador2">

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <button type="button" onClick='borrarIndicador2()' class="btn btn-primary">Eliminar Indicador</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                    </div><!--row-->
                </div><!--row-->
                <div><hr></div>
                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label class="control-label" for="nivelDesempeño2"></label>
                        <div class="input-group">
                            <select class="form-control" id="nivelDesempeño2" name="nivelDesempeño2">
                                <option value="1">Excelente</option>
                                <option value="2">Notable</option>
                                <option value="3">Bueno</option>
                                <option value="4">Suficiente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label class="control-label" for="textoIndicador2">Indicador</label>
                        <div class="input-group">
                            <input class="form-control" id="textoIndicador2" name="textoIndicador2" placeholder="Indicador">
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="input-group">
                            <button type="button" onClick='agregarTextoIndicador2()' class="btn btn-primary">Agregar Indicador</button>
                        </div>
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 table-responsive">
                        <table id="tablaDesempeno2" class="table">
                            <thead>
                            <tr>
                                <th>Desempeño</th>
                                <th>Nivel de desempeño</th>
                                <th>Indicadores de alcance</th>
                                <th>Valoración</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Competencia alcanzada</td>
                                <td>Excelente</td>
                                <td contenteditable="true">-</td>
                                <td>95-100</td>
                            </tr>
                            <tr>
                                <td>Competencia alcanzada</td>
                                <td>Notable</td>
                                <td contenteditable="true">-</td>
                                <td>85-94</td>
                            </tr>
                            <tr>
                                <td>Competencia alcanzada</td>
                                <td>Bueno</td>
                                <td contenteditable="true">-</td>
                                <td>75-84</td>
                            </tr>
                            <tr>
                                <td>Competencia alcanzada</td>
                                <td>Suficiente</td>
                                <td contenteditable="true">-</td>
                                <td>70-74</td>
                            </tr>
                            <tr>
                                <td>Competencia no alcanzada</td>
                                <td>Insuficiente</td>
                                <td contenteditable="true">No se cumple con el 100% de evidencias conceptuales procedimentales y actitudinales de los indicadores definidos en el desempeño excelente</td>
                                <td>NA</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!--row-->
                <div><hr></div>
                <div class="row col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 table-responsive">
                        <table id="tablaMatriz2" class="table">
                            <thead>
                            <tr>
                                <th rowspan="2">Evidencia de aprendizaje</th>
                                <th rowspan="2">%</th>
                                <th colspan="5" id="headMatriz2">Indicador de alcance</th>
                                <th rowspan="2">Evaluación formativa de la competencia</th>
                            </tr>
                            <tr id="rowIndicadores2">
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                            </tr>
                            </thead>
                            <tbody id="bodyMatriz2">
                            <tr id="rowTotales2">

                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group">
                                <input class="form-control" id="evidenciaAprendizaje2" name="evidenciaAprendizaje2" placeholder="Evidencia de aprendizaje">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group">
                                <input class="form-control" id="evalFormComp2" name="evalFormComp2" placeholder="Evaluación Formativa de Competencia">
                            </div>
                        </div>

                        <button type="button" onClick='agregarEval22()' class="btn btn-primary col-lg-6 col-md-6 col-sm-12">Agregar evidencia</button>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="input-group">
                                <select class="form-control" id="indicadorEval2" name="indicadorEval2">
                                    <option value="2">A</option>
                                    <option value="3">B</option>
                                    <option value="4">C</option>
                                    <option value="5">D</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" onClick='borrarEval2()' class="btn btn-danger col-lg-12 col-md-12 col-sm-12">Quitar evidencia</button>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label class="control-label"
                               for="observaciones2">Observaciones</label>
                        <div class="input-group">
                            <textarea class="form-control" rows="10" id="observaciones2" name="observaciones2" placeholder="Observaciones"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label class="control-label"for="acciones2">Acciones</label>
                        <div class="input-group">
                            <textarea class="form-control" rows="10" id="acciones2" name="acciones2" placeholder="Acciones"></textarea>
                        </div>
                    </div>
                    </form>
                </div>

            </div><!--Modal body|-->
            <div class="modal-footer">
                <button onClick='modificarComp()' id="btnModificar2" type="button" class="btn-sm btn-primary" >Guardar</button>
            </div>
        </div>
    </div>
</div>

<div class="container col-lg-12 col-md-12 col-sm-12">
    <form id="frmDosificacion" method="POST">
        <div class="row">
            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <label class="control-label" for="periodo">Periodo</label>
                <div class="input-group">
                    <select class="form-control" id="periodo" name="periodo">
                        <option value="ENE-JUN">ENE-JUN</option>
                        <option value="AGO-DIC">AGO-DIC</option>
                        <option value="VERANO">VERANO</option>
                    </select>
                </div>
            </div>


            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <label class="control-label" for="anioPeriodo">Año del Periodo</label>
                <div class="input-group">

                    <input class="form-control" type = "number" id="anioPeriodo" name="anioPeriodo" placeholder="Año" min="2017" max="9999">
                </div>
            </div>

            <div class="form-group col-lg-3 col-md-3 col-sm-12">
                <label class="control-label" for="asignatura">Asignatura</label>
                <div class="input-group">

                    <select class="form-control" id="asignatura" name="asignatura">
                    </select>
                </div>
            </div>

            <div class="form-group col-lg-3 col-md-3 col-sm-12">
                <label class="control-label"
                       for="claveAsignatura">Clave Asignatura</label>
                <div class="input-group">
                    <!--span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span-->
                    <input class="form-control" id="claveAsignatura" name="claveAsignatura" placeholder="Clave Asignatura" readonly>
                </div>
            </div>

            <div class="form-group col-lg-6 col-md-6  col-sm-12">
                <label class="control-label"
                       for="maestro">Maestro</label>
                <div class="input-group">

                    <select class="form-control" id="maestro" name="maestro">
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label class="control-label"
                       for="carrera">Carrera (s)</label>
                <div class="input-group">
                    <select class="form-control" id="carrera" name="carrera">
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-4 col-md-4  col-sm-12">
                <label class="control-label"
                       for="horasTeoria">Horas Teoricas</label>
                <div class="input-group">
                    <!--span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span-->
                    <input type = "number"  min="0" max="10" class="form-control" id="horasTeoria" name="horasTeoria" placeholder="Horas Teoricas">
                </div>
            </div>

            <div class="form-group col-lg-4 col-md-4  col-sm-12">
                <label class="control-label"
                       for="horasPracticas">Horas Prácticas</label>
                <div class="input-group">
                    <!--span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span-->
                    <input type = "number"  min="0" max="10" class="form-control" id="horasPracticas" name="horasPracticas" placeholder="Horas Prácticas">
                </div>
            </div>


        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                <label class="control-label"
                       for="caracterizacionDeLaAsignatura">Caracterización de la asignatura</label>
                <div class="input-group">
                    <textarea class="form-control" rows="5" id="caracterizacionDeLaAsignatura" name="caracterizacionDeLaAsignatura" placeholder="Caracterización de la asignatura"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                <label class="control-label"
                       for="intencionDidactica">Intención Didáctica</label>
                <div class="input-group">
                    <!--span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span-->
                    <textarea class="form-control" rows="5" id="intencionDidactica" name="intencionDidactica" placeholder="Intención Didáctica"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                <label class="control-label"
                       for="competenciaAsignatura">Competencia de la asignatura</label>
                <div class="input-group">
                    <!--span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span-->
                    <textarea class="form-control" rows="5" id="competenciaAsignatura" name="competenciaAsignatura" placeholder="Competencia de la asignatura"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group col-lg-12 col-md-12  col-sm-12">
                <label class="control-label"
                       for="fuentesInformacion">Fuentes de información y apoyos didácticos</label>
                <div class="input-group">
                    <!--span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span-->
                    <textarea class="form-control" rows="5" id="fuentesInformacion" name="fuentesInformacion" placeholder="Fuentes de información y apoyos didácticos"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <label class="control-label"
                   for="calendarizacion">Calendarización de evaluación en semanas</label>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="calendarizacion">
                <div class="form-group col-lg-4 col-md-4  col-sm-12">
                    <label class="control-label" for="noSemanas">Semana</label>
                    <div class="input-group">
                        <input type="number" min="1" class="form-control" id="noSemanas" name="noSemanas" placeholder="No. Semanas">
                    </div>
                </div>

                <button type="button" id="btnagregarSemanas" onClick='generarTabla()' class="btn btn-primary">Agregar semanas</button>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="divTablaCalendarizacion" class="table-responsive">

            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 row">
                <label class="control-label" for="agregarEvaluacion">Agregar Evaluación</label>
                <div class="form-group col-lg-12 col-md-12 col-sm-12" id="agregarEvaluacion">
                    <div class="form-group col-lg-3 col-md-3  col-sm-12">
                        <label class="control-label"
                               for="tiempoEvaluacion">Tiempo</label>
                        <div class="input-group">
                            <select class="form-control" id="tiempoEvaluacion" name="tiempoEvaluacion">
                                <option value="0">Tiempo Planeado</option>
                                <option value="1">Tiempo Real</option>
                                <option value="2">Seguimiento departamental</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-lg-3 col-md-3  col-sm-12">
                        <label class="control-label" for="tipoEvaluacion">Evaluación</label>
                        <div class="input-group">
                            <select class="form-control" id="tipoEvaluacion" name="tipoEvaluacion">
                                <option value="ES">Evaluación Sumativa</option>
                                <option value="ED">Evaluación diagnóstica</option>
                                <option value="EFn">Evaluación formativa (competencia especifica n)</option>
                                <option value="">Quitar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12  col-sm-12">
                        <label class="control-label" for="tipoEvaluacion">Competencia N</label>
                        <div class="input-group">
                            <input type="number" min="1" class="form-control" id="evalnoCompetencia" name="evalnoCompetencia" placeholder="Competencia N">
                        </div>
                    </div>
                    <div class="form-group col-lg-2 col-md-2  col-sm-12">
                        <label class="control-label" for="numeroSemana">Semana</label>
                        <div class="input-group">
                            <input type="number" min="1" class="form-control" id="numeroSemana" name="numeroSemana" placeholder="Semana">
                        </div>
                    </div>
                    <div class="form-group col-lg-2 col-md-2  col-sm-12">
                        <div class="input-group">
                            <button type="button" onClick='agregarEvaluacion()' class="btn btn-primary">Agregar evaluación</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</form>
</div><!--row-->
<div><hr></div>
<div class="row">
    <label class="control-label"
           for="logros">Logros</label>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="logros">
        <div class="form-group col-lg-4 col-md-4  col-sm-12">
            <label class="control-label" for="noCompetencias">Competencias Especificas</label>
            <div class="input-group">
                <input type="number" min="1" class="form-control" id="noCompetencias" name="noCompetencias" placeholder="No. Competencias Específicas">
            </div>
        </div>

        <button type="button" onClick='generarTablaLogros()' class="btn btn-primary">Agregar competencias</button>
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="divTablaLogros" class="table-responsive">

    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 row">
        <label class="control-label" for="agregarCompetenciaE">Agregar Competencia Especifica</label>
        <div class="form-group col-lg-12 col-md-12 col-sm-12" id="agregarCompetenciaE">
            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <label class="control-label" for="criterioLogro">Criterio Logro</label>
                <div class="input-group">
                    <select class="form-control" id="criterioLogro" name="criterioLogro">
                        <option value="0">% de estudiantes que alcanzaron la competencia especifica</option>
                        <option value="1">Total de Estudiantes Evaluados</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <label class="control-label" for="porcentajeLogro">Porcentaje de Logro</label>
                <div class="input-group">
                    <input type="number" min="0" max="100" class="form-control" id="porcentajeLogro" name="porcentajeLogro" placeholder="%">
                </div>
            </div>
            <div class="form-group col-lg-2 col-md-2  col-sm-12">
                <label class="control-label" for="numeroCompetenciaE">Numero de competencia</label>
                <div class="input-group">
                    <input type="number" min="1" class="form-control" id="numeroCompetenciaE" name="numeroCompetenciaE" placeholder="Competencia">
                </div>
            </div>
            <div class="form-group col-lg-2 col-md-2  col-sm-12">
                <div class="input-group">
                    <button type="button" onClick='agregarLogro()' class="btn btn-primary">Agregar logro</button>
                </div>
            </div>

        </div>
    </div>
</div>
</div><!--row-->
<div><hr></div>
<div class="row">
    <div class="form-group col-md-6 col-lg-6 col-sm-12">
        <label class="control-label"
               for="competenciaEspecifica">Competencia específica</label>
        <div class="input-group">
            <!--span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
          </span-->
            <input class="form-control" id="competenciaEspecifica" name="competenciaEspecifica" placeholder="Nombre Competencia Específica">
        </div>
    </div>
    <div class="form-group col-lg-2 col-md-2  col-sm-12">
        <label class="control-label"
               for="noCompetencia">Competencia No.</label>
        <div class="input-group">
            <!--span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
          </span-->
            <input type = "number"  min="1" max="10" class="form-control" id="noCompetencia" name="noCompetencia" placeholder="Competencia No.">
        </div>
    </div>
    <div class="form-group col-lg-2 col-md-2 col-sm-12">
        <label class="control-label"
               for="horasTeoricas">Horas teóricas</label>
        <div class="input-group">
            <!--span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
          </span-->
            <input type = "number"  min="0" max="10" class="form-control" id="horasTeoricas" name="horasTeoricas">
        </div>
    </div>
    <div class="form-group col-lg-2 col-md-2 col-sm-12">
        <label class="control-label"
               for="horasPractica">Horas Prácticas</label>
        <div class="input-group">
            <!--span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
          </span-->
            <input type = "number"  min="1" max="10" class="form-control" id="horasPractica" name="horasPractica" >
        </div>
    </div>

    <div class="form-group col-lg-12 col-md-12  col-sm-12">
        <label class="control-label"
               for="descripcion">Descripción</label>
        <div class="input-group">
            <textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Descripción"></textarea>
        </div>
    </div>
    <div class="form-group col-lg-3 col-md-3 col-sm-12">
        <label class="control-label"
               for="temasySubtemas">Temas y subtemas para desarrollar la específica</label>
        <div class="input-group">
            <textarea class="form-control" rows="10" id="temasySubtemas" name="temasySubtemas" placeholder="Temas y subtemas para desarrollar la específica"></textarea>
        </div>
    </div>
    <div class="form-group col-lg-3 col-md-3 col-sm-12">
        <label class="control-label"
               for="actividadesAprendizaje">Actividades de Aprendizaje</label>
        <div class="input-group">
            <textarea class="form-control" rows="11" id="actividadesAprendizaje" name="actividadesAprendizaje" placeholder="Actividades de Aprendizaje"></textarea>
        </div>
    </div>
    <div class="form-group col-lg-3 col-md-3 col-sm-12">
        <label class="control-label"
               for="actividadesEnseñanza">Actividades de enseñanza</label>
        <div class="input-group">
            <textarea class="form-control" rows="11" id="actividadesEnseñanza" name="actividadesEnseñanza" placeholder="Actividades de Enseñanza"></textarea>
        </div>
    </div>
    <div class="form-group col-lg-3 col-md-3 col-sm-12">
        <label class="control-label"
               for="desarrolloCompetenciasGenericas">Desarrollo de competencias genéricas</label>
        <div class="input-group">
            <textarea class="form-control" rows="10" id="desarrolloCompetenciasGenericas" name="desarrolloCompetenciasGenericas" placeholder="Desarrollo de competencias genéricas"></textarea>
        </div>
    </div>
    <div><hr></div>
    <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-12 row">
            <label class="control-label" for="indicador">Agregar Indicador</label>

            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label class="control-label" for="indicador">Indicador</label>
                <div class="input-group">
                    <input class="form-control" id="indicador" name="indicador" placeholder="Indicador">
                </div>
            </div>
            <div class="form-group col-lg-3 col-md-3 col-sm-12">
                <label class="control-label" for="valorIndicador">Valor del indicador</label>
                <div class="input-group">
                    <input type="number" min="1" max="100" class="form-control" id="valorIndicador" name="valorIndicador" placeholder="Valor del indicador">
                </div>
            </div>
            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <div class="input-group">
                    <button type="button" onClick='agregarIndicador()' class="btn btn-primary">Agregar Indicador</button>
                </div>
            </div>

        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 row" id="divTablaIndicadores" class="table-responsive">
            <table class="table" id="tablaIndicadores">
                <thead>
                <tr>
                    <td>Indicadores</td>
                    <td>Valor del indicador</td>
                </tr>
                </thead>
                <tbody id="boriteibol">

                </tbody>
            </table>
        </div>
        <div class="form-group col-lg-3 col-md-3  col-sm-12">
            <label class="control-label" for="noIndicador">Eliminar indicador</label>
            <div class="input-group">
                <select class="form-control" id="noIndicador" name="noIndicador">

                </select>
            </div>
        </div>
        <div class="form-group col-lg-3 col-md-3  col-sm-12">
            <div class="input-group">
                <button type="button" onClick='borrarIndicador()' class="btn btn-primary">Eliminar Indicador</button>
            </div>
        </div>
    </div>
</div><!--row-->
</div><!--row-->
<div><hr></div>
<div class="row">
    <div class="form-group col-lg-3 col-md-3  col-sm-12">
        <label class="control-label" for="nivelDesempeño"></label>
        <div class="input-group">
            <select class="form-control" id="nivelDesempeño" name="nivelDesempeño">
                <option value="1">Excelente</option>
                <option value="2">Notable</option>
                <option value="3">Bueno</option>
                <option value="4">Suficiente</option>
            </select>
        </div>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-12">
        <label class="control-label" for="textoIndicador">Indicador</label>
        <div class="input-group">
            <input class="form-control" id="textoIndicador" name="textoIndicador" placeholder="Indicador">
        </div>
    </div>
    <div class="form-group col-lg-3 col-md-3  col-sm-12">
        <div class="input-group">
            <button type="button" onClick='agregarTextoIndicador()' class="btn btn-primary">Agregar Indicador</button>
        </div>
    </div>
</div><!--row-->
<div class="row">
    <div class="form-group col-lg-12 col-md-12 col-sm-12">
        <table id="tablaDesempeno" class="table">
            <thead>
            <tr>
                <th>Desempeño</th>
                <th>Nivel de desempeño</th>
                <th>Indicadores de alcance</th>
                <th>Valoración</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Excelente</td>
                <td contenteditable="true">-</td>
                <td>95-100</td>
            </tr>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Notable</td>
                <td contenteditable="true">-</td>
                <td>85-94</td>
            </tr>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Bueno</td>
                <td contenteditable="true">-</td>
                <td>75-84</td>
            </tr>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Suficiente</td>
                <td contenteditable="true">-</td>
                <td>70-74</td>
            </tr>
            <tr>
                <td>Competencia no alcanzada</td>
                <td>Insuficiente</td>
                <td contenteditable="true">No se cumple con el 100% de evidencias conceptuales procedimentales y actitudinales de los indicadores definidos en el desempeño excelente</td>
                <td>NA</td>
            </tr>
            </tbody>
        </table>
    </div>
</div><!--row-->
<div><hr></div>
<div class="row col-lg-12 col-md-12 col-sm-12">
    <div class="form-group col-lg-12 col-md-12 col-sm-12">
        <table id="tablaMatriz" class="table">
            <thead>
            <tr>
                <th rowspan="2">Evidencia de aprendizaje</th>
                <th rowspan="2">%</th>
                <th colspan="5" id="headMatriz">Indicador de alcance</th>
                <th rowspan="2">Evaluación formativa de la competencia</th>
            </tr>
            <tr id="rowIndicadores">
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
            </thead>
            <tbody id="bodyMatriz">
            <tr id="rowTotales">

            </tr>
            </tbody>

        </table>
    </div>
    <div class="row">
        <div class="form-group col-lg-5 col-md-5 col-sm-12">
            <div class="input-group">
                <input class="form-control" id="evidenciaAprendizaje" name="evidenciaAprendizaje" placeholder="Evidencia de aprendizaje">
            </div>
        </div>
        <div class="form-group col-lg-5 col-md-5 col-sm-12">
            <div class="input-group">
                <input class="form-control" id="evalFormComp" name="evalFormComp" placeholder="Evaluación Formativa de Competencia">
            </div>
        </div>

        <button type="button" onClick='agregarEval2()' class="btn btn-primary col-lg-2 col-md-2 col-sm-2">Agregar evidencia</button>
    </div>
    <div class="row">
        <div class="form-group col-lg-5 col-md-5 col-sm-12">
            <div class="input-group">
                <select class="form-control" id="indicadorEval" name="indicadorEval">
                    <option value="2">A</option>
                    <option value="3">B</option>
                    <option value="4">C</option>
                    <option value="5">D</option>
                </select>
            </div>
        </div>
        <button type="button" onClick='borrarEval()' class="btn btn-danger col-lg-2 col-md-2 col-sm-2">Quitar evidencia</button>
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6 col-md-6 col-sm-12">
        <label class="control-label"
               for="observaciones">Observaciones</label>
        <div class="input-group">
            <textarea class="form-control" rows="10" id="observaciones" name="observaciones" placeholder="Observaciones"></textarea>
        </div>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-12">
        <label class="control-label"
               for="acciones">Acciones</label>
        <div class="input-group">
            <textarea class="form-control" rows="10" id="acciones" name="acciones" placeholder="Acciones"></textarea>
        </div>
    </div>
</div>
<button type="button" id="btnAddCompetencia" onClick='guardarYAgregarCompetencia()' class="btn btn-primary col-lg-12 col-md-12 col-sm-12">Guardar competencia</button>
</form>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbDosi">
            <thead>
            <tr>
                <th>ID</th>
                <th>Periodo</th>
                <th>Plan de Estudios</th>
                <th>Carrera</th>
                <th>Maestro</th>
                <th>Materia</th>
                <th>Horas Prácticas</th>
                <th>Horas Teoricas</th>
                <th>Caracterización Asignatura</th>
                <th>Intención Didáctica</th>
                <th>Competencia Asignatura</th>
                <th>Bibliografía</th>
                <th>Operaciones</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="tbComp">
            <thead>
            <tr>
                <th>Nombre Competencia</th>
                <th>Numero de Competencia</th>
                <th>Horas Practicas</th>
                <th>Horas Teoricas</th>
                <th>Operaciones</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</div>
