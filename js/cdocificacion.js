
$(function() {
    document.getElementById("tablaMatriz").addEventListener("input", function() {
        actualizarTotales();
    }, false);

    $.ajax({
        url: '/TPAProyectoIntegrador/model/materias/getMaterias.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        console.log("Codigo jsonffdgfdg: "+json);
        if(json.code===200)
            $.each(json.msg, function(i,row){
                $('<option></option>', {text: row.nombre_completo}).attr('value',row.materiaid).attr('clave',row.clave).appendTo('#asignatura');
            });
    });//Materias

    $.ajax({
        url: '/TPAProyectoIntegrador/model/maestro/getMaestros.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        console.log("Codigo json: "+json.code);
        if(json.code===200)
            $.each(json.msg, function(i,row){
                $('<option></option>', {text: row.name}).attr('value',row.id).appendTo('#maestro');
            });
    });//Maestris

    $.ajax({
        url: '/TPAProyectoIntegrador/model/carrera/GetCarreras.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        console.log("Codigo json: "+json.code);
        if(json.code===200)
            $.each(json.msg, function(i,row){
                $('<option></option>', {text: row.nombrecarrera}).attr('value',row.idcarrera).appendTo('#carrera');
                $('<option></option>', {text: row.planEstudios}).attr('value',row.planEstudios).appendTo('#planEstudios');

            });
    });//Carreras




    $('#tbDosi').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url:"/TPAProyectoIntegrador/model/dosificacion/getDosi.php"  ,
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"iddosificacion"
            },
            {
                data:"periodo"
            },
            {
                data:"planestudios"
            },
            {
                data: /*function(row){
                    var res = "";
                    $.ajax({
                        async:false,
                        url: "/TPAProyectoIntegrador/model/maestro/getMaestroById.php",
                        type: "post",
                        data: {
                            no_tarjeta: row["idmaestro"]
                        }
                    }).done(
                        function(data){
                            if(data.code === 200){
                                res = data.msg.name;
                            }else{
                                res = data.msg;
                            }

                        }
                    );
                    console.log(res);
                    return res;*/
                "idmaestro"

                
            },
            {
                data: "idcarrera"
            },
            {
                data: "horasPracticas"
            },
            {
                data: "horasTeoricas"
            },
            {
                data: "caracterizacionAsignatura"
            },
            {
                data: "intencionDidactica"
            },
            {
                data: "competenciaAsignatura"
            },
            {
                data: "bibliografia"
            },

            {
                data: function(row){
                    str="<div align='center'>";
                    str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteDosi("+row["iddosificacion"]+")'><i class='glyphicon glyphicon-trash'></i></button>";
                    str+= "&nbsp;<button id='btnMostrar' class = 'btn btn-success btn-xs' onClick = 'showDosi("+row["iddosificacion"]+")'><i class='glyphicon glyphicon-zoom-in'></i></button>";
                    str+="<div>";
                    return str;
                }
            }

        ]


    });


});
function borrarIndicador() {
    var noind=document.getElementById("noIndicador").value;
    document.getElementById("tablaIndicadores").deleteRow(noind);
    var tabla =document.getElementById("tablaIndicadores");
    var select =document.getElementById("noIndicador");
    while(select.childElementCount>0){
        select.removeChild(select.lastChild);
    }
    var numIndicadores = tabla.rows.length;
    for(var i=1;i<numIndicadores;i++){
        var option = document.createElement("option");
        option.setAttribute("value",i);
        textoCelda = document.createTextNode(i);
        option.appendChild(textoCelda);
        select.appendChild(option);

    }
}

function borrarEval() {
    var noind=document.getElementById("indicadorEval").value;
    document.getElementById("tablaMatriz").deleteRow(noind);
    actualizarTotales();
}

