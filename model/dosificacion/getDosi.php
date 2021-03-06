<?php
include("../../controller/conexiondb.php");

$jsondata = array();

if($result = $database->query("SELECT *,(SELECT `name` FROM `maestro` as `m` WHERE `d`.`idmaestro` = `m`.`no_tarjeta`) as `maestro`,(SELECT `planEstudios` FROM `carrera` as `m` WHERE `d`.`idcarrera` = `m`.`idcarrera`) as `planestudios`,(SELECT `nombrecarrera` FROM `carrera` as `m` WHERE `d`.`idcarrera` = `m`.`idcarrera`) as `carrera`, (SELECT `nombre_abrev` FROM `materias` as `m` WHERE `d`.`idmateria` = `m`.`materiaid`) as `materia` FROM `dosificacion` as `d`")){
    if ($result -> num_rows > 0) {
        $jsondata["code"] = 200;
        $jsondata["msg"] = array();
        while($row = $result->fetch_object()){
            $jsondata["msg"][] = $row;
        }
        $jsondata["details"] = "OK";
    }else{
        $jsondata["code"] = 401;
        $jsondata["msg"] = $database->error;
        $jsondata["details"] = "OK";
    }

    $result -> close();
}else{
    $jsondata["code"] = 402;
    $jsondata["msg"] = $database->error;
    $jsondata["details"] = "OK";
}

header('Content-type: application/json; charset=utf-8');
header("Cache-Control: no-store");
echo json_encode($jsondata);
$database->close();
exit();
?>