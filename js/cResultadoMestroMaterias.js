$(function(){   
    $('#tablaresultados').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"/TPAProyectoIntegrador/model/reporte_maestro_materia/getMaestrosMaterias.php",
          dataSrc:function(json){
              
              return json['msg'];
          }
        },
        columns:[
            {
                data:"usuarioname"
            },
            {
                data:"nombre_completo"
            }
        ]
            
       }); 
    });