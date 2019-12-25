<?php 
require_once('models/querysModel.php');
require_once('models/coderModel.php');
session_start();
if(!isset($_SESSION['usuario']))
{
  header('Location:index.php');
}

$query= new Querys();
$usuario= $query->setUserDB($_SESSION["usuario"]);
$usuario->agregarChannel($_POST["link"],$_POST["red"]);
$query->UpdateUser($usuario);
header('Location:profile.php');

 ?>