function actualizarTotales(){
    var tblBody = document.getElementById("bodyMatriz");
    var table = document.getElementById("tablaMatriz");


    var numInd = $('#tablaIndicadores tbody tr').length;
    var numEval = $('#tablaMatriz tbody tr').length;
    var tblrow = document.getElementById("rowTotales");
    while(tblrow.childElementCount>0){
        tblrow.removeChild(tblrow.lastChild);
    }
    var celda = document.createElement("td");
    var textoCelda = document.createTextNode("Total");
    celda.appendChild(textoCelda);
    tblrow.appendChild(celda);
    var newnumeval=numEval+1;
    var newnumInd=numInd+2;
    var totla=0;
    var select =document.getElementById("indicadorEval");
    while(select.childElementCount>0){
        select.removeChild(select.lastChild);
    }
    for(var i =1;i<newnumInd;i++){//COLS
        for(var j =2;j<newnumeval;j++){//ROWS
            totla+=parseInt(table.rows[j].cells[i].innerHTML);
            console.log("Valor: "+newnumInd);
            if(i===1){
                celda = document.createElement("option");
                textoCelda = document.createTextNode(table.rows[j].cells[i-1].innerHTML);
                celda.appendChild(textoCelda);
                celda.setAttribute("value",j);
                select.appendChild(celda);
            }
        }
        celda = document.createElement("td");
        textoCelda = document.createTextNode(totla);
        celda.appendChild(textoCelda);
        tblrow.appendChild(celda);
        totla=0;
    }
    celda = document.createElement("td");
    textoCelda = document.createTextNode("-");
    celda.appendChild(textoCelda);
    tblrow.appendChild(celda);


}

function agregarEval2() {
    var numInd = $('#tablaIndicadores tbody tr').length;

    document.getElementById("headMatriz").setAttribute("colspan",numInd);
    var rowIndicadores = document.getElementById("rowIndicadores");
    while(rowIndicadores.childElementCount>0){
        rowIndicadores.removeChild(rowIndicadores.lastChild);
    }

    var tblBody = document.getElementById("bodyMatriz");

    var tblrow = document.createElement("tr");
    var celda = document.createElement("td");
    var textoCelda = document.createTextNode($('#evidenciaAprendizaje').val());
    celda.appendChild(textoCelda);
    celda.setAttribute("contenteditable","true");
    tblrow.appendChild(celda);
    celda = document.createElement("td");
    textoCelda = document.createTextNode("0");
    celda.appendChild(textoCelda);
    celda.setAttribute("contenteditable","true");
    tblrow.appendChild(celda);

    for (var i = 0; i < numInd; i++) {

        celda = document.createElement("td");
        textoCelda = document.createTextNode("0");
        celda.appendChild(textoCelda);
        celda.setAttribute("contenteditable","true");
        tblrow.appendChild(celda);
        celda = document.createElement("th");
        var text=i+1;
        textoCelda = document.createTextNode(text);
        celda.appendChild(textoCelda);
        rowIndicadores.appendChild(celda);
    }

    celda = document.createElement("td");
    textoCelda = document.createTextNode($('#evalFormComp').val());
    celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
    tblrow.appendChild(celda);
    tblBody.insertBefore(tblrow,document.getElementById("rowTotales"));
    //tblBody.appendChild(tblrow);

    tblrow = document.getElementById("rowTotales");
    celda = document.createElement("td");
    textoCelda = document.createTextNode("Total");
    celda.appendChild(textoCelda);
    var newNum = numInd+1;
    for(var j =0;j<newNum;j++){
        celda = document.createElement("td");
        textoCelda = document.createTextNode("0");
        celda.appendChild(textoCelda);
        celda.setAttribute("id","TOTAL"+j);
        tblrow.appendChild(celda);
    }
    celda = document.createElement("td");
    textoCelda = document.createTextNode("-");
    celda.appendChild(textoCelda);
    tblrow.appendChild(celda);
    tblBody.appendChild(tblrow);

    actualizarTotales();
}
function generarTabla() {
    // Obtener la referencia del elemento body
    var body = document.getElementById("divTablaCalendarizacion");
    while(body.childElementCount>0){
        body.removeChild(body.lastChild);
    }
    var semanas = $('#noSemanas').val();
    // Crea un elemento <table> y un elemento <tbody>
    var tabla   = document.createElement("table");
    tabla.setAttribute("class","table");
    tabla.setAttribute("id","tablaCalendarizacion");
    var tblBody = document.createElement("tbody");
    var tblHead = document.createElement("thead");
    var tblHeadrow = document.createElement("tr");
    var celda = document.createElement("td");
    var textoCelda = document.createTextNode("Semanas");
    celda.appendChild(textoCelda);
    tblHeadrow.appendChild(celda);

    for (var i = 0; i < semanas; i++) {
        celda = document.createElement("td");
        var j=i+1;
        textoCelda = document.createTextNode(j);
        celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
        tblHeadrow.appendChild(celda);
    }
    tblHead.appendChild(tblHeadrow);
    var hilera = document.createElement("tr");
    celda = document.createElement("td");
    textoCelda = document.createTextNode("TP");
    celda.appendChild(textoCelda);
    hilera.appendChild(celda);


    for (var j = 0; j < semanas; j++) {
        var celda = document.createElement("td");
        textoCelda = document.createTextNode("-");
        celda.appendChild(textoCelda);
        celda.setAttribute("contenteditable","true");
        hilera.appendChild(celda);
    }

    tblBody.appendChild(hilera);
    var hilera = document.createElement("tr");
    celda = document.createElement("td");
    textoCelda = document.createTextNode("TR");
    celda.appendChild(textoCelda);
    hilera.appendChild(celda);

    for (var j = 0; j < semanas; j++) {
        var celda = document.createElement("td");
        textoCelda = document.createTextNode("-");
        celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
        hilera.appendChild(celda);
    }

    tblBody.appendChild(hilera);
    var hilera = document.createElement("tr");
    celda = document.createElement("td");
    textoCelda = document.createTextNode("SD");
    celda.appendChild(textoCelda);
    hilera.appendChild(celda);

    for (var j = 0; j < semanas; j++) {
        var celda = document.createElement("td");
        textoCelda = document.createTextNode("-");
        celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
        hilera.appendChild(celda);
    }

    tblBody.appendChild(hilera);
    tabla.appendChild(tblHead);
    tabla.appendChild(tblBody);
    body.appendChild(tabla);
}

