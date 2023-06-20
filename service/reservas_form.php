<?php 

include("dbvaleparra.php");

if (isset($_POST['reservar'])) { 

  if (strlen($_POST['nomclient']) >= 1 
  && strlen($_POST['apellido1']) >= 1
  && strlen($_POST['apellido2']) >= 1
  && strlen($_POST['correo']) >= 1
  && strlen($_POST['fechahora']) >= 1
  && strlen($_POST['motivo']) >= 1 
  && strlen($_POST['descripcion']) >= 1
  && strlen($_POST['online_presencial'])>= 1
  && strlen($_POST['telefono']) >= 1 ){
    
    $nomclient = $_POST['nomclient'];
    $apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
	$fechahora = $_POST['fechahora'];
	$motivo = $_POST['motivo'];
	$descripcion = $_POST['descripcion'];
	$online_presencial = $_POST['online_presencial'];



    $consulta = "INSERT INTO reservas (nomclient, apellido1, apellido2, correo, telefono, fechahora, motivo, descripcion, online_presencial) VALUES ('$nomclient','$apellido1','$apellido2','$correo',  '$telefono', '$fechahora','$motivo','$descripcion','$online_presencial')";
    
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        ?> 
        <h3 style="background:rgba(92, 255, 92, 0.767);color:white; padding:20px;">Tu reserva ha sido enviada, te enviaremos un correo con mas informacion!</h3>
   <?php
    
    }
}  
}

?>
   
