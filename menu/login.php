<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Psicovaleparra - Iniciar Session</title>
    <link href="../estilos/style.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/stylefooter.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/style_form.css" rel="stylesheet" type="text/css" />
    
    <?php
        include("../service/contactform.php");
        include("../service/login_start.php");
        include("../service/register.php");

      ?>
  </head>

  <body>
    <header>
      <h1>Iniciar session</h1>
    </header>
    <nav class="menu_intuitivo">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="registrarperfil.php">Crear cuenta</a></li>
        <li><a href="servicio.php">Servicios</a></li>
        <li><a href="reservas.php">Reservar</a></li>
      </ul>
    </nav>
    <main>
      <form class="form_login" method="POST" >
        <h2>Iniciar Session</h2>

        <label for="name">Correo electronico:</label>
        <input type="email" id="email" name="correo" placeholder=" Correo electronico"  />
        <label for="paassword">Contraseña: </label>
        <input type="password" id="password" name="passwords" placeholder=" Contrasena" />

        <button type="submit" class="button_form" value="entrar" name="logearme">Entrar</button>
        <a href="registrarperfil.php">Olvide mi password</a>
      </form>
    </main>


   

    <footer>
      <div class="container">
        <div class="footer-left">
          <h3>PSIvaleparra</h3>
          <p>avenida 1 #6575</p>
          <p>+56991037477</p>
        </div>
        <div class="footer-right">
          <h3>Envianos tu comentario acerca de nuestro servicio!</h3>
          <form method="POST">
            <input type="text" placeholder=" Nombre" name="nombreUser"/>
            <input type="email" placeholder=" Correo electrónico"  name="correoUser"/>
            <textarea placeholder=" Mensaje" name="comentarioUser"></textarea>
            <button type="submit" value="enviar" class="button_footer" name="enviarcomentario">Enviar</button>
          </form>
        </div>
      </div>
    </footer>
  </body>
</html>
