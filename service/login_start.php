<?php 

include("dbvaleparra.php");

if (isset($_POST['logearme'])) { 
	$correo = $_POST['correo'];
	$passwords = $_POST['passwords'];




$verificar_perfil = mysqli_query($conex,"select * from login_register where correo != '$correo' AND passwords != '$passwords'");

if (mysqli_num_rows($verificar_perfil) > 0){
	?> 
	<h3 style="background:rgba(255,0,0,0.6);color:white; padding:20px;">correo o contraena invalida!</h3>
  <?php
  }else {
		
		?> 
			<h3 style="background:rgba(0,255,0,0.6);color:white; padding:20px;">Bienvenidos a PsivaleParra!!!!</h3>
	   <?php
	}
}  

?>