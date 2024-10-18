<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<?php require_once('menu.php') ?>

	<div class="container">
		<form class="col-6 offset-3" action="insertar_grupo.php" method="POST">
			<h2>Nuevo grupo</h2>
			<div class="row">
				<div class="col-12 col-lg-4">
					<label>Cuatrimestre</label>
				</div>
				<div class="col-12 col-lg-8">
					<input type="number" name="cuatrimestre" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-lg-4">
					<label>Letra</label>
				</div>
				<div class="col-12 col-lg-8">
					<input type="text" name="letra" class="form-control">
				</div>
			</div>


			<div class="row">
				<input type="submit" value="Guardar">
			</div>

		</form>
	</div>

</body>

</html>