function generarTablaLogros() {
    // Obtener la referencia del elemento body
    var body = document.getElementById("divTablaLogros");
    while(body.childElementCount>0){
        body.removeChild(body.lastChild);
    }
    var competencias = $('#noCompetencias').val();
    // Crea un elemento <table> y un elemento <tbody>
    var tabla   = document.createElement("table");
    tabla.setAttribute("class","table");
    tabla.setAttribute("id","tablaLogros");
    var tblBody = document.createElement("tbody");
    var tblHead = document.createElement("thead");
    var tblHeadrow = document.createElement("tr");
    var celda = document.createElement("td");
    var textoCelda = document.createTextNode("Competencias Específicas");
    celda.appendChild(textoCelda);
    tblHeadrow.appendChild(celda);


    for (var i = 0; i < competencias; i++) {
        celda = document.createElement("td");
        var j=i+1;
        textoCelda = document.createTextNode(j);
        celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
        tblHeadrow.appendChild(celda);
    }
    tblHead.appendChild(tblHeadrow);
    var hilera = document.createElement("tr");
    celda = document.createElement("td");
    textoCelda = document.createTextNode("PEAC");
    celda.appendChild(textoCelda);
    hilera.appendChild(celda);

    for (var j = 0; j < competencias; j++) {
        var celda = document.createElement("td");
        textoCelda = document.createTextNode("0");
        celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
        hilera.appendChild(celda);
    }

    tblBody.appendChild(hilera);
    var hilera = document.createElement("tr");
    celda = document.createElement("td");
    textoCelda = document.createTextNode("TEE");
    celda.appendChild(textoCelda);
    hilera.appendChild(celda);

    for (var j = 0; j < competencias; j++) {
        var celda = document.createElement("td");
        textoCelda = document.createTextNode("0");
        celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
        hilera.appendChild(celda);
    }

    tblBody.appendChild(hilera);
    tabla.appendChild(tblHead);
    tabla.appendChild(tblBody);
    body.appendChild(tabla);
}

function editCell(table,row,column,content) {
    var x = document.getElementById(table).rows[row].cells;
    x[column].innerHTML = content;
}
function agregarEvaluacion(){
    var row = $('#tiempoEvaluacion').val();
    row++;
    var column = $('#numeroSemana').val();
    var content = $('#tipoEvaluacion').val();
    if(content==="EFn"){
        var noEval = $('#evalnoCompetencia').val();
        content = "EF"+noEval;
    }
    var table = 'tablaCalendarizacion';
    editCell(table,row,column,content);
}
function agregarLogro(){
    var row = $('#criterioLogro').val();
    row++;
    var column = $('#numeroCompetenciaE').val();
    var content = $('#porcentajeLogro').val();
    var table = 'tablaLogros';
    editCell(table,row,column,content);
}
function agregarTextoIndicador(){
    var row = $('#nivelDesempeño').val();
    var column = 2;
    var content = $('#textoIndicador').val();
    var table = 'tablaDesempeno';
    editCell(table,row,column,content);
}

