<?php
include('clases/Alumno.php');
$alumno = new Alumno();

$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$matricula = $_POST['matricula'];
$fkgrupo  = $_POST['fkgrupo'];

$respuesta = $alumno->insertar($nombre, $a_paterno, $a_materno, $matricula, $fkgrupo);
if ($respuesta) {
    echo 'guardado';
} else {
    echo 'no guardado';
}
