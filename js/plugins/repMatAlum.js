function xml_generate (){
    var xml = '<?xml version="1.0" encoding="utf-8"?>\n';
    xml = xml + '<Materia>\n';

    $("#contactos tr:gt(0):not(:hidden)").each(function () {
        var cells = $('td', this);
        console.log(cells.text());
        xml += '<NoControl>\n<id>' + cells.eq(0).text() + '</id>\n';
        xml += '<Nombre>' + cells.eq(1).text() + '</Nombre>\n';
        xml += '<Apellido>' + cells.eq(2).text() + '</Apellido>\n';
        xml += '<Semestre>' + cells.eq(3).text() + '</Semestre>\n';
        xml += '<Materia>' + cells.eq(4).text() + '</Materia>\n';
    });
    xml += '</reportemateriaalumnos>';
    saveXML(xml);
}

function saveXML(xml)
{
    var textFileAsBlob = new Blob([xml], {type:'text/xml'});
	var textFileAsBlob2 = new Blob([xml], {type:'application/xml'});

    var fileNameToSaveAs = "reportemateriaalumnos.xml";
	var fileNameToSaveAs2 = "reportemateriaalumnos2.xml";
	
    var downloadLink = document.createElement("a");
	var downloadLink2 = document.createElement("a");

    downloadLink.download = fileNameToSaveAs;
	downloadLink2.download = fileNameToSaveAs2;

    downloadLink.innerHTML = "My Hidden Link";
	downloadLink2.innerHTML = "My Hidden Link";
    
    window.URL = window.URL || window.webkitURL;

    downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
	downloadLink2.href = window.URL.createObjectURL(textFileAsBlob2);

    downloadLink.onclick = destroyClickedElement;
	downloadLink2.onclick = destroyClickedElement;

    downloadLink.style.display = "none";
	downloadLink2.style.display = "none";

    document.body.appendChild(downloadLink);
	document.body.appendChild(downloadLink2);
    downloadLink.click();
	downloadLink2.click();
}
 
function destroyClickedElement(event)
{
    document.body.removeChild(event.target);
}
