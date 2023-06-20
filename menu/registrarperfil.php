<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Psivaleparra - Registrar usuario</title>
    <link href="../estilos/style.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/stylefooter.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/style_form.css" rel="stylesheet" type="text/css" />
    <?php
        include("../service/register.php");
        include("../service/contactform.php");
      ?>


  </head>

  <body>
    <header>
      <h1>Registrar perfil</h1>
    </header>
    <nav class="menu_intuitivo">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="servicio.php">Servicios</a></li>
        <li><a href="reservas.php">Reservar</a></li>
      </ul>
    </nav>
    <main>
      <form class="form_register" method="POST">
        <h2>Registrar una cuenta</h2>

        <label for="name">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre ompleto" required />
        <label for="phone">Rut:</label>
        <input type="int" id="rut" name="rut" oninput="checkRut(this)" placeholder="ej: 11111111-1" required />
        <label for="email">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" placeholder="Correo electronico"  />
        <label for="phone">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Telefono"  />
        <label for="email">Contraseña: </label>
        <input type="password" id="password" name="passwords" placeholder="contrasena" />
        <label for="email">Confirmar contraseña: </label>
        <input type="password" id="password" name="passwords" placeholder="Confirmar contrasena"  />

        <button type="submit" class="button_form" value="enviar" name="register_user">Registrarme</button>
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
