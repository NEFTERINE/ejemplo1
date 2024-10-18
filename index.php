<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<?php require_once('menu.php'); ?>

	<h2>Este es el index</h2>
	<h3> Bienvenido <?= $_SESSION['username'] ?></h3>

	<?php
		if($_SESSION['tipo']==1){
			echo"<a href='formulario_usuario.php'>Agregar Usuario</a>";
		}
	?>
</body>

</html>