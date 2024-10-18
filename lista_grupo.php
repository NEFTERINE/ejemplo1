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
	
	$respuesta=$grupo->mostrarTodo();
	?>

	<div class="container">
		<div class="col-8 offset-2">
			<h2>Grupos</h2>
			<table>
				<tr>
					<th>Nombre</th>
					<th>Opciones</th>
				</tr>
				<?php 
				while($fila=mysqli_fetch_array($respuesta))
				{
				 ?>
				 <tr>
				 	<td><?=$fila['cuatrimestre'].'-'.$fila['letra']?></td>
				 	<td>próximamente...</td>
				 </tr>
				 <?php 
				}
 				?>
			</table>
		</div>
	</div>

</body>
</html>