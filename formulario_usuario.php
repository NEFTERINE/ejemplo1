<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once('menu.php') ?>

    <form action="insertar_usuario.php" method="POST" enctype="multipart/form-data">
        <label>Nombre de usuario:</label> <br>
        <input type="text" name="username"><br><br>
        <label>Contraseña:</label> <br>
        <input type="password" name="password"><br><br>
        <label>Foto:</label> <br>
        <input type="file" name="foto"><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>