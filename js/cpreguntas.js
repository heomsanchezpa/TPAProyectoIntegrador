$(function(){

		/*$.ajax({
        url: 'http://localhost/TPAProyectoIntegrador/model/materias/getCarreras.php',
        type: 'GET',
        dataType: 'json'
    }).done(function (json){
        if(json.code===200)
        $.each(json.msg, function(i,row){
           $('<option></option>', {text: row.nombre}).attr('value',row.carreraid).appendTo('#cbNombreCarrera'); 
           $('<option></option>', {text: row.nombre}).attr('value',row.carreraid).appendTo('#cbNombreCarrera2'); 
        });
    });*/

     $('#frmPreguntas').validate({
       rules:{
           materiaid:{
               minlength: 3,
               maxlength: 20,
               required: true
           },
           clavearea:{
                minlength: 3,
                maxlength: 20,
                required: true
           },
           nombremateria:{
                minlength: 10,
                maxlength: 50,
                required: true
           },
           nombreabreviado:{
                minlength: 1,
                maxlength: 50,
                required: true
           },
           numerocreditos:{
                number: true,
                required: true
           }
       },
       messages:{
            materiaid:{
               minlength: "Minimo 3 caracteres",
               maxlength: "Maximo 3 caracteres",
               required: "El ID de la materia es requerido"
           },
           clavearea:{
                minlength: "Minimo 3 caracteres",
                maxlength: "Maximo 20 caracteres",
                required: "La clave del area es requerido"
           },
           nombremateria:{
                minlength: "Minimo 10 caracteres",
                maxlength: "Maximo 50 caracteres",
                required: "El nombre de la materia es requerido"
           },
           nombreabreviado:{
                minlength: "Minimo 1 caracteres",
                maxlength: "Maximo 50 caracteres",
                required: "El nombre abreviado de la materia es requerido"
           },
           numerocreditos:{
                number: "Solo numeros",
                required: "El numero de creditos es requerido"
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
           newMateria();
           return false;
       }
   });

    $('#tbPreguntas').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"http://localhost/TPAProyectoIntegrador/model/materias/getMaterias.php",
          dataSrc:function(json){
              
              return json['msg'];
          }
        },
        columns:[
            {
                data:"clave"
            },
            {
                data:"preguntas"   
            },
            {
                data:"tipo"
            },
            {
                data: function(row){
                  str="<div align='center'>";
                  str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onclick='deleteMateria("+ row["materiaid"] +")'><i class='glyphicon glyphicon-trash'></i></button>";
                  str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showMateria("+row['materiaid']+")'><i class='glyphicon glyphicon-edit'></i></button>";
                  str+="<div>";
                  return str;
              }  
            }

        ]
            
        
    });



});

function deleteMateria (mid) {
    console.log("hola");
    
}

function showMateria (mid) {
    console.log("hola");
    
}

function newMateria () {
    $.ajax({
        url: "http://localhost/TPAProyectoIntegrador/model/materias/newMateria.php",
        type: "post",
        data: {materiaid : $('#materiaid').val(),
                cbNivelEscolar : $('#cbNivelEscolar').val(),
                cbMateriaTipo: $('#cbMateriaTipo').val(),
                clavearea: $('#clavearea').val(),
                nombremateria: $('#nombremateria').val(),
                nombreabreviado: $('#nombreabreviado').val(),
                numerocreditos: $('#numerocreditos').val(),
                cbNombreCarrera: $('#cbNombreCarrera').val()}
    }).done(
        function(data){
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbMaterias').dataTable().api().ajax.reload();
                $('#materiaid').val('');
                $('#clavearea').val('');
                $('#nombremateria').val('');
                $('#nombreabreviado').val('');
                $('#numerocreditos').val('');
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
