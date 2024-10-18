<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css?t=1">
	<script type="text/javascript" src="js/bootstrap.js"></script>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Control escolar</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="formulario_grupo.php">Agregar grupo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lista_grupo.php">Lista de grupos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario_alumno.php">Agregar alumno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lista_alumno.php">Lista de alumnos</a>
        </li>
        <?php
        if($_SESSION['tipo']==1){
          echo'<li class="nav-item">
          <a class="nav-link" href="formulario_usuario.php">Agregar usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lista_usuario.php">Lista de usuarios</a>
        </li>';
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>