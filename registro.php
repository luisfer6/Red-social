<!DOCTYPE html>
<html>
	<title>CODERS PLUG | REGISTER</title>
	<?=!include_once('head.php'); ?>

<body>

  <?=!include_once('header.php'); ?>

  <div class="container">
  	<br>
  	<br>
  	<div class="row justify-content-center">
  		<div class="col-md-6">
  			<div class="card">
  				<header class="card-header">
  					<h4 class="card-title mt-2">Registrarse</h4>
  				</header>
  				<article class="card-body">
  					<form method="post" action="">
              <div class="form-row">
                <div class="col form-group">
                  <label>Tipo de Usuario</label>   
                  <select name="tipousuario" id="tipousuario" class="form-control">
                    <option value="1">
                      Coder
                    </option>
                  </select>
                </div> <!-- form-group -->
              </div>
  						<div class="form-row">
  							<div class="col form-group">
  								<label>Nombre</label>   
  								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="">
  							</div> <!-- form-group -->
  							<div class="col form-group">
  								<label>Apellido</label>
  								<input type="text" name="apellido" id="apellido" class="form-control" placeholder=" ">
  							</div> <!-- form-group -->
  						</div> <!-- form-row -->
  						<div class="form-group">
  							<label>Email</label>
  							<input type="email"name="email" id="email" class="form-control" placeholder="">
  						</div> <!-- form-group -->
  						<div class="form-group">
  							<label>Confirmar Email</label>
  							<input type="email" name="c-email" id="c-email" class="form-control" placeholder="">
  						</div> <!-- form-group -->
  						<div class="form-group">
  							<label class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="genero" id="genero" value="opcion1">
  								<span class="form-check-label"> Masculino </span>
  							</label>
  							<label class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" name="genero" id="genero" value="opcion2">
  								<span class="form-check-label"> Femenino</span>
  							</label>
  						</div> <!-- form-group -->
  						<div class="form-group">
  							<label>Contraseña</label>
  							<input class="form-control" type="password">
  						</div> <!-- form-group -->
  						<div class="form-group">
  							<label>Confirmar Contraseña</label>
  							<input class="form-control" type="password">
  						</div> <!-- form-group -->  
  						<div class="form-group">
  							<small class="form-text text-muted">No compartas tus datos con nadie.</small>
  						</div>
  						<div class="form-group">
  							<button type="submit" class="btn btn-primary btn-block"> Registrarse  </button>
  						</div> <!-- form-group -->                                                
  					</form>
  				</article> <!-- card-body -->
  			</div> <!-- card -->
  		</div> <!-- col -->

  	</div> <!-- row -->
  	<br>
  	<br>
</div> 
<!--container-->
<?=!include_once('scripts.php'); ?>
<?=!include_once('footer.php'); ?>

</body>
</html>