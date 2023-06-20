<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Psivaleparra - Reservas</title>
    <link href="../estilos/style.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/stylefooter.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/style_form.css" rel="stylesheet" type="text/css" />


      <?php
        include("../service/contactform.php");
        include("../service/reservas_form.php");
      ?>

  </head>

  <body>
    <header>
      <h1>Agenda tu cita</h1>
    </header>
    <nav class="menu_intuitivo">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="servicio.php">Servicios</a></li>
        <li><a href="reservas.php">Reservar</a></li>
      </ul>
    </nav>
    <main>
      <form class="form_reservas" method="POST">
        <h2>Reserva tu cita</h2>
        <label for="name">Nombres: *</label>
         <input type="text"placeholder="Nombres" id="name" name="nomclient" required>
        <label for="lastname">Apellido paterno: *</label>
        <input type="text" id="lastname" name="apellido1" placeholder="Apellido paterno" required>
        <label for="materno">Apellido materno: *</label>  
        <input type="text" id = "materno" name="apellido2" placeholder="Apellido materno"required> 
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="correo" placeholder="Correo electronico" required />
        <label for="phone">Teléfono:</label>
        <input type="tel" id="phone" name="telefono" placeholder="Telefono" required />
        <label for="date">Fecha y hora:</label>
        <input type="datetime-local" id="date" name="fechahora" required />
        <label for="motivo">Motivo de la consulta:</label>
        <select id="motivo" name="motivo">
          <option name="motivo" value="ansiedad">Ansiedad</option>
          <option name="motivo" value="depresion">Depresión</option>
          <option name="motivo" value="problemas-para-dormir">Problemas para dormir</option>
          <option name="motivo"  value="relaciones-interpersonales">Problemas en las relaciones interpersonales</option>
          <option name="motivo" value="manejo-de-estres">Manejo de estrés</option>
          <option name="motivo" value="trauma">Trauma</option>
          <option name="motivo" value="conflictos-laborales">Conflictos laborales</option>
          <option name="motivo"value="adicciones">Adicciones</option>
          <option name="motivo" value="otros">otros</option>  
       </select>

          <label for="motivo">Escribenos una descripcion de tu motivo:</label>
          <textarea id="motivo" name="descripcion" class="motivotext" placeholder="Escribe aquí tu motivo de consulta"></textarea>

          <label for="tipodecita">Como desea su cita con nuestro especialista?</label>
        <div class="optionradio">
          <input type="radio" id="opcion1" name="online_presencial" value="presencial" />
          <label for="opcion1">Presencial</label>
          <input type="radio" id="opcion2" name="online_presencial" value="online" />
          <label for="opcion2">Online</label>
        </div>

        <button type="submit" class="button_form" name="reservar" value="reservar">Reservar</button>
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
