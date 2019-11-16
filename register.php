<!DOCTYPE html>
<html>
<head>
   <?=!include('head.php') ?>
</head>
<body>
  <?=!include('header.php') ?>

  <div class="container">
  	  	<div class="row">
  	  		<div class="col-lg-5 col-sm-12 centro">
  				<div class="row">
            <div class="col-12 text-center">
              <h2 class="blanco">Forma parte de <span class="verde">Coders</span>Plug</h2>
            </div>
            
            <div class="cards">
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
                      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                    </div> <!-- form-group -->
                    <div class="col form-group">
                      <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
                    </div> <!-- form-group -->
                  </div> <!-- form-row -->
                  <div class="form-group">
                    <input type="email"name="email" id="email" class="form-control" placeholder="Correo electronico">
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
                    <input class="form-control" type="password" placeholder="Contraseña">
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


    </div> <!-- row -->
  			</div>
  			<div class="col-lg-7 d-none d-lg-block centro ">
  				<img class="img-fluid" src="img/logop1.png">
  			</div>
  	  	</div>
  	
  </div>


<?=!include('footer.php'); ?>

</body>
</html>