<?php 
require_once('models/querysModel.php');
  function validacionuser(){
    $query= new Querys();

      $prueba= $query->setUserDB($_POST["email"]);
      if(password_verify($_POST["password"],$prueba->getPassword()))
      {
          session_start();
          $_SESSION['usuario']=$_POST["email"];
          if(isset($_POST["recordar"])){
            setcookie("email",$_POST["email"],time() + 24000);
          }
          return 'Location: profile.php';
      }

     
       return 'Location:'.'index.php'."?error=001";
        
      
  }

 header(validacionuser());
  

 ?>