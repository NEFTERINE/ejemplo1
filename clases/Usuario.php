<?php
class usuario
{

    function __construct()
    {
        require_once('conexion.php');

        $this->conexion = new Conexion();
    }

    function insertar($username, $password, $type, $foto)
    {
        $consulta = "INSERT INTO usuario(idusuario,username,password,type,estatus,foto) VALUES (NULL,'{$username}','{$password}','{$type}',1,'{$foto}')";
        $respuesta = $this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    function validar($username, $password)
    {

        $consulta = "SELECT * FROM usuario WHERE username='{$username}' AND password='{$password}' AND estatus=1";

        $respuesta = $this->conexion->query($consulta);
        return $respuesta;
    }
}
