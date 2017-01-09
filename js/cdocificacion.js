
$(function() {

  $('#asignatura').click(function() {
    $('#claveAsignatura').val($('#asignatura').val());
  });



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
      $('<option></option>', {text: row.nombre_completo}).attr('value',row.materiaid).appendTo('#asignatura');
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
        data:"carrera"
      },
      {
        data: "maestro"

      },
      {
        data: "materia"
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
          str+= "&nbsp;<button id='btnMostrar' class = 'btn btn-success btn-xs' onClick = 'showDosi("+row["iddosificacion"]+",\""+row["periodo"]+"\",\""+row["idmateria"]+"\",\""+row["planestudios"]+"\","+row["horasTeoricas"]+","+row["horasPracticas"]+",\""+row["maestro"]+"\",\""+row["carrera"]+"\",\""+row["caracterizacionAsignatura"]+"\",\""+row["intencionDidactica"]+"\",\""+row["competenciaAsignatura"]+"\",\""+row["bibliografia"]+"\")'><i class='glyphicon glyphicon-print'></i></button>";
          //str+= "&nbsp;<button id='btnModificar' class = 'btn btn-primary btn-xs' onClick = 'updateDosi("+row["iddosificacion"]+",\""+row["periodo"]+"\",\""+row["idmateria"]+"\",\""+row["planestudios"]+"\","+row["horasTeoricas"]+","+row["horasPracticas"]+",\""+row["maestro"]+"\",\""+row["carrera"]+"\",\""+row["caracterizacionAsignatura"]+"\",\""+row["intencionDidactica"]+"\",\""+row["competenciaAsignatura"]+"\",\""+row["bibliografia"]+"\")'><i class='glyphicon glyphicon-pencil'></i></button>";
          str+="<div>";
          return str;
        }
      }

    ]


  });


});

