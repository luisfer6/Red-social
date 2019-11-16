<!DOCTYPE html>
<html>
<head>
	<?=!include('head.php') ?>
</head>
<body>

  <div class="container-fluid">
  	<div class="row">
  		<?=!include('navmini.php')  ?>
  		<div class="col-lg-3 col-md-5 d-none d-sm-none d-md-block  navaction">
  			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  			  <a class="navbar-brand" href="#">
    				<img src="img/title.png" width="150" height="auto" alt="">
  			  </a>
  			  <div class="profile ">
  			  	<img class="profileimg" src="img/profile.jpg">
  			  	<h3 class="username">@USERNAME</h3>
  			  	<h4 class="rol">Coder</h4>
  			  	<div>
  			  		<h6 class="option">Skills</h6>
	  			  	<h6 class="option">Channels</h6>
	  			  	<h6 class="option">Studies</h6>
	  			  	<h6 class="option">Interest</h6>
  			  	</div>
  			  </div>
    			  
			 </div>
			
  		</div>
  		<div class="col-lg-5 col-md-7 col-sm-12" >
  				<div class="text-center d-none d-sm-none d-md-block  ">
  					<h2 class="blanco "><span class="verde">P</span>rofile</h2>
  				</div>
  				<div class="text-center d-block d-sm-block d-md-none align-self-center profilesmall ">
  					<div class="row">
  						<div class="col-4">
  							<img class="profileimg" style="width: 100%" src="img/profile.jpg">
  						</div>

  						<div class="col-7">
  							<h5>USERNAME</h5>
  							<div class="text-left">
  								<h6 class="Skillsmini">Skills</h6>
	  							<h6 class="Skillsmini">Channels</h6>
	  							<h6 class="Skillsmini">Studies</h6>
	  							<h6 class="Skillsmini">Interest</h6>
  							</div>
  							<div class="row">
  								<div class="col-6">
  									<button type="button" class="btn btn-light">+</button>
  								</div>
  								<div class="col-6">
  									<button type="button" class="btn btn-light">MP</button>
  								</div>
  								
  							
  							</div>
  							
  						</div>	
  					</div>
  				</div>
  				
  			
  				<div class="post">
  					
  				</div>
  				<div class="post">
  					
  				</div>
  				<div class="post">
  					
  				</div>
  			
  		</div>
  		
  		<div class="colizq col-4 d-none d-lg-block">
  			
  				<div class="col-12">
  				<nav class="navbar navbar-light bg-light justify-content-between">
			  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Buscar en CoderPlug" aria-label="Search">
			    <button class="btn btn-central btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			  </form>
				  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
             <?=!include('navlateral.php') ?>
				 </div>

			</nav>
			</div>
			<div></div>
 
  		</div>
 	
  		
  </div>
 	</div>
 	


<?=!include('footer.php'); ?>

</body>
</html>