<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="css/lista-contactos.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <title>CODERS PLUG | Lista Contacto</title>
  <?=!include_once('head.php'); ?>
</head>
<body>
<?=!include_once('header.php'); ?>
<br>
<!-- contenedor ventana de chat -->
<div id="chatbox">
 <!-- lista de amigos -->
	<div id="friendslist">
     <!-- pestaña menu de contactos -->
    	<div id="topmenu">
        	<span class="friends"></span>
        </div>
       <!-- contenedor amigos -->
        <div id="friends">
          <!-- clase amigo -->
        	<div class="friend">
            	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1_copy.jpg" />
                <p>
                	<strong>Octavio Lorenzo</strong>
	                <span>octaviolorenzo@gmail.com</span>
                </p>
                <!-- estado disponible -->
                <div class="status available"></div>
            </div>
            <!-- clase amigo -->
            <div class="friend">
            	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
                <p>
                	<strong>Martin Paso</strong>
	                <span>martinpaso@gmail.com</span>
                </p>
                <!-- estado ausente -->
                <div class="status away"></div>
            </div>
            <!-- clase amigo -->
            <div class="friend">
            	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3_copy.jpg" />
                <p>
                	<strong>Camilo Sesto</strong>
	                <span>camilosesto@gmail.com</span>
                </p>
                <!-- estado inactivo -->
                <div class="status inactive"></div>
            </div>
            <!-- clase amigo -->
            <div class="friend">
            	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4_copy.jpg" />
                <p>
                	<strong>Leonel Lima</strong>
	                <span>leonellima@gmail.com</span>
                </p>
                <!-- estado inactivo -->
                <div class="status inactive"></div>
            </div>
            <!-- clase amigo -->
            <div class="friend">
            	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5_copy.jpg" />
                <p>
                <strong>Daniel Santi</strong>
	                <span>danielsanti@gmail.com</span>
                </p>
                <!-- clase inactivo -->
                <div class="status inactive"></div>
            </div>
            <!-- buscador -->
            <div id="search">
	            <input type="text" id="searchfield" value="Buscar contactos..." />
            </div>

        </div>

    </div>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<br>
<?=!include_once('scripts.php'); ?>
</body>
</html>
