<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/contacto.css">
    <title>CODERS PLUG | CONTACT</title>
  	<?=!include_once('head.php'); ?>
  </head>
  <body>
    <?=!include_once('header.php'); ?>
    <br>
      <ol class="ol1">
    <a href="https://twitter.com/">
      <i class="fab fa-twitter"></i></a>
    <a href="https://www.facebook.com/">
      <i class="fab fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/?hl=es-la">
      <i class="fab fa-instagram"></i></a>
      </ol>
    <br>
      <h1>Contact</h1>
      <br>
      <br>
      <br>
      <h2>Search us in:</h2>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13132.578090016908!2d-58.39241119134243!3d-34.6257879357225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb2520946ad7%3A0x531f8f8d460384ad!2sConstituci%C3%B3n%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1573686917354!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" align="right"></iframe>
    <br>
    <h3>Contact info:</h3>
    <h4>CONTACT | General</h4>
    <ol>
      <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
        email: general@codersplug.com</a></li>
      <li><a href="https://www.telefacil.com/wiki/index.php/Llamadas_desde_la_web">
        phone: 01-2345-6789</a></li></ol>
    <h4>CONTACT | Company</h4>
    <ol>
    <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
      email: company@codersplug.com</a></li>
    <li><a href="https://www.telefacil.com/wiki/index.php/Llamadas_desde_la_web">
      phone: 12-3456-7890</a></li></ol>
    <h4>CONTACT | Recruiter</h4>
    <ol>
      <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
        email: recruiter@codersplug.com</a></li>
      <li><a href="https://www.telefacil.com/wiki/index.php/Llamadas_desde_la_web">
        phone: 23-4567-8901</a></li></ol>
    <h4>CONTACT | Username</h4>
    <ol>
      <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
        email: username@codersplug.com</a></li>
      <li><a href="https://www.telefacil.com/wiki/index.php/Llamadas_desde_la_web">
        phone: 34-5678-9012</a></li></ol>
    <br>
    <h5>leave us your comment:</h5>
    <p>
    <label for="pagina">¿Que te parecio la pagina?</label></p>
    <br>
    <input type="radio" name="pagina" value="Mu"> <p>Muy buena </p>
    <br>
    <input type="radio" name="pagina" value="Bu"> <p>Buena, pero podria tener mayor utilidad </p>
    <br>
    <input type="radio" name="pagina" value="Ma"> <p>Mala </p>
    <br>
    <br>
    <p>
      <label for="recomendacion">¿Recomendarias la pagina?</label></p>
      <br>
      <input type="radio" name="recomendacion" value="si"> <p>Si</p>
      <br>
      <input type="radio" name="recomendacion" value="no"> <p>No</p>
      <br>
      <br>
      <p>
        <label for="datos">Dejanos tu comentario:</label></p>
        <br>
        <textarea name="name" rows="8" cols="80"></textarea>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="Nombre" value="" placeholder="escribi tu nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="Email" value="" placeholder="escribi tu email" required>
        <br>
        <button id="enviar" type="submit">Enviar</button>
        <button id="resetear" type="reset">Resetear</button>
  </body>
</html>
