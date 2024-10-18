<?php 
//incluye el archivo donde esta la clase
include('clases/Grupo.php');
//se crea una variable que represanta a la clase grupo
$grupo=new Grupo();
//recibimos datos desde el formulario_grupo
$cuatrimestre=$_POST['cuatrimestre'];
$letra=$_POST['letra'];

//mandamos a llamar la funcion de insertar
$resultado=$grupo->insertar($cuatrimestre, $letra);

if($resultado){
	echo 'Fue creado el grupo '.$cuatrimestre.'-'.$letra;
}else{
	echo 'Hubo un error al guardar ';
}

?>