<?php 
require_once('models/querysModel.php');
require_once('models/coderModel.php');
session_start();

$contenido=$_POST["comentario"];
$time=new DateTime();
$post=["time"=> $time, "contenido" => $contenido];


$query= new Querys();
$usuario= $query->setUserDB($_SESSION["usuario"]);
$usuario->agregarPost($post);
$query->UpdateUser($usuario);
header('Location:profile.php');


 ?>