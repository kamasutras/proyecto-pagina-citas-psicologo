<?php 

include("dbvaleparra.php");

if (isset($_POST['enviarcomentario'])) { 
    if (strlen($_POST['nombreUser']) >= 1
    && strlen($_POST['correoUser']) >= 1
    && strlen($_POST['comentarioUser']) >= 1) {
	    $nombreUser = trim($_POST['nombreUser']);
      $correoUser = trim($_POST['correoUser']);
	    $comentarioUser = trim($_POST['comentarioUser']);

	    $consulta = "INSERT INTO contact_form(nombreUser, correoUser, comentarioUser) VALUES ('$nombreUser','$correoUser','$comentarioUser')";
	    $resultado = mysqli_query($conex,$consulta);
  }
}

?>