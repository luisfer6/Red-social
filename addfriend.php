<?php
require_once('models/querysModel.php');
require_once('models/coderModel.php');
session_start();
$query= new Querys();
$usuario= $query->setUserDB($_SESSION['usuario']);
$usuario->agregarFriend($_POST["email"]);
$query->UpdateUser($usuario);

header('Location: friendsearch.php');


 ?>