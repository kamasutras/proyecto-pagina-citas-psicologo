<?php 

include("dbvaleparra.php");

if (isset($_POST['register_user'])) { 
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['rut']) >= 1
    && strlen($_POST['correo']) >= 1  && strlen($_POST['telefono']) >= 1
    && strlen($_POST['passwords']) >= 1 ) {
	    $nombre = trim($_POST['nombre']);
	    $rut = trim($_POST['rut']);
        $correo = trim($_POST['correo']);
	    $telefono = trim($_POST['telefono']);
        $passwords = trim($_POST['passwords']);

		$passwords = hash('ripemd160', $passwords);

	    $consulta = "INSERT INTO login_register(nombre, rut, correo, telefono, passwords) VALUES ('$nombre', '$rut', '$correo', '$telefono', '$passwords')";
		

		// verificar correo y rut para que no se repitan en la base de datos
		
		$verificar_correo = mysqli_query($conex,"select * from login_register where correo='$correo'");
		if (mysqli_num_rows($verificar_correo) > 0){
			?> 
			<h3 style="background:rgba(255,0,0,0.6);color:white; padding:20px; ;">Su correo ya esta regitrado, porfavor intentelo denuevo!</h3>
			<a href="../menu/registrarperfil.php"><h1 style="background:purple; color:blue; text-align:center;">volver</h1></a>
	  	<?php
			exit();
		}

				
		$verificar_rut = mysqli_query($conex,"select * from login_register where rut='$rut'");
		if (mysqli_num_rows($verificar_rut) > 0){
			?> 
			<h3 style="background:rgba(255,0,0,0.6);color:white; padding:20px; ;">Este rut ya esta regitrado, porfavor intentelo denuevo!</h3>
			<a href="../menu/registrarperfil.php"><h1 style="background:purple; color:blue; text-align:center;">volver</h1></a>
	  	<?php
			exit();
		}
		

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
		   header("location: ../menu/login.php"); 
		
	    } else {
	    	?> 
				<h3 style="background:rgba(255,0,0,0.6);color:white; padding:20px;">Ups hubo un error al registrar!</h3>
           <?php
	    }
    }   else {
	    	?> 
				<h3 style="background:rgba(255,0,0,0.6);color:white; padding:20px;">Porfavor verifique los campos.</h3>
         <?php
    }
}

?>