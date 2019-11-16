<!DOCTYPE html>
<html>
<head>
	<?=!include('head.php') ?>
</head>
<body>

  <div class="container-fluid">
  	<div class="row">
        <?=!include('navmini.php') ?>
  		<div class="col-lg-3 col-md-5 d-none d-sm-none d-md-block  navaction">
  			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  			  <a class="navbar-brand" href="#">
    				<img src="img/title.png" width="150" height="auto" alt="">
  			  </a>
    			  <?=!include('navlateral.php') ?>
			 </div>
			
  		</div>
  		<div class="col-lg-5 col-md-7 col-sm-12" >
  				<div class="text-center  ">
  					<h2 class="blanco "><span class="verde">H</span>ome</h2>
  				</div>
  			   <div class="fixed">
          
            <?php for($i=0; $i<11;$i++) : ?>
              <div class="post">
              
            </div>
            <?php endfor ?>
         </div>
  				
  				
  			
  		</div>
  		<div class="colizq col-4 d-none d-lg-block">
  			
  				<div class="col-12">
  				<nav class="navbar navbar-light bg-light justify-content-between">
			  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Buscar en CoderPlug" aria-label="Search">
			    <button class="btn btn-central btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			  </form>
			</nav>
			</div>
			<div></div>
 
  		</div>
 	</div>
  </div>


<?=!include('footer.php'); ?>

</body>
</html>