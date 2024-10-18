
<?php 

class Grupo
{
	function __construct()
	{
        require_once('conexion.php');
        $this->conexion=new Conexion();
	} 

    function insertar($cuatrimestre, $letra){
        $consulta= "INSERT INTO grupo (idgrupo, cuatrimestre, letra) VALUES (NULL, '{$cuatrimestre}', '{$letra}')";
        $respuesta= $this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    function mostrarTodo(){
        $consulta="SELECT * FROM grupo";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;

    }

    function editar(){

    }

    function actualizar(){

    }

    function baja(){

    }


}

 ?>