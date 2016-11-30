$(function(){
		$.ajax({
        url: 'http://localhost/TPAProyectoIntegrador/model/materias/getMaterias.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        console.log("Codigo json: "+json.code);
        if(json.code===200)
        $.each(json.msg, function(i,row){
            console.log(row.nombre);
           $('<option></option>', {text: row.nombre}).attr('value',row.carreraid).appendTo('#cbNombreCarrera'); 
           //$('<option></option>', {text: row.nombre}).attr('value',row.carreraid).appendTo('#cbNombreCarrera2'); 
        });
    });
});


console.log("row.nombre");