function agregarIndicador() {
    var body = document.getElementById("divTablaIndicadores");
    var tblBody = document.getElementById("boriteibol");
    var valorIndicador = document.getElementById("valorIndicador");
    var indicador = document.getElementById("indicador");
    var hilera = document.createElement("tr");
    var celda = document.createElement("td");
    var textoCelda = document.createTextNode(indicador.value);
    celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
    hilera.appendChild(celda);
    celda = document.createElement("td");
    textoCelda = document.createTextNode(valorIndicador.value);
    celda.appendChild(textoCelda);celda.setAttribute("contenteditable","true");
    hilera.appendChild(celda);
    tblBody.appendChild(hilera);

    var tabla =document.getElementById("tablaIndicadores");
    var select =document.getElementById("noIndicador");
    while(select.childElementCount>0){
        select.removeChild(select.lastChild);
    }
    var numIndicadores = tabla.rows.length;
    for(var i=1;i<numIndicadores;i++){
        var option = document.createElement("option");
        option.setAttribute("value",i);
        textoCelda = document.createTextNode(i);
        option.appendChild(textoCelda);
        select.appendChild(option);

    }


}
function guardarYAgregarCompetencia(){
    var iddosificacion = document.getElementById("iddedosificacion");
    var idd,idc;
    var error=false;
    if(iddosificacion===null){
        $.ajax({
            url: "/TPAProyectoIntegrador/model/dosificacion/newDosificacion.php",
            type: "post",
            data: {
                periodo : $('#periodo').val(),
                planestudios : $('#planEstudios').val(),
                idmaestro : $('#maestro').val(),
                idcarrera : $('#asignatura').val(),
                horasPracticas : $('#horasPracticas').val(),
                horasTeoricas : $('#horasTeoria').val(),
                caracterizacionAsignatura : $('#caracterizacionDeLaAsignatura').val(),
                intencionDidactica : $('#intencionDidactica').val(),
                competenciaAsignatura : $('#competenciaAsignatura').val(),
                bibliografia : $('#fuentesInformacion').val()
            }
        }).done(
            function(data){
                if(data.code === 200){
                    //$.growl.notice({ message: "Dosificacion insertada" });
                    //$('#tbUsers').dataTable().api().ajax.reload();
                    /*$('#username').val('');
                     $('#password').val('');*/
                    var input = document.createElement("input");
                    input.setAttribute("id","iddedosificacion");
                    input.setAttribute("hidden","true");
                    input.setAttribute("value",data.msg);
                    document.getElementById("frmDosificacion").appendChild(input);
                    console.log("dosi"+data.msg);
                    agregarSemanas(data.msg);
                }
                else{
                    $.growl.error({ message: "Error al insertar dosificación, por favor verifica la información." });
                }

            }
        ).fail(
            function(){
                $.growl.error({ message: "No hay mensaje que mostrar dosificacion" });
            }
        );
    }else{
        agregarSemanas($('#iddedosificacion').val());
    }
}
function agregarSemanas(idd) {
    //SEMANAS
    var error=false;
    var table = document.getElementById("tablaCalendarizacion");
    var numInd = $('#tablaCalendarizacion tbody tr').length;
    numInd += 1;
    console.log($('#tablaCalendarizacion tbody tr').length);
    for (var j = 1; j < numInd; j++) {
        for (var i = 1; i < table.rows[0].cells.length; i++) {
            var concep = table.rows[j].cells[0].innerHTML;
            var eval = table.rows[j].cells[i].innerHTML;
            var nosem = table.rows[0].cells[i].innerHTML;
            $.ajax({
                url: "/TPAProyectoIntegrador/model/dosificacion/newSemana.php",
                type: "post",
                data: {
                    iddosificacion: idd,
                    concepto: concep,
                    evaluacion: eval,
                    nosemana: nosem
                }
            }).done(
                function (data) {
                    if (data.code === 200) {

                    }
                    else {
                        error = true;
                        $.growl.error({message: "Error al insertar semanas, por favor verifica la información."});
                    }

                }
            ).fail(
                function () {
                    error = true;
                    $.growl.error({message: "No hay mensaje que mostrar semanas"});
                }
            );


        }
    }
    if(!error){
        console.log("sema"+idd);
        agregarLogros(idd);
    }
}
function agregarLogros(idd){
    //LOGROS
    var table = document.getElementById("tablaLogros");
    var numInd = $('#tablaLogros tbody tr').length;
    var error=false;
    numInd+=1;
    console.log($('#tablaLogros tbody tr').length);
    for(var j =1;j<numInd;j++){
        for(var i=1;i<table.rows[0].cells.length;i++){
            var columna = table.rows[j].cells[0].innerHTML;
            var celda = table.rows[j].cells[i].innerHTML;
            var fila = table.rows[0].cells[i].innerHTML;
            $.ajax({
                url: "/TPAProyectoIntegrador/model/dosificacion/newLogro.php",
                type: "post",
                data: {
                    iddosificacion : idd,
                    criterioLogro : columna,
                    noCompetencia : fila,
                    porcentaje : celda
                }
            }).done(
                function(data){
                    if(data.code === 200){

                    }
                    else{
                        error=true;
                        $.growl.error({ message: "Error al insertar logros, por favor verifica la información." });
                    }

                }
            ).fail(
                function(){
                    error=true;
                    $.growl.error({ message: "No hay mensaje que mostrar logros" });
                }
            );


        }
    }
    if(!error){
        console.log("logros"+idd);
        agregarCompetencias(idd);
    }
}
function agregarCompetencias(idd){
    //COMPETENCIAS
    console.log(idd);
    var idcomp = document.getElementById("iddecomp");
    if(idcomp===null){
        $.ajax({
            url: "/TPAProyectoIntegrador/model/dosificacion/newCompetenciaEspecifica.php",
            type: "post",
            data: {
                iddosificacion : idd,
                nombre : $('#competenciaEspecifica').val(),
                numero : $('#noCompetencia').val(),
                horasTeoricas : $('#horasTeoricas').val(),
                horasPracticas : $('#horasPractica').val(),
                descripcion : $('#descripcion').val(),
                temas : $('#temasySubtemas').val(),
                actividadesAprendizaje : $('#actividadesAprendizaje').val(),
                actividadesEnsenanza : $('#actividadesEnseñanza').val(),
                desarrolloCompEsp : $('#desarrolloCompetenciasGenericas').val(),
                observaciones : $('#observaciones').val(),
                acciones : $('#acciones').val()
            }
        }).done(
            function(data){
                if(data.code === 200){
                    // $.growl.notice({ message: "Competencia insertada" });
                    //$('#tbUsers').dataTable().api().ajax.reload();
                    /*$('#username').val('');
                     $('#password').val('');*/
                    var input = document.createElement("input");
                    input.setAttribute("id","iddecomp");
                    input.setAttribute("hidden","true");
                    input.setAttribute("value",data.msg);
                    document.getElementById("frmDosificacion").appendChild(input);
                    console.log("comp"+data.msg);
                    agregarIndicadores(data.msg);
                }
                else{
                    $.growl.error({ message: "Error al insertar competencias, por favor verifica la información." });
                }

            }
        ).fail(
            function(){
                $.growl.error({ message: "No hay mensaje que mostrar competencias" });
            }
        );
    }else{
        idc=$("#iddecomp").val();
        agregarIndicadores(idc);
    }
}
function agregarIndicadores(idc){
    //INDICADORES
    var error=false;
    var table = document.getElementById("tablaIndicadores");
    var numInd = $('#tablaIndicadores tbody tr').length;
    numInd+=1;
    console.log($('#tablaIndicadores tbody tr').length);
    for(var j =1;j<numInd;j++){
        var columna1 = table.rows[j].cells[0].innerHTML;
        var columna2 = table.rows[j].cells[1].innerHTML;

        $.ajax({
            url: "/TPAProyectoIntegrador/model/dosificacion/newIndicador.php",
            type: "post",
            data: {
                idcomp : idc,
                indicador : columna1,
                valor : columna2
            }
        }).done(
            function(data){
                if(data.code === 200){

                }
                else{
                    error=true;
                    $.growl.error({ message: "Error al insertar indicadores, por favor verifica la información." });
                }

            }
        ).fail(
            function(){
                error=true;
                $.growl.error({ message: "No hay mensaje que mostrar indicadores" });
            }
        );



    }
    if(!error) {
        console.log("indicador" + idc);
        agregarDesempeno(idc);
    }
}
function agregarDesempeno(idc){
    var error=false;
    var table = document.getElementById("tablaDesempeno");
    var numInd = $('#tablaDesempeno tbody tr').length;
    numInd+=1;
    console.log($('#tablaDesempeno tbody tr').length);
    for(var j =1;j<numInd;j++){
        var columna1 = table.rows[j].cells[0].innerHTML;
        var columna2 = table.rows[j].cells[1].innerHTML;
        var columna3 = table.rows[j].cells[2].innerHTML;
        var columna4 = table.rows[j].cells[3].innerHTML;
        $.ajax({
            url: "/TPAProyectoIntegrador/model/dosificacion/newDesempeno.php",
            type: "post",
            data: {
                idcomp : idc,
                desempeno : columna1,
                nivelDesempeno : columna2,
                indicadorAlcance : columna3,
                valoracion : columna4
            }
        }).done(
            function(data){
                if(data.code === 200){

                }
                else{
                    error=true;
                    $.growl.error({ message: "Error al insertar desempeños, por favor verifica la información." });
                }

            }
        ).fail(
            function(){
                error=true;
                $.growl.error({ message: "No hay mensaje que mostrar desempeños" });
            }
        );



    }
    if(!error) {
        console.log("desempeño" + idc);
        agregarMatrizEvaluacion(idc);
    }
}
function agregarMatrizEvaluacion(idc){
    //MATRIZ EVALUACION
    var error=false;
    var table = document.getElementById("tablaMatriz");
    var numInd = $('#tablaMatriz tbody tr').length;
    numInd+=1;
    console.log($('#tablaMatriz tbody tr').length);
    for(var j =2;j<numInd;j++){
        var columna1 = table.rows[j].cells[0].innerHTML,
            columna2 = table.rows[j].cells[1].innerHTML,
            columna3 = "",
            columna4  = table.rows[j].cells[table.rows[j].cells.length-1].innerHTML;

        for(var i =2;i<table.rows[j].cells.length-1;i++){
            columna3+=table.rows[j].cells[i].innerHTML+"    ";
        }

        $.ajax({
            url: "/TPAProyectoIntegrador/model/dosificacion/newMatrizEvaluacion.php",
            type: "post",
            data: {
                idcomp : idc,
                evaluacionAprendizaje : columna1,
                porcentaje : columna2,
                indicadorAlcance : columna3,
                evalformcomp : columna4
            }
        }).done(
            function(data){
                if(data.code === 200){

                }
                else{
                    error=true;
                    $.growl.error({ message: "Error al insertar la matriz de evaluación, por favor verifica la información." });
                }

            }
        ).fail(
            function(){
                error=true;
                $.growl.error({ message: "No hay mensaje que mostrar matriz" });
            }
        );

    }
    if(!error){
        $.growl.notice({ message: "Competencia insertada correctamente" });
        $('#iddecomp').remove();
    }

}

function deleteDosi(iddosi) {
    bootbox.confirm({
        title: "Eliminar Dosificacion",
        message: "¿Estas seguro que quieres eliminar la dosificación?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancelar'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirmar'
            }
        },
        callback: function (result) {
            if (result === true) {
                $.ajax({
                    url: "/TPAProyectoIntegrador/model/dosificacion/deleteDosi.php",
                    type: "post",
                    data: {iddosificacion: iddosi}
                }).done(
                    function (data) {
                        if (data.code === 206) {
                            $.growl.error({message: data.msg});
                        } else {
                            if (data.code === 200) {
                                $.growl.notice({message: data.msg});
                                $('#tbDosi').dataTable().api().ajax.reload();
                            } else {
                                $.growl.error({message: data.msg});
                            }
                        }
                    }
                ).fail(
                    function () {
                        $.growl.error({message: "No hay mensaje que mostrar :("});
                    }
                );
            } else {

            }
        }
    });



}


function showDosi(iddosi) {



}



