<?php 
require_once('models/querysModel.php');
require_once('models/coderModel.php');
session_start();
if(!isset($_SESSION['usuario']))
{
  header('Location:index.php');
}


if($_FILES["foto"]["error"]==0){
	move_uploaded_file($_FILES["foto"]["tmp_name"], "profileimg/".$_FILES["foto"]["name"]);
    $profile_img="profileimg/".$_FILES["foto"]["name"];
}
$query= new Querys();
$usuario= $query->setUserDB($_SESSION["usuario"]);
$usuario->setFoto($profile_img);
$query->UpdateUser($usuario);
header('Location:profile.php');


 ?>