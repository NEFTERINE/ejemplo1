<?php 

class Alumno
{
	function __construct()
	{
        require_once('conexion.php');
        $this->conexion=new Conexion();
	} 

    function insertar($nombre, $a_paterno,$a_materno,$matricula,$fkgrupo){
        $consulta= "INSERT INTO alumno (idalumno, nombre, apaterno,amaterno,matricula,fkgrupo) VALUES (NULL, '{$nombre}', '{$a_paterno}','{$a_materno}','{$matricula}','{$fkgrupo}')";
        $respuesta= $this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    function mostrarTodo(){
        $consulta="SELECT * FROM alumno a INNER JOIN grupo g ON a.fkgrupo = g.idgrupo";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;

    }

    function buscar($idalumno){
        $consulta="SELECT * FROM alumno WHERE idalumno= '{$idalumno}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function actualizar($idalumno,$nombre,$a_paterno,$a_materno,$matricula,$fkgrupo){
        $consulta= "UPDATE alumno SET nombre='{$nombre}', apaterno='{$a_paterno}', amaterno='{$a_materno}', matricula='{$matricula}', fkgrupo='{$fkgrupo}' WHERE idalumno='{$idalumno}'";
        $respuesta= $this->conexion->query($consulta);
        return $respuesta;
    }
    function baja($idalumno){
        $consulta="UPDATE alumno SET estatus=0 WHERE idalumno='{$idalumno}'";
        $respuesta= $this->conexion->query($consulta);
        return $respuesta;
    }
    
    function eliminar($idalumno){
        $consulta="DELETE FROM alumno WHERE idalumno='{$idalumno}'";
        $respuesta= $this->conexion->query($consulta);
        return $respuesta;
    }
}

 ?>