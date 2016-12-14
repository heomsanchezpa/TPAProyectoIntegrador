
<meta charset="UTF-8">
<script type="text/javascript" src="js/cdocificacion.js"></script>
<div class="container col-lg-12 col-md-12 col-sm-12">
    <form id="frmDosificacion" method="POST">
        <div class="row">
            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <label class="control-label" for="periodo">Periodo</label>
                <div class="input-group">
                    <select class="form-control" id="periodo" name="periodo">
                        <option value="ENE-JUN 2017">ENE-JUN 2016</option>
                        <option value="AGO-DIC 2017">AGO-DIC 2016</option>
                        <option value="ENE-JUN 2018">ENE-JUN 2017</option>
                    </select>
                </div>
            </div>


            <div class="form-group col-lg-3 col-md-3  col-sm-12">
                <label class="control-label" for="planEstudios">Plan de estudios grupo base</label>
                <div class="input-group">
                    <select class="form-control" id="planEstudios" name="planEstudios">
                        <option value="ISIC-2010-224">ISIC-2010-224</option>
                        <option value="ISIC-2010-225">ISIC-2010-225</option>
                        <option value="ISIC-2010-226">ISIC-2010-226</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-lg-3 col-md-3 col-sm-12">
                <label class="control-label" for="asignatura">Asignatura</label>
                <div class="input-group">

                    <select class="form-control" id="asignatura" name="asignatura">
                        <option value="id1">TSO</option>
                        <option value="id2">TPA</option>
                        <option value="id3">Seguridad en Redes</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-lg-3 col-md-3 col-sm-12">
                <label class="control-label"
                       for="claveAsignatura">Clave Asignatura</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <input class="form-control" id="claveAsignatura" name="claveAsignatura" placeholder="Clave Asignatura" readonly>
                </div>
            </div>

            <div class="form-group col-lg-6 col-md-6  col-sm-12">
                <label class="control-label"
                       for="maestro">Maestro</label>
                <div class="input-group">

                    <select class="form-control" id="maestro" name="maestro">
                        <option value="id1">L. I. Miguel Ángel Martinez Gonzalez</option>
                        <option value="id2">Ing. Fulanito de tal</option>
                        <option value="id3">MTI. Manganito</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label class="control-label"
                       for="carrera">Carrera (s)</label>
                <div class="input-group">
                    <select class="form-control" id="carrera" name="carrera" multiple>
                        <option value="idMateria1">Ingenieria en Sistemas Computacionales</option>
                        <option value="idMateria2">Ingenieria en Tecnologias de la Información y la Comunicación</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-4 col-md-4  col-sm-12">
                <label class="control-label"
                       for="horasTeoria">Horas Teoricas</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <input type = "number"  min="0" max="10" class="form-control" id="horasTeoria" name="horasTeoria" placeholder="Horas Teoricas">
                </div>
            </div>

            <div class="form-group col-lg-4 col-md-4  col-sm-12">
                <label class="control-label"
                       for="horasPracticas">Horas Prácticas</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <input type = "number"  min="0" max="10" class="form-control" id="horasPracticas" name="horasPracticas" placeholder="Horas Prácticas">
                </div>
            </div>

            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                <label class="control-label"
                       for="creditos">Créditos</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <input type = "number"  min="0" max="10" class="form-control" id="creditos" name="creditos" placeholder="Créditos">
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group">
                <label class="control-label"
                       for="caracterizacionDeLaAsignatura">Caracterización de la asignatura</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <textarea class="form-control" rows="5" id="caracterizacionDeLaAsignatura" name="caracterizacionDeLaAsignatura" placeholder="Caracterización de la asignatura"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group">
                <label class="control-label"
                       for="intencionDidactica">Intención Didáctica</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <textarea class="form-control" rows="5" id="intencionDidactica" name="intencionDidactica" placeholder="Intención Didáctica"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group">
                <label class="control-label"
                       for="competenciaAsignatura">Competencia de la asignatura</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    <textarea class="form-control" rows="5" id="competenciaAsignatura" name="competenciaAsignatura" placeholder="Competencia de la asignatura"></textarea>
                </div>
            </div>
        </div>
        <div><hr></div>
        <div class="row">
            <div class="form-group">
                <label class="control-label"
                       for="fuentesInformacion">Fuentes de información y apoyos didácticos</label>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
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
                    <div class="form-group col-lg-2 col-md-2  col-sm-12">
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
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
            <input class="form-control" id="competenciaEspecifica" name="competenciaEspecifica" placeholder="Nombre Competencia Específica">
        </div>
    </div>
    <div class="form-group col-lg-2 col-md-2  col-sm-12">
        <label class="control-label"
               for="noCompetencia">Competencia No.</label>
        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
            <input type = "number"  min="1" max="10" class="form-control" id="noCompetencia" name="noCompetencia" placeholder="Competencia No.">
        </div>
    </div>
    <div class="form-group col-lg-2 col-md-2 col-sm-12">
        <label class="control-label"
               for="horasTeoricas">Horas teóricas</label>
        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
            <input type = "number"  min="0" max="10" class="form-control" id="horasTeoricas" name="horasTeoricas">
        </div>
    </div>
    <div class="form-group col-lg-2 col-md-2 col-sm-12">
        <label class="control-label"
               for="horasPractica">Horas Prácticas</label>
        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
            <input type = "number"  min="1" max="10" class="form-control" id="horasPractica" name="horasPractica" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label"
               for="descripcion">Descripción</label>
        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
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
            <label class="control-label" for="agregarIndicador">Agregar Indicador</label>

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
                <td></td>
                <td>95-100</td>
            </tr>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Notable</td>
                <td></td>
                <td>85-94</td>
            </tr>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Bueno</td>
                <td></td>
                <td>75-84</td>
            </tr>
            <tr>
                <td>Competencia alcanzada</td>
                <td>Suficiente</td>
                <td></td>
                <td>70-74</td>
            </tr>
            <tr>
                <td>Competencia no alcanzada</td>
                <td>Insuficiente</td>
                <td>No se cumple con el 100% de evidencias conceptuales procedimentales y actitudinales de los indicadores definidos en el desempeño excelente</td>
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
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
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
<button type="button" id="btnAddCompetencia" onClick='guardarYAgregarCompetencia()' class="btn btn-primary col-lg-12 col-md-12 col-sm-12">Guardar competencia</button>
</form>
</div>
