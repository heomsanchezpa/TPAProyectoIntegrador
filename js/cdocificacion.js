
$(function(){

    $('#cUsuario').trigger('click');

    $.ajax({
        url: 'http://localhost/TPAProyectoIntegrador/model/roles/getRoles.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        console.log("Codigo json: "+json.code);
        if(json.code===200)
            $.each(json.msg, function(i,row){
                console.log(row.rolename);
                $('<option></option>', {text: row.rolename}).attr('value',row.roleid).appendTo('#cbRoles');
            });
    });



    $('#frmUser').validate({
        rules:{
            username:{
                minlength: 3,
                maxlength: 20,
                required: true
            },
            password:{
                minlength: 3,
                maxlength: 20,
                required: true
            }
        },
        messages:{
            username:{
                minlength: "Introduzca al menos tres caracteres",
                maxlength: "Introdusca menos de 20 caracteres",
                required: "Capture el nombre de usuario"
            },
            password:{
                minlength: "Introduzca al menos tres caracteres",
                maxlength: "Introdusca menos de 20 caracteres",
                required: "Capture una contraseña"
            }
        },
        highlight: function (element){
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element){
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element){
            if(element.parent('.input-group').length){
                error.insertAfter(element.parent());
            }else{
                error.insertAfter(element);
            }
        },
        submitHandler: function(form){
            newUser();
            return false;
        }
    });



    $('#tbUsers').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url:"http://localhost/TPAProyectoIntegrador/model/usuario/getUsers.php"  ,
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"usuarioid"
            },
            {
                data:"usuarioname"
            },
            {
                data:"password"
            },
            {
                data:function(row){
                    srt = "";
                    if(row["roleid"] === "1"){
                        srt = "Administrador";
                    }else if(row["roleid"] === "2"){
                        srt = "Maestro";
                    }else{
                        srt = "Alumno";
                    }
                    return srt;
                }
            },
            {

                data:function(row){
                    srt = '<div align="center">';
                    srt += '<label class="switch">';
                    srt += '<input type="checkbox" checked>';
                    srt += '<div class="slider round"></div>';
                    srt += '</label>';
                    srt +="<div>";

                    return srt;
                }
            },
            {
                data: function(row){
                    str="<div align='center'>";
                    str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteRole("+row["usuarioid"]+")'><i class='glyphicon glyphicon-trash'></i></button>";
                    str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showRole("+row['roleid']+",\""+row['rolename']+"\")'><i class='glyphicon glyphicon-edit'></i></button>";
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
    var select =document.getElementById("noIndicador");
    while(select.childElementCount>0){
        select.removeChild(select.lastChild);
    }
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
        celda.appendChild(textoCelda);
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
        textoCelda = document.createTextNode("");
        celda.appendChild(textoCelda);
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
        textoCelda = document.createTextNode("");
        celda.appendChild(textoCelda);
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
        textoCelda = document.createTextNode("");
        celda.appendChild(textoCelda);
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
        celda.appendChild(textoCelda);
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
        textoCelda = document.createTextNode("");
        celda.appendChild(textoCelda);
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
        textoCelda = document.createTextNode("");
        celda.appendChild(textoCelda);
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

function agregarIndicador() {
    var body = document.getElementById("divTablaIndicadores");
    var tblBody = document.getElementById("boriteibol");
    var valorIndicador = document.getElementById("valorIndicador");
    var indicador = document.getElementById("indicador");
    var hilera = document.createElement("tr");
    var celda = document.createElement("td");
    var textoCelda = document.createTextNode(indicador.value);
    celda.appendChild(textoCelda);
    hilera.appendChild(celda);
    celda = document.createElement("td");
    textoCelda = document.createTextNode(valorIndicador.value);
    celda.appendChild(textoCelda);
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

function checkbutton () {
    $("[name='my-checkbox']").bootstrapSwitch();
}

function newUser(){
    $.ajax({
        url: "http://localhost/TPAProyectoIntegrador/model/usuario/newUser.php",
        type: "post",
        data: {username : $('#username').val(),
            password : $('#password').val(),
            roleid: $('#cbRoles').val()}
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbUsers').dataTable().api().ajax.reload();
                $('#username').val('');
                $('#password').val('');
            }
            else{
                $.growl.error({ message: data.msg });
            }

        }
    ).fail(
        function(){
            $.growl.error({ message: "No hay mensaje que mostrar" });
        }
    );
}



