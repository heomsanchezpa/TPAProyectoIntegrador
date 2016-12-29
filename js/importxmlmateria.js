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
                    $title = $xml.find("Materia")
                    console.log(($title).text().length);

                    if ($title.length > 0) {
                        $title.each(function() {
                            var materiaid = $(this).find('MateriaID').text(),
                                nivel_escolar = $(this).find('NivelEscolar').text();
                                materia_tipo = $(this).find('TipoMateria').text();
                                clave_area = $(this).find('ClaveArea').text();
                                nombre_completo = $(this).find('NombreCompleto').text();
                                nombre_abrev = $(this).find('NombreAbrev').text();
                                creditos = $(this).find('Creditos').text();
                                carrera_id = $(this).find('CarreraID').text();



                            $.ajax({
                                data: {
                                    materiaid: materiaid,
									cbNivelEscolar: nivel_escolar,
                                    cbMateriaTipo: materia_tipo,
									clavearea: clave_area,
									nombremateria: nombre_completo,
                                    nombreabreviado: nombre_abrev,
                                    numerocreditos: creditos,
                                    cbNombreCarrera: carrera_id

									
                                },
                                url: '/TPAProyectoIntegrador/model/materias/newMateria.php',
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