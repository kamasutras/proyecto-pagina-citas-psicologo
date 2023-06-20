<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PSicovaleparra - Home</title>
    <link href="estilos/style.css" rel="stylesheet" type="text/css" />
    <link href="estilos/stylefooter.css" rel="stylesheet" type="text/css" />
    <link href="estilos/biografia.css" rel="stylesheet" type="text/css" />
    <link href="estilos/style_form.css" rel="stylesheet" type="text/css" />
    <?php
        include("service/contactform.php");
      ?>
  </head>

  <body>
    <header>
      <h1>Bienvenidos a:</h1>
      <img
        src="content/Logo_Psicologia_Cerebro_Rosa-removebg-preview.png"
        alt=""
        class="img_logo"
      />
    </header>
    <nav class="menu_intuitivo">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu/servicio.php">Servicios</a></li>
        <li><a href="menu/reservas.php">Reservar</a></li>
      </ul>
    </nav>
    <main>
      <div class="container_bio">
        <div class="image_bio">
          <img src="content/vale.jpg" alt="valentina Parra" />
        </div>
        <h1 class="">Valentina Parra</h1>
        <h2>Estudios</h2>
        <p>
            -Titulada en psicologia de la universidad de Santiago de Chile.<br>
            -Diplomada en psicologia educacional y clinica infanto juvenil.<br>
            -Conocimientos en trabajo de convivencia Escolar, integracion escolar,<br>
             Necesidades educativas especialeas, psicoterapia infanto-juvenil  
        </p>
        <h2>Información personal</h2>
        <p><strong>Lugar de nacimiento:</strong> Santiago de Chile , oriunda de Batuco, comuna de Lampa</p>
        <p>
          <strong>Correo electrónico:</strong>
          <a href="mailto:[correo electrónico]">V.parra0797@gmail.com</a>
        </p>
        <p>
          <strong>Redes sociales:</strong> instagram: v.parrap
        </p>
      </div>
    </main>

    <footer>
      <div class="container">
        <div class="footer-left">
          <h3>PSIvaleparra</h3>
          <p>Avenida 1 #6575</p>
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
