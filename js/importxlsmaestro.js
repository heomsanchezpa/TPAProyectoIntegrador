var oFileIn;

$(function() {


    $('#importxls').click(function(){
        console.log('hola');
        $('#modalimportxls').modal('show');});
    
    $('#btnUpImportxls').on('click',function(){


        filePicked();

    });
});


function filePicked(oEvent) {
    // Get The File From The Input
    var file = document.getElementById('files').files[0];
    var oFile = file;
    var sFilename = oFile.name;
    // Create A File Reader HTML5
    var reader = new FileReader();
    
    // Ready The Event For When A File Gets Selected
    reader.onload = function(e) {
        var data = e.target.result;
        var cfb = XLS.CFB.read(data, {type: 'binary'});
        var wb = XLS.parse_xlscfb(cfb);
        // Loop Over Each Sheet
        wb.SheetNames.forEach(function(sheetName) {
            // Obtain The Current Row As CSV
            var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);   
            var data = XLS.utils.sheet_to_json(wb.Sheets[sheetName], {header:1});   
            var max = data.length;
            var cuenta = max - 1;
            for(i=1;i<cuenta;i++){
                console.log(data[i][0],data[i][1]);
                var name = data[i][0];
                var origen = data[i][1];

                var nombre = $(this).find('Nombre').text(),
                                apellido_pat = $(this).find('Apellidopat').text();
                                apellido_mat = $(this).find('Apellidomat').text();
                                area_academica = $(this).find('AreaAcademica').text();
                                no_tarjeta = $(this).find('NoTarjeta').text();
                                rfc = $(this).find('RFC').text();
                                sexo = $(this).find('Sexo').text();
                                clave_area = $(this).find('ClaveArea').text();


                $.ajax({
                    data: {
                        name: nombre,
                                    lastnameP: apellido_pat,
                                    lastnameM: apellido_mat,
                                    sex: sexo,
                                    area_academica: area_academica,
                                    clave_area: clave_area,
                                    rfc: rfc,
                                    no_tarjeta: no_tarjeta
                    },
                    url: '/TPAProyectoIntegrador/model/maestro/newMaestro.php',
                    type: 'post',
                    beforeSend: function() {
                        $("#resultado").html("Procesando, espere por favor...");
                    },
                    success: function(response) {

                        console.log('Se inserto el registro en la BD');

                    }
                });
                
            }

        });
    };
    
    // Tell JS To Start Reading The File.. You could delay this if desired
    reader.readAsBinaryString(oFile);
}