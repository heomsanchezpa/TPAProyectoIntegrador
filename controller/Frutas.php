<?php
$conexion = mysqli_connect( 'localhost', 'root', '', 'prueba');

$nombrefruta = '"'.$_POST['NombreFruta'].'"';
$origen = '"'.$_POST['Origen'].'"';

if($conexion == FALSE){
  echo('Error en la conexion.');
  exit();
}

$resultado = mysqli_query($conexion, 'INSERT INTO Frutas(NombreFruta, Origen) VALUES('.$nombrefruta.','.$origen.')');

if($resultado == FALSE){
  echo('Error en la consulta');
  mysqli_close($conexion);
  exit();
}

else {
  echo 'Se inserto la fruta';
}

mysqli_close($conexion);


 ?>
