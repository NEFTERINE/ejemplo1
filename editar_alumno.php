<?php
require_once ('clases/Alumno.php');
$alumno= new Alumno();

$idalumno= $_GET['alumno'];

$respuesta= $alumno->buscar($idalumno);
$datos=mysqli_fetch_assoc($respuesta);
?>

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
	require_once('clases/Grupo.php');
	$grupo=new Grupo();

	$resultados=$grupo->mostrarTodo();
	?>
	
	<div class="container">
		<form class="col-10 offset-1" action="actualizar_alumno.php" method="POST">
			<h2>Nuevo alumno</h2>
			<input type="hidden" name="idalumno" value="<?=$datos['idalumno']?>">

				<div class="row">
					<div class="col-12 col-lg-6">
						<label>Nombre</label>
						<input value="<?=$datos['nombre']?>" class="form-control" type="text" name="nombre">
				</div>
					<div class="col-12 col-lg-3">
						<label>Apellido paterno</label>
						<input value="<?=$datos['apaterno']?>" class="form-control" type="text" name="a_paterno">
				</div>
					<div class="col-12 col-lg-3">
						<label>Apellido materno</label>
						<input value="<?=$datos['amaterno']?>" class="form-control" type="text" name="a_materno">
				</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-6">
						<label>Matrícula</label>
						<input value="<?=$datos['matricula']?>" type="text" name="matricula" class="form-control">
					</div>
					<div class="col-12 col-lg-6">
						<label>Grupo</label>
						<select class="form-control" name="fkgrupo">
							<option value="">Selecciona una opcion</option>
							<?php 
								while($fila=mysqli_fetch_array($resultados)){
									if($fila['idgrupo']==$datos['fkgrupo']){
										$selected="selected";
									}else{
										$selected="";
									}
									echo "<option ".$selected." value='".$fila['idgrupo']."'>".$fila['cuatrimestre']."-".$fila['letra']."</option>";
								}
							?>

						</select>
					</div>
				</div>
				<div class="row">
					<input class="btn btn-primary" type="submit" value="Guardar">
				</div>

		</form>
	</div>

</body>
</html>