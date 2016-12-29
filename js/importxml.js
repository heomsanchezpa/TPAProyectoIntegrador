$(function(){







    $('#importxml').click(function(){
		console.log('hola');
		$('#modalimport').modal('show');});


    $('#btnUpImport').on('click', function() {
        readBlob();
    });




    function readBlob() {
        var my_timer;
        var e = null;
        var contenido = "";
        var files = document.getElementById('files').files;
        if (!files.length) {

            $('#contenido').hide().append('<br/><div class="alert alert-danger"><strong>Advertencia!</strong> Elija un archivo XML.</div>').fadeIn(1000);
            clearTimeout(my_timer);
            my_timer = setTimeout(function() {
                $('#contenido').hide(2000);
            }, 3000); //Mostrar mensaje de error
            return;
        }

        var file = files[0];


        var $reader = new FileReader();

        $reader.onloadend = function(evt) {
            if (evt.target.readyState == FileReader.DONE) {
                contenido = evt.target.result;
                //console.log(contenido); //Imprime el contenido del archivo
                try {
                    xmlDoc = $.parseXML(contenido);
                    $xml = $(xmlDoc);
                    $title = $xml.find("Alumno")
                    console.log(($title).text().length);

                    if ($title.length > 0) {
                        $title.each(function() {
                            var nombre = $(this).find('Nombre').text(),
                                apellido_pat = $(this).find('Apellidopat').text();
                                apellido_mat = $(this).find('Apellidomat').text();
                                carrera = $(this).find('Carrera').text();
                                creditos_aprobados = $(this).find('Creditosapro').text();
                                creditos_cursados = $(this).find('Creditoscursa').text();
                                curp = $(this).find('Curp').text();
                                email = $(this).find('Email').text();
                                especialidad = $(this).find('Especialidad').text();
                                fecha_nac = $(this).find('Nacimiento').text();
                                nacionalidad = $(this).find('Nacionalidad').text();
                                nip = $(this).find('Nip').text();
                                no_control = $(this).find('NoControl').text();
                                periodo_ingreso = $(this).find('Periodo').text();
                                promedio = $(this).find('Promedio').text();
                                reticula = $(this).find('Reticula').text();
                                semestre = $(this).find('Semestre').text();
                                sexo = $(this).find('Sexo').text();
                                status = $(this).find('Status').text();



                            $.ajax({
                                data: {
                                    nombre: nombre,
									apellidopat: apellido_pat,
									apellidomat: apellido_mat,
									nocontrol: no_control,
									carrera: carrera,
									semestre: semestre,
									status: status,
									reticula: reticula,
									nacimiento: fecha_nac,
									curp: curp,
									sexo: sexo,
									periodo: periodo_ingreso,
									promedio: promedio,
									creditosapro: creditos_aprobados,
									creditoscursa: creditos_cursados,
									email: email,
									nacionalidad: nacionalidad,
									nip: nip,
									especialidad: especialidad
                                },
                                url: '/TPAProyectoIntegrador/model/alumnos/insertar.php',
                                type: 'post',
                                beforeSend: function() {
                                    $("#resultado").html("Procesando, espere por favor...");
                                },
                                success: function(response) {
                                	console.log('bien');


                                }
                            });

                        });
                        $('#contenido').hide().append('<br/><div class="alert alert-success"><strong>Aviso!</strong> Se inserto correctamente el archivo XML.</div>').fadeIn(1000);
                        clearTimeout(my_timer);
                        my_timer = setTimeout(function() {
                            $('#contenido').hide(2000);
                        }, 3000); //Mensaje


                    } else {
                        $('#contenido').hide().append('<br/><div class="alert alert-danger"><strong>Advertencia!</strong> Inserte un archivo XML correcto.</div>').fadeIn(1000);
                        clearTimeout(my_timer);
                        my_timer = setTimeout(function() {
                            $('#contenido').hide(2000);
                        }, 3000); //Mensaje

                    }

                } catch (e) {
                    //console.log(e);
                    $('#contenido').hide().append('<br/><div class="alert alert-danger"><strong>Advertencia!</strong> El archivo que selecciono no parece ser XML.</div>').fadeIn(1000);
                    clearTimeout(my_timer);
                    my_timer = setTimeout(function() {
                        $('#contenido').hide(2000);
                    }, 3000); //Mensaje
                }
            } //if
        };
        $reader.readAsBinaryString(file);

    }




});