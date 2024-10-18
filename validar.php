<?php

include('clases/Usuario.php');
$usuario=New Usuario;

$username=$_POST['username'];
$password=$_POST['password'];
$resultado=$usuario->validar($username, $password);
$num_rows=mysqli_num_rows($resultado); 
$datos=mysqli_fetch_assoc($resultado);
if($num_rows<=0){
    echo 'usuario y/o contraseña incorrectos';
    die();
}else{
    echo 'existe';
    session_start();
    $_SESSION['idusuario']=$datos['idusuario'];
    $_SESSION['tipo']=$datos['type'];
    $_SESSION['username']=$username;


    header('Location: index.php');
}


?>