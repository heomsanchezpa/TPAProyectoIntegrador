  $(function(){

    $('#cAlumno').trigger('click');

    $.ajax({
          url: '/TPAProyectoIntegrador/model/carrera/GetCarreras.php',
          type: 'GET',
          dataType: 'json'
      }).done(function (json){
          console.log("Codigo json: "+json.code);
          if(json.code===200)
          $.each(json.msg, function(i,row){
              console.log(row.nombrecarrera);/*
             $('<option></option>', {text: row.nombrecarrera}).attr('value',row.idcarrera).appendTo('#carrera'); 
             $('<option></option>', {text: row.nombrecarrera}).attr('value',row.idcarrera).appendTo('#carrera2'); */
             $('#carrera').append($('<option>', { 
                value: row.nombrecarrera,
                text : row.nombrecarrera 
            }));
             $('#carrera2').append($('<option>', { 
                value: row.nombrecarrera,
                text : row.nombrecarrera 
            }));
          });
      });



      $('#frmAlumno').validate({
         rules:{
              no_control:{
                 minlength: 8,
                 maxlength: 8,
                 required: true
              },
              semestre:{
                 minlength: 1,
                 maxlength: 2,
                 required: true},
              nombres:{
                 minlength: 1,
                 maxlength: 100,
                 required: true},
              apellido_pat:{
                 minlength: 1,
                 maxlength: 100,
                 required: true},
              apellido_mat:{
                 minlength: 1,
                 maxlength: 100,
                 required: true},
              curp:{
                 minlength: 18,
                 maxlength: 18,
                 required: true},
              promedio:{
                 minlength: 1,
                 required: true},
              email:{
                 minlength: 1,
                 required: true},
              nacionalidad:{
                 minlength: 1,
                 required: true},
                nip:{
                 minlength: 4,
                 maxlength: 4,
                 required: true}
         },
         messages:{
             no_control:{
                 minlength: "El número de control debe ser de 8 caracteres",
                 maxlength: "El número de control debe ser de 8 caracteres",
                 required: "Capture el número de control"
              },
              semestre:{
                 minlength:"1 caracter min",
                 maxlength:"2 caracteres max",
                 required: "Capture el semestre"},
              nombres:{
                 minlength:"1 caracter min",
                 maxlength:"100 caracteres max",
                 required: "Capture el nombre"},
              apellido_pat:{
                 minlength:"1 caracter min",
                 maxlength:"100 caracteres max",
                 required: "Capture el apellido paterno"},
              apellido_mat:{
                 minlength:"1 caracter min",
                 maxlength:"100 caracteres max",
                 required: "Capture el apellido materno"},
              curp:{
                 minlength:"18 caracteres min",
                 maxlength:"28 caracteres max",
                 required: "Capture la curp"},
              promedio:{
                 minlength:"1 caracter min",
                 required: "Capture el promedio"},
              email:{
                 minlength:"1 caracter min",
                 required: "Capture el email"},
              nacionalidad:{
                 minlength:"1 caracter min",
                 required: "Capture la nacionalidad"},
                nip:{
                 minlength:"4 caracteres min",
                 maxlength:"4 caracteres max",
                 required: "Capture el nip"}

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
             newAlumno();
             return false;
         }
     });

  $('#frmEditAlumno').validate({
         rules:{
              no_control:{
                 minlength: 8,
                 maxlength: 8,
                 required: true
              },
              semestre:{
                 minlength: 1,
                 maxlength: 2,
                 required: true},
              nombres:{
                 minlength: 1,
                 maxlength: 100,
                 required: true},
              apellido_pat:{
                 minlength: 1,
                 maxlength: 100,
                 required: true},
              apellido_mat:{
                 minlength: 1,
                 maxlength: 100,
                 required: true},
              curp:{
                 minlength: 18,
                 maxlength: 18,
                 required: true},
              promedio:{
                 minlength: 1,
                 required: true},
              email:{
                 minlength: 1,
                 required: true},
              nacionalidad:{
                 minlength: 1,
                 required: true},
                nip:{
                 minlength: 4,
                 maxlength: 4,
                 required: true}
         },
         messages:{
             no_control:{
                 minlength: "El número de control debe ser de 8 caracteres",
                 maxlength: "El número de control debe ser de 8 caracteres",
                 required: "Capture el número de control"
              },
              semestre:{
                 minlength:"1 caracter min",
                 maxlength:"2 caracteres max",
                 required: "Capture el semestre"},
              nombres:{
                 minlength:"1 caracter min",
                 maxlength:"100 caracteres max",
                 required: "Capture el nombre"},
              apellido_pat:{
                 minlength:"1 caracter min",
                 maxlength:"100 caracteres max",
                 required: "Capture el apellido paterno"},
              apellido_mat:{
                 minlength:"1 caracter min",
                 maxlength:"100 caracteres max",
                 required: "Capture el apellido materno"},
              curp:{
                 minlength:"18 caracteres min",
                 maxlength:"28 caracteres max",
                 required: "Capture la curp"},
              promedio:{
                 minlength:"1 caracter min",
                 required: "Capture el promedio"},
              email:{
                 minlength:"1 caracter min",
                 required: "Capture el email"},
              nacionalidad:{
                 minlength:"1 caracter min",
                 required: "Capture la nacionalidad"},
                nip:{
                 minlength:"4 caracteres min",
                 maxlength:"4 caracteres max",
                 required: "Capture el nip"}
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
             newAlumno();
             return false;
         }
     });



      $('#tbAlumnos').DataTable({
        responsive: true,
        scrollX: true,
          language:{
              url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
          },
          ajax:{
            url:"/TPAProyectoIntegrador/model/alumno/GetAlumnos.php"  ,
            dataSrc:function(json){

                return json['msg'];
            }
          },
          columns:[
          {
                data: function(row){
                    str="<div align='center'>";
                    str+="<button id='btnBorrar' class='btn btn-danger btn-xs' onClick='deleteAlumno("+row["no_control"]+")'><i class='glyphicon glyphicon-trash'></i></button>";
                    str+= "&nbsp;<button id='btnEditar' class = 'btn btn-success btn-xs' onClick = 'showAlumno("+row['no_control']+")'><i class='glyphicon glyphicon-edit'></i></button>";
                    str+="<div>";
                    return str;
                }
              },
              {
                data:"no_control"
              },
              {
                data:"carrera"
              },
              {
                  data:"semestre"
              },
              {
                  data:"status"
              },
              {
                  data:"reticula"
              },
              {
                  data:"especialidad"
              },
              {
                  data:"nombres"
              },
              {
                  data:"apellido_pat"
              },
              {
                  data:"apellido_mat"
              },
              {
                  data:"fecha_nac"
              },
              {
                  data:"curp"
              },
              {
                  data:"sexo"
              },
              {
                  data:"periodo_ingreso"
              },
              {
                  data:"promedio"
              },
              {
                  data:"creditos_aprobados"
              },
              {
                  data:"creditos_cursados"
              },
              {
                  data:"email"
              },
              {
                  data:"nacionalidad"
              },
              {
                  data:"nip"
              }

          ]


      });


  });

  function isCheked () {
    console.log("Hola a todos");
  }


  function showAlumno(no_control,carrera,semestre,status,reticula,especialidad,nombres,apellido_pat,apellido_mat,fecha_nac,curp,sexo,periodo_ingreso,promedio,creditos_aprobados,creditos_cursados,email,nacionalidad,nip) {
    $('#no_control').val(no_control);
            $('#carrera2').val(carrera);
            $('#semestre2').val(semestre);
            $('#status2').val(status);
            $('#reticula2').val(reticula);
            $('#especialidad2').val(especialidad);
            $('#nombres2').val(nombres);
             $('#apellido_pat2').val(apellido_pat);
                 $('#apellido_mat2').val(apellido_mat);
                 $('#fecha_nac2').val(fecha_nac);
                 $('#curp2').val(curp);
                 $('#sexo2').val(sexo);
                 $('#periodo_ingreso2').val(periodo_ingreso);
                 $('#promedio2').val(promedio);
                 $('#creditos_aprobados2').val(creditos_aprobados);
                 $('#creditos_cursados2').val(creditos_cursados);
                 $('#email2').val(email);
                 $('#nacionalidad2').val(nacionalidad);
                 $('#nip2').val(nip);
    $("#modalAlumno").modal("show");
    
  }


  function checkbutton () {
      $("[name='my-checkbox']").bootstrapSwitch();
  }

  function newAlumno(){
      $.ajax({
          url: "/TPAProyectoIntegrador/model/alumno/NewAlumno.php",
          type: "post",
          data: {no_control : $('#no_control').val(),
                 carrera : $('#carrera').val(),
                 semestre: $('#semestre').val(),
                 status : $('#status').val(),
                 reticula : $('#reticula').val(),
                 especialidad: $('#especialidad').val(),
                 nombres : $('#nombres').val(),
                 apellido_pat : $('#apellido_pat').val(),
                 apellido_mat: $('#apellido_mat').val(),
                 fecha_nac : $('#fecha_nac').val(),
                 curp : $('#curp').val(),
                 sexo: $('#sexo').val(),
                 periodo_ingreso : $('#periodo_ingreso').val(),
                 promedio : $('#promedio').val(),
                 creditos_aprobados: $('#creditos_aprobados').val(),
                 creditos_cursados: $('#creditos_cursados').val(),
                 email: $('#email').val(),
                 nacionalidad: $('#nacionalidad').val(),
                 nip: $('#nip').val()
               }
      }).done(
          function(data){
              if(data.code === 200){
                  $.growl.notice({ message: data.msg });
          $('#tbAlumnos').dataTable().api().ajax.reload();
                  $('#no_control').val('');
                  $('#carrera').val('');
                  $('#semestre').val('');
                  $('#status').val('');
                  $('#reticula').val('');
                  $('#especialidad').val('');
                  $('#nombres').val('');
                  $('#apellido_pat').val('');
                  $('#apellido_mat').val('');
                  $('#fecha_nac').val('');
                  $('#curp').val('');
                  $('#sexo').val('');
                  $('#periodo_ingreso').val('');
                  $('#promedio').val('');
                  $('#creditos_aprobados').val('');
                  $('#creditos_cursados').val('');
                  $('#email').val('');
                  $('#nacionalidad').val('');
                  $('#nip').val('');
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

function updateAlumno() {
    $.ajax(
        {
            url: "/TPAProyectoIntegrador/model/alumno/UpdateAlumno.php",
            type: "post",
            data: {
                 no_control : $('#no_control').val(),
                 carrera : $('#carrera2').val(),
                 semestre: $('#semestre2').val(),
                 status : $('#status2').val(),
                 reticula : $('#reticula2').val(),
                 especialidad: $('#especialidad2').val(),
                 nombres : $('#nombres2').val(),
                 apellido_pat : $('#apellido_pat2').val(),
                 apellido_mat: $('#apellido_mat2').val(),
                 fecha_nac : $('#fecha_nac2').val(),
                 curp : $('#curp2').val(),
                 sexo: $('#sexo2').val(),
                 periodo_ingreso : $('#periodo_ingreso2').val(),
                 promedio : $('#promedio2').val(),
                 creditos_aprobados: $('#creditos_aprobados2').val(),
                 creditos_cursados: $('#creditos_cursados2').val(),
                 email: $('#email2').val(),
                 nacionalidad: $('#nacionalidad2').val(),
                 nip: $('#nip2').val()
            }
        }
    ).done(
        function (data) {
            //alert("Se realizó correctamente "+data.code);
            if (data.code == 200) {
                $.growl.notice({message: data.msg});
                $('#tbAlumnos').dataTable().api().ajax.reload();
                $('#modalAlumno').modal("toggle");
            } else {
                $.growl.error({message: data.msg});
            }
        }
    ).fail(
        function () {
            $.growl.error({message: "El servidor no está disponible :("});
        }
    );
}
function deleteAlumno(no_control) {

    swal(
        {
            title: "¿Estas seguro que deseas eliminar este registro?", text: "",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55", confirmButtonText: "Aceptar!",
            cancelButtonText: "Cancelar", closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {

                var para = {
                    "no_control": no_control
                };
                ///Comienza a Borrar
                $.ajax(
                    {
                        url: "/TPAProyectoIntegrador/model/alumno/DeleteAlumno.php",
                        type: "post",
                        data: {no_control: no_control}
                    }
                ).done(
                    function (data) {
                        //alert("Se realizó correctamente "+data.code);
                        if (data.code == 200) {
                            //$.growl.notice({message: data.msg});
                            $.growl.notice({message: data.msg + " " + data.details});
                            swal("Eliminado!", "El registro se elimino correctamente", "success");
                            $('#tbAlumnos').dataTable().api().ajax.reload();
                            $('#no_control').val('');
                        } else {
                            $.growl.error({message: data.msg});
                        }
                    }
                ).fail(
                    function () {
                        $.growl.error({message: "El servidor no está disponible :("});
                    }
                );
            } else {
                swal("Cancelado", "Accion Cancelada", "error");
            }
        });

}


