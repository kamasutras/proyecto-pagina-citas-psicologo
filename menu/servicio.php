<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Psivaleparra - Servicios</title>
    <link href="../estilos/style.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/stylefooter.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/servicio_precio.css" rel="stylesheet" type="text/css"/>
    <link href="../estilos/style_form.css" rel="stylesheet" type="text/css" />
   
    <?php
        include("../service/contactform.php");
      ?>
  </head>


  <body>
   

    <header>
      <h1>Que podemos brindarte?</h1>
    </header>
    <nav class="menu_intuitivo" id="menu_intuitivos">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="registrarperfil.php">Registrar perfil</a></li>
        <li><a href="login.php">Iniciar sesion</a></li>
        <li><a href="servicio.php">Servicios</a></li>
        <li><a href="reservas.php">Reservar</a></li>
      </ul>
    </nav>
    <main>
      <table>
        <thead>
          <tr>
            <th>Servicio</th>
            <th>Precio estimado por sesión</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Terapia individual</td>
            <td>$80 - $200</td>
          </tr>
          <tr>
            <td>Terapia de pareja</td>
            <td>$100 - $250</td>
          </tr>
          <tr>
            <td>Terapia familiar</td>
            <td>$120 - $300</td>
          </tr>
          <tr>
            <td>Terapia grupal</td>
            <td>$50 - $100</td>
          </tr>
          <tr>
            <td>Asesoramiento y apoyo</td>
            <td>$60 - $150</td>
          </tr>
          <tr>
            <td>Evaluación psicológica</td>
            <td>$200 - $500</td>
          </tr>
          <tr>
            <td>Psicoterapia en línea</td>
            <td>$60 - $150</td>
          </tr>
          <tr>
            <td>Terapia de grupo temático</td>
            <td>$50 - $100</td>
          </tr>
        </tbody>
      </table>
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
