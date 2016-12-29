
<meta charset="UTF-8">
<script type="text/javascript" src="js/ccompetencia.js"></script>
<div class="container col-lg-12 col-md-12 col-sm-12">
    <form id="frmCompetencia" method="POST">
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
<div class="row">
    <div class="form-group col-lg-12 col-md-12 col-sm-12">
        <table id="tablaMatriz" class="table">
            <thead>
            <tr>
                <th>Evidencia de aprendizaje</th>
                <th>%</th>
                <th>Indicador de alcance</th>
                <th>Evaluación formativa de la competencia</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</form>
</div>