<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 
	require_once('menu.php'); 
	require_once('clases/Alumno.php');
	$alumno=new Alumno();
	
	$respuesta=$alumno->mostrarTodo();
	?>

	<div class="container">
		<div class="col-8 offset-2">
			<h2>Alumnos</h2>
			<table>
				<tr>
					<th>Nombre</th>
					<th>A. Paterno</th>
					<th>A. Materno</th>
					<th>Matricula</th>
					<th>Grupo</th>
					<th>Opciones</th>
				</tr>
				<?php 
				while($fila=mysqli_fetch_array($respuesta))
				{
				 ?>
				 <tr>
				 	<td width="100px"><?=$fila['nombre']?></td>
				 	<td width="100px"><?=$fila['apaterno']?></td>
				 	<td width="100px"><?=$fila['amaterno']?></td>
				 	<td width="100px"><?=$fila['matricula']?></td>
				 	<td width="100px"><?=$fila['cuatrimestre']. $fila['letra']?></td>
				 	<td width="100px">
                        <a href="editar_alumno.php?alumno=<?=$fila['idalumno']?>" class="btn btn-warning">Editar</a>
                    </td>
				 </tr>
				 <?php 
				}
 				?>
			</table>
		</div>
	</div>

</body>
</html>