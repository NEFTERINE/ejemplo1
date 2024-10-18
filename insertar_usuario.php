<?php
include('clases/Usuario.php');
$usuario=new Usuario();

$username=$_POST["username"];
$password=$_POST["password"];
$archivo=$_FILES['foto']['tmp_name'];
$nombre_archivo=$_FILES['foto']['name'];

move_uploaded_file($archivo,'img/'.$nombre_archivo);

$respuesta=$usuario->insertar($username,$password,2,$nombre_archivo);

if($respuesta){
    echo 'Guardado';

    echo"<script>
    alert('Bienvenido');
    window.location.href='formulario_usuario.php';
    </script>";

}else{
    echo 'No guardado';
    echo"<script>
    alert('Error al guardar');
    window.location.href='formulario_usuario.php';
    </script>"; 
}

?>