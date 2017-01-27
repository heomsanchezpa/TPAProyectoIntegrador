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
                            var no_control = $(this).find('NoControl').text(),
                                carrera = $(this).find('Carrera').text(),
                                semestre = $(this).find('Semestre').text(),
                                status = $(this).find('Status').text(),
                                reticula = $(this).find('Reticula').text(),
                                especialidad = $(this).find('Especialidad').text(),
                                nombres = $(this).find('Nombre').text(),
                                apellido_pat = $(this).find('Apellidopat').text(),
                                apellido_mat = $(this).find('Apellidomat').text(),
                                fecha_nac = $(this).find('Nacimiento').text(),
                                curp = $(this).find('Curp').text(),
                                sexo = $(this).find('Sexo').text(),
                                periodo_ingreso = $(this).find('Periodo').text(),
                                creditos_aprobados = $(this).find('Creditosapro').text(),
                                creditos_cursados = $(this).find('Creditoscursa').text(),
                                email = $(this).find('Email').text(),
                                nacionalidad = $(this).find('Nacionalidad').text(),
                                nip = $(this).find('Nip').text(),
                                promedio = $(this).find('Promedio').text();


                            $.ajax({
                                data: {
                                    no_control: no_control,
									carrera: carrera,
                                    semestre: semestre,
                                    status: status,
                                    reticula: reticula,
                                    especialidad: especialidad,
                                    nombres: nombres,
                                    apellido_pat: apellido_pat,
                                    apellido_mat: apellido_mat,
                                    fecha_nac: fecha_nac,
                                    curp: curp,
                                    sexo: sexo,
                                    periodo_ingreso: periodo_ingreso,
                                    promedio: promedio,
                                    creditos_aprobados: creditos_aprobados,
                                    creditos_cursados: creditos_cursados,
                                    email: email,
                                    nacionalidad: nacionalidad,
                                    nip: nip


                                    

									
                                },
                                url: '/TPAProyectoIntegrador/model/alumno/NewAlumno.php',
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