function showDosi(iddosi, periodo, idmateria,planestudios,ht,hp,maestro,carrera,caracterizacionAsignatura,intencionDidactica,competenciaAsignatura,bibliografia) {
  $.ajax({
    url: '/TPAProyectoIntegrador/model/materias/getMateriaById.php',
    //url: '/TPAProyectoIntegrador/model/maestro/getMaestroById.php', //test
    type: 'POST',
    dataType: 'json',
    data: {
      idmateria: idmateria
      //no_tarjeta: '5'//test
    }

  }).done(function (json){
    console.log("Codigo jsonffdgfdg: "+json);
    if(json.code===200)
    $.each(json.msg, function(i,row){
      console.log("NOERROR!");
      madeTable(iddosi,periodo,row.nombre_completo,planestudios,idmateria,ht,hp,row.creditos,maestro,carrera,caracterizacionAsignatura,intencionDidactica,competenciaAsignatura,bibliografia);
      //madeTable(iddosi,periodo,row.clave_area,planestudios,idmateria,ht,hp,4,maestro,carrera,caracterizacionAsignatura,intencionDidactica,competenciaAsignatura,bibliografia); //test
      return;
    });
  });//Materias


}
function madeTable(iddosi, periodo, materia,planestudios,clavemateria,ht,hp,creditos,maestro,carrera,caracterizacionAsignatura,intencionDidactica,competenciaAsignatura,bibliografia){
  var date = new Date();
  var comp=false,identificadores=false;
  $.ajax({

    url: '/TPAProyectoIntegrador/model/dosificacion/getSemanasByDosi.php',
    type: 'POST',
    dataType: 'json',
    data: {
      iddosi: iddosi
    }

  }).done(function (json){
    if(json.code===200){
      var tableSemanas = {};
      var widths = new Array();
      tableSemanas[0] = new Array();
      tableSemanas[1] = new Array();
      tableSemanas[2] = new Array();
      tableSemanas[3] = new Array();

      tableSemanas[2].push({
        text : "TR",
        style  : 'subtitle'
      });
      tableSemanas[1].push({
        text : "TP",
        style  : 'subtitle'
      });
      tableSemanas[3].push({
        text : "SD",
        style  : 'subtitle'
      });
      tableSemanas[0].push({
        text : "Semanas",
        style  : 'subtitle'
      });
      widths.push('*');

      $.each(json.msg, function(i,row){

        if(row['concepto']==='TR'){
          tableSemanas[2].push({
            text : row['evaluacion'],
            style  : 'body'
          });
          tableSemanas[0].push({
            text : row['nosemana'],
            style  : 'subtitle'
          });
          widths.push('*');
        }
        if(row['concepto']==='TP')
        tableSemanas[1].push({
          text : row['evaluacion'],
          style  : 'body'
        });
        if(row['concepto']==='SD')
        tableSemanas[3].push({
          text : row['evaluacion'],
          style  : 'body'
        });
      });
      var semanas = new Array();
      semanas.push(tableSemanas[0]);
      semanas.push(tableSemanas[1]);
      semanas.push(tableSemanas[2]);
      semanas.push(tableSemanas[3]);
      $.ajax({

        url: '/TPAProyectoIntegrador/model/dosificacion/getLogrosByDosi.php',
        type: 'POST',
        dataType: 'json',
        data: {
          iddosi: iddosi
        }

      }).done(function (json2){
        if(json2.code===200){
          var tableLogros = {};
          var widths2 = new Array();
          tableLogros[0] = new Array();
          tableLogros[1] = new Array();
          tableLogros[2] = new Array();

          tableLogros[0].push({
            text : "Competencias específica",
            style  : 'subtitle'
          });
          tableLogros[1].push({
            text : "PEAC",
            style  : 'subtitle'
          });
          tableLogros[2].push({
            text : "TEE",
            style  : 'subtitle'
          });
          widths2.push('*');

          $.each(json2.msg, function(i,row){

            if(row['criterioLogro']==='PEAC')
            {
              tableLogros[1].push({
                text : row['porcentaje'],
                style  : 'body'
              });
              tableLogros[0].push({
                text : row['noCompetencia'],
                style  : 'subtitle'
              });
              widths2.push('*');
            }
            if(row['criterioLogro']==='TEE')
            tableLogros[2].push({
              text : row['porcentaje'],
              style  : 'body'
            });
          });//each
          var logros = new Array();
          logros.push(tableLogros[0]);
          logros.push(tableLogros[1]);
          logros.push(tableLogros[2]);
          $.ajax({

            url: '/TPAProyectoIntegrador/model/dosificacion/getCompetenciasByDosi.php',
            type: 'POST',
            dataType: 'json',
            data: {
              iddosi: iddosi
            }

          }).done(function (json3){
            if(json3.code===200){
              var identificadores = new Array();
              var competencias = new Array();
              $.each(json3.msg, function(i,row){
                competencias.push(
                  {
                    text: '7. Análisis por competencias específicas: '+row['nombre'],
                    style: 'subtitle'
                }
              );
              $.ajax({

                url: '/TPAProyectoIntegrador/model/dosificacion/getIdentificadoresByComp.php',
                type: 'POST',
                dataType: 'json',
                data: {
                  idcomp: row['idcompetencia']
                },

              }).done(function (json4){

                if(json4.code===200){
                  identificadores.push([ {
                    text: 'Competencia No. '+row['numero'],
                    style: 'subtitle'
                  },
                  {
                    text: 'Descripcion: '+row['descripcion'],
                    style: 'body',
                    colSpan: 3,
                    rowSpan: 2
                  }, '','' ]);
                  identificadores.push([
                    {
                      text:'Horas Teórico-Prácticas:'+row['horasTeoricas']+" - "+row['horasPracticas'],
                      style: 'subtitle'
                    }, '', '','' ]);
                    identificadores.push([
                      {
                        text:'Temas y subtemas para desarrollar la específica',
                        style: 'subtitle'
                      },
                      {
                        text:'Actividades de aprendizaje',
                        style: 'subtitle'
                      },{
                        text:'Actividades de enseñanza',
                        style: 'subtitle'
                      },{
                        text:'Desarrollo de competencias genéricas',
                        style: 'subtitle'
                      }
                    ]);
                    identificadores.push([
                      {text:row['temas'],style:'body'},{text:row['actividadesAprendizaje'],style:'body'},{text:row['actividadesEnsenanza'],style:'body'},{text:row['desarrolloCompEsp'],style:'body'}
                    ]);
                    identificadores.push([
                      {
                        text: 'Indicadores de alcance',
                        style: 'subtitle',
                        alignment:'center',
                        colSpan: 3
                      },'','',{
                        text: 'Valor del indicador',
                        style: 'subtitle',
                        alignment:'center'
                      }
                    ]);
                  $.each(json4.msg, function(i2,row2){
                    identificadores.push([
                      {
                        text: row2['indicador'],
                        style: 'body',
                        alignment:'center',
                        colSpan: 3
                      },'','',
                      {
                        text: row2['valor'],
                        style: 'body',
                        alignment:'center'
                      }
                    ]);

                    });//each json4
                    competencias.push(
                      {
                        table:{
                          dontBreakRows:true,
                        widths: ['*','*','*','*'],
                        body:identificadores
                      }
                    }
                    );//push competencias
                    var desempeno = new Array();
              $.ajax({
                  url: '/TPAProyectoIntegrador/model/dosificacion/getDesempenoByComp.php',
                  type: 'POST',
                  dataType: 'json',
                  data: {
                    idcomp: row['idcompetencia']
                  }
              }).done(function (json5){
                if(json5.code===200){
                  desempeno.push(
                    [
                      {
                        text: 'Desempeño',
                        style: 'subtitle',
                        alignment:'center'
                      },
                      {
                        text: 'Nivel de desempeño',
                        style: 'subtitle',
                        alignment:'center'
                      },
                      {
                        text: 'Indicadores de alcance',
                        style: 'subtitle',
                        alignment:'center'
                      },
                      {
                        text: 'Valoración numérica',
                        style: 'subtitle',
                        alignment:'center'
                      }
                    ]
                  );
                  competencias.push(
                    {
                      text: '\n\nNiveles de desempeño:\n\n',
                      style: 'subtitle'
                  }
                );
                  $.each(json5.msg, function(i5,row5){
                    desempeno.push(
                      [
                        {
                          text: row5['desempeno'],
                          style: 'body',
                          alignment:'center'
                        },
                        {
                          text: row5['nivelDesempeno'],
                          style: 'body',
                          alignment:'center'
                        },
                        {
                          text: row5['indicadorAlcance'],
                          style: 'body',
                          alignment:'center'
                        },
                        {
                          text: row5['valoracion'],
                          style: 'body',
                          alignment:'center'
                        }
                      ]
                    );
                  });
                  competencias.push(
                     {
                       table:{
                         dontBreakRows:true,
                       widths: ['20%','15%','*','15%'],
                       body:desempeno
                     }
                   }
                   );
                    $.ajax({

                  url: '/TPAProyectoIntegrador/model/dosificacion/getMatrizByComp.php',
                  type: 'POST',
                  dataType: 'json',
                  data: {
                    idcomp : row['idcompetencia']
                  }

                }).done(function (json6){
                  if(json6.code===200){
                    var matriz = new Array();
                    widths2 = new Array();
                    var matriz1 = new Array();
                    var matriz2 = new Array();
                    competencias.push(
                      {
                        text: '\n\nMatriz de evaluación:\n\n',
                        style: 'subtitle'
                    });
                    var totales = new Array();
  			               $.each(json6.msg, function(i6,row6){
                         var indicadoresbla = row6['indicadorAlcance'].split('    ');
                         if(i6==0){

                           widths2.push('30%');
                           widths2.push('auto');
                           matriz1.push(
                           {
                             text: 'Evidencia de aprendizaje',
                             style: 'subtitle',
                             alignment:'center',
                             rowSpan : 2
                           });
                           matriz2.push('');
                           matriz1.push({
                             text: '%',
                             style: 'subtitle',
                             alignment:'center',
                             rowSpan : 2
                           });
                           matriz2.push('');
                           for (var w = 0; w < indicadoresbla.length-1; w++) {
                             totales[w]=parseInt(indicadoresbla[w]);
                             widths2.push('auto');
                             var indi = w+1;
                             matriz2.push(indi+"");
                             if(w==0){
                               matriz1.push({
                                 text: 'Indicador de alcance',
                                 style: 'subtitle',
                                 alignment:'center',
                                 colSpan : indicadoresbla.length-1
                               });
                             }else {
                               matriz1.push('');
                             }
                           }
                           widths2.push('*');
                           matriz2.push('');
                           matriz1.push({
                             text: 'Evaluación formativa de la competencia',
                             style: 'subtitle',
                             alignment:'center',
                             rowSpan : 2
                           });
                           matriz.push(matriz1);
                           matriz.push(matriz2);
                         }
                         //inicio de llenado de tabla
                         matriz1 = new Array();
                         matriz1.push({
                           text: row6['evaluacionAprendizaje'],
                           style: 'body'
                         });
                         matriz1.push({
                           text: row6['porcentaje'],
                           style: 'body'
                         });
                         for (var w = 0; w < indicadoresbla.length-1; w++) {
                           if(i6>0)
                           totales[w]+=parseInt(indicadoresbla[w]);
                             matriz1.push({
                               text: indicadoresbla[w],
                               style: 'body'
                             });
                           }//for
                           matriz1.push({
                             text: row6['evalformcomp'],
                             style: 'body'
                           });
                           matriz.push(matriz1);
                       });//each
                       matriz1 = new Array();
                       matriz1.push('');
                       matriz1.push({
                         text: 'Total',
                         style: 'body'
                       });
                       for(var e = 0;e<totales.length;e++){
                         matriz1.push({
                           text: '\''+totales[e]+'\'',
                           style: 'body'
                         });
                       }

                       matriz1.push('');
                       matriz.push(matriz1);

                       //////
                       competencias.push(
                          {
                            table:{
                              dontBreakRows:true,
                            widths: widths2,
                            body:matriz
                          }
                        }
                        );
                        competencias.push({
                          text:'\n\nObservaciones\n\n',
                          style:'subtitle'
                        });
                        competencias.push(
                           {
                             table:{
                               dontBreakRows:true,
                             widths: '*',
                             body:[
                               [
                                 {
                                   text: row['observaciones'],
                                   style: 'body'
                                 }
                               ]
                             ]
                           }
                         }
                         );
                         competencias.push({
                           text:'\n\nAcciones\n\n',
                           style:'subtitle'
                         });
                         competencias.push(
                            {
                              table:{
                                dontBreakRows:true,
                              widths: '*',
                              body:[
                                [
                                  {
                                    text: row['acciones'],
                                    style: 'body'
                                  }
                                ]
                              ]
                            }
                          }
                          );
                        /////////////////
                        var docDefinition = {
                          pageMargins: [40, 130, 40, 40],
                          header: {
                            margin: 30,
                            columns: [
                              {
                                table: {
                                  widths: ['*'],
                                  body: [
                                    [
                                      {
                                        text: 'Tecnológico Nacional de México\n',
                                        style: 'header'
                                      }
                                    ],
                                    [
                                      {
                                        text: 'Instituto Tecnológico de Tepic\n',
                                        style: 'subheader'
                                      }
                                    ],
                                    [
                                      {
                                        text:
                                        'Subdirección Académica\n'+
                                        'Instrumentación Didáctica para la Formación y Desarrollo de Competencias Profesionales\n'+
                                        'Código: ITTEPIC-AC-PO-004-01   Revisión: 4\n'+
                                        'Referencia a la norma ISO9001:2008  7.1, 7.2.1, 7.5.1, 8.1, 8.2.4\n\n\n',
                                        style: 'bodyheader'
                                      }
                                    ]
                                  ]
                                },
                                layout: 'noBorders'
                              }//columns
                            ]
                          },//header,
                          footer: {
                            margin: [30,0,30,30],
                            columns: [
                              { text: 'ITTEPIC-AC-PO-004-01', style: 'subtitle',alignment: 'left'},
                              { text: 'Revisión: 4', alignment: 'right',style: 'subtitle' }
                            ]
                          },
                          content: [
                            {
                              text: 'Periodo '+periodo+"\n",
                              style: 'title',
                              alignment: 'center'
                            },
                            {
                              style: 'tableExample',
                              table: {
                                widths: ['*', '*'],
                                body: [
                                  [
                                    { text: 'Nombre de la asignatura: '+materia, style: 'body' },
                                    { text: 'Plan de estudios grupo base: '+planestudios, style: 'body'}
                                  ],
                                  [
                                    { text: 'Clave de asignatura: '+clavemateria, style: 'body' },
                                    { text: 'Horas teoría - horas prácticas - créditos: '+ht+" - "+hp+" - "+creditos, style: 'body'}
                                  ],
                                  [
                                    { text: 'Nombre del maestro: '+maestro, style: 'body' },
                                    { text: 'Carrera: '+carrera, style: 'body'}
                                  ]
                                ]
                              }
                            },
                            {
                              style: 'tableExample',
                              table: {
                                widths: ['*'],
                                body: [
                                  [
                                    { text: '1. Caracterización de la Asignatura.', style: 'subtitle' }
                                  ],
                                  [
                                    { text: caracterizacionAsignatura, style: 'body' }
                                  ]
                                ]
                              }
                            },
                            {
                              style: 'tableExample',
                              table: {
                                widths: ['*'],
                                body: [
                                  [
                                    { text: '2. Intención Didáctica.', style: 'subtitle' }
                                  ],
                                  [
                                    { text: intencionDidactica, style: 'body' }
                                  ]
                                ]
                              }
                            },
                            {
                              style: 'tableExample',
                              table: {
                                widths: ['*'],
                                body: [
                                  [
                                    { text: '3. Competencia de la asignatura.', style: 'subtitle' }
                                  ],
                                  [
                                    { text: competenciaAsignatura, style: 'body' }
                                  ]
                                ]
                              }
                            },
                            {
                              style: 'tableExample',
                              table: {
                                widths: ['*'],
                                body: [
                                  [
                                    { text: '4. Fuentes de información y apoyos didácticos.', style: 'subtitle' }
                                  ],
                                  [
                                    { text: bibliografia, style: 'body' }
                                  ]
                                ]
                              }
                            },
                            { text: '5. Calendarización de evaluación en semanas:', style: 'subtitle' },
                            {
                              style: 'tableExample',
                              table: {
                                widths: widths,
                                body:semanas
                              }
                            },
                            { text: '6. Logros:', style: 'subtitle' },
                            {
                              style: 'tableExample',
                              table: {
                                widths: widths2,
                                body: logros
                              }
                            },
                            { text: '\n\n\n\n', style: 'subtitle' },
                            {
                              columns: [
                                {
                                  width: '*',
                                  text: '__________________________________________________\n'+maestro,
                                  style: 'subtitle',
                                  alignment: 'center'
                                },
                                {
                                  width: 'auto',
                                  text: '   ',
                                  style: 'subtitle'
                                },
                                {
                                  width: '*',
                                  text: '__________________________________________________\nNombre y firma del(de la) \nJefe(a) de Departamento  Académico',
                                  style: 'subtitle',
                                  alignment: 'center'
                                }
                              ]
                            },
                            { text: '\n\nFecha de elaboración: '+date.getDate()+'/'+(date.getMonth()+1)+'/'+date.getFullYear(), style: 'subtitle',alignment: 'right', decoration: 'underline', pageBreak: 'after'},
                            competencias


                          ],
                          styles: {
                            header: {
                              fontSize: 14,
                              bold: true,
                              alignment: 'center'
                            },
                            subheader: {
                              fontSize: 12,
                              bold: true,
                              alignment: 'center'
                            },
                            bodyheader: {
                              fontSize: 10,
                              bold: false,
                              alignment: 'center'
                            }
                            ,title: {
                              fontSize: 10,
                              bold: true,
                              alignment: 'justified'
                            },
                            subtitle: {
                              fontSize: 7,
                              bold: true,
                              alignment: 'justified'
                            },
                            body: {
                              fontSize: 7,
                              bold: false,
                              alignment: 'justified'
                            },
                            tableExample: {
                              margin: [0, 5, 0, 15],

                            },
                            tableHeader: {
                              bold: true,
                              fontSize: 13,
                              color: 'black'
                            }
                          }
                        };
                        console.log(JSON.stringify(docDefinition));
                        pdfMake.createPdf(docDefinition).open();
  		                 }

                });

                }//if done json5
              });//DONE json5
                }//if json4
              });



              }
            );

          //pdfMake.createPdf(docDefinition).print();
          //pdfMake.createPdf(docDefinition).download('InstrumentacionDidactica.pdf');
            }
          });//done Competencias
        }
      });//Materias
    }
  });//Materias



}

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
        periodo : $('#periodo').val()+' '+$('#anioperiodo').val(),
        planestudios : $('#planEstudios').val(),
        idmaestro : $('#maestro').val(),
        idmateria : $('#asignatura').val(),
        idcarrera : $('#carrera').val(),
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
    $('#tbDosi').dataTable().api().ajax.reload();
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
