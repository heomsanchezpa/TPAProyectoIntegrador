$(function(){
   $('#tableMaestros').DataTable({
       responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
          url:"http://localhost/TPAProyectoIntegrador/model/maestro/getMaestros.php"  ,
          dataSrc:function(json){
              console.log(json);
              return json['msg'];
          }
        },
        columns: [
            {
                data: "no_tarjeta"
            },{
                data: "name"
            },{
                data: "lastnameP"
            },{
                data: "lastnameM"
            },{
                data: "rfc"
            },{
                data: "clave_area"
            },{
                data: "area_academica"
            },{
                data: "sex"
            },
          
        ]
    });
	$('#frmMaestro').validate({
		rules:{
     no_tarjeta:{
       required: true
     },
     name:{
       required: true
     },
     lastnameP:{
       required: true
     },
     lastnameM:{
       required: true
     },
     rfc:{
       required: true
     },
     clave_area:{
       required: true
     },
     area_academica:{
       required: true
     },
     sex:{
       required: true
     }
   },
   messages:{
     no_tarjeta:{
       required: "Campo requerido"
     },
     name:{
       required: "Campo requerido"
     },
     lastnameP:{
       required: "Campo requerido"
     },
     lastnameM:{
       required: "Campo requerido"
     },
     rfc:{
       required: "Campo requerido"
     },
     clave_area:{
       required: "Campo requerido"
     },
     area_academica:{
       required: "Campo requerido"
     },
     sex:{
       required: "Campo requerido"
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
     newMaestro();
     return false;
   }
 });
 
});
function newMaestro(){
 $.ajax({
  url: "http://localhost/projecto/model/maestro/newMaestro.php",
  type: "post",
  data:  $('#frmMaestro').serialize()

}).done(
function(data){
  if(data.code === 200){
    var url = "cpanel.php"; 
    $(location).attr('href',url